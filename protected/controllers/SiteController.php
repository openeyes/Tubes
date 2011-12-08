<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	 
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}


	
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}
	

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}
	


	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
	
	
		//Ernest::to use a model class, it needs to be instantiated
		//The object has access to all the ContactForm class properties and methods such as validation which is defined in the base class
		$model=new ContactForm;
		
		
		
		//Ernest:: if the $_POST variable exist or is set
		if(isset($_POST['ContactForm']))
		
		
		{
			//The results from the $_POST['ContactForm'] variable is assigned to the variable $attributes with $model as the handle
			//If the $_POST variable exist or is set, then assign the value to the $attributes variable and follow the next statement
			$model->attributes=$_POST['ContactForm'];
			
			
			//This is part of the statement that is run if the $POST variable is set from the contact form
			//If the model is validated then run all the php scripts in the if statement
			if($model->validate())
			
			
			{
				//a header variable is assigned to the From: and reply to emails
				//$model->email:: Access to the model(ContactForm email entered)
				
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";

				//mail is a yii function that sends emails from a page
				//the Yii::app()-> handle accesses all properties defined in the config yii application file
				//$model->subject:: Access the subject of the ContacForm model
				//$model->body:: Access the body of the ContacForm model
				//The final mailing includes the subject, body and the headers variable
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);

				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');

				$this->refresh();
			}

		}
		$this->render('contact',array('model'=>$model));
	}
	
	

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		
		
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())

				$this->redirect($this->createUrl('dataset/create'));
				//$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect($this->createUrl('site/login'));
		//$this->redirect(Yii::app()->homeUrl);
	}
}