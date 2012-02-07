<?php

class DatasetController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters() {
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules() {
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
					'actions'=>array('index','view'),
					'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
					'actions'=>array('admin','update','create'), //adapted from code.google.com/p/yii-user/wiki/API
					'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
					'actions'=>array('admin','delete'),
					'users'=>array('admin'),
			),
			array('deny',  // deny all users
					'users'=>array('*'),
			),
		);
	}

	public function beforeAction($action) {
		if(in_array($action->id, array('create'))) {
			$this->attachBehavior('wizard', array(
				'class' => 'application.extensions.WizardBehavior',
				'steps' => array('Patient Demographics' => '1', 'Ophthalmic History' => '2', 'Ophthalmic Exam' => '3', 'Surgical Details' => '4'),
				'autoAdvance' => false,
			));
		}
		return parent::beforeAction($action);
	}
	
	/**
	 * Multistep form for creating datasets
	 * @param string $step
	 */
	public function actionCreate($step = null) {
		$this->pageTitle = 'Create dataset';
		$this->process($step);
	}

	public function wizardStart($event) {
		$event->handled = true;
	}

	public function wizardProcessStep($event) {
		$modelName = 'DatasetFormStep'.$event->step;
		$model = new $modelName();
		$model->attributes = $event->data;
		$form = $model->getForm();
		if ($form->submitted() && $form->validate()) {
			$event->sender->save($model->attributes);
			$event->handled = true;
		} else {
			$this->render('create', compact('event','form'));
		}
	}

	public function wizardFinished($event) {
		if ($event->step===true) {
			$data = array();
			foreach($event->data as $step_data) {
				$data += $step_data;
			}
			$model = new Dataset();
			$model->attributes = $data;
			if($model->save()) {
				$event->sender->finishedUrl = array('view', 'id' => $model->id);
			} else {
				// Something went wrong
			}
		}
	}

	public function wizardInvalidStep($event) {
	}
	
	/**
	 * Tabbed form for editing datasets
	 * @param integer $id
	 * @todo Add tabs (jui?)
	 */
	public function actionUpdate($id) {
		
		$model=$this->loadModel($id);
		
		// Build form
		$form_elements = array(
			'step1' => array('type' => 'form', 'elements' => DatasetFormStep1::getElements()),
			'step2' => array('type' => 'form', 'elements' => DatasetFormStep2::getElements()),
			'step3' => array('type' => 'form', 'elements' => DatasetFormStep3::getElements()),
			'step4' => array('type' => 'form', 'elements' => DatasetFormStep4::getElements()),
		);
		$form = new CForm(array(
    	'showErrorSummary' => true,
			'elements' => $form_elements,
			'buttons' => array(
				'save' => array(
					'type' => 'submit',
					'label' => 'Save',
				),
			),
		), $model);
		
		if($form->submitted('save') && $form->validate()) {
			$form->loadData();
			if($model->save()) {
				$this->redirect(array('view','id' => $model->id));
			}
		} else {
			$this->render('update', compact('form','model'));
		}
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id) {
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
		throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Dataset');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Dataset('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Dataset']))
		$model->attributes=$_GET['Dataset'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Dataset::model()->findByPk((int)$id);
		if($model===null)
		throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dataset-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

}
