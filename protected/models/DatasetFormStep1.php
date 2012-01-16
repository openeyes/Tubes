<?php
//Default Timezone
date_default_timezone_set('Europe/London');
/**
 * Patient Demographics
 * @author jamie
 */
class DatasetFormStep1 extends CFormModel {
	public $hospital_number;
	public $pt_last_name;
	public $pt_first_name;
	public $surg_op_date;
	public $pt_dob;
	public $pt_age;
	public $pt_sex;
	public $ethnicity;
	public $pt_part_of_study;
	public $study_name;
	//public $defaultTimezone="date_default_timezone_set('Europe/London')";//Ernest
	private $_scenario='wizard';
	
	/**
	 * Validation rules must not conflict with model level rules
	 */
	public function rules() {
		return Dataset::model()->rules_step1();
	}
	
	public function getElements() {
		return array(
					'hospital_number'=>array(
						'type' => 'text',
						'size'=>50,
						'maxlength'=>50,
					),
					
					'pt_last_name'=>array(
						'label' => 'Last Name',
						'type' => 'text',
						'size'=>50,
						'maxlength'=>50,
					),
					'pt_first_name'=>array(
						'label' => 'First Name',
						'type' => 'text',
						'size'=>50,
						'maxlength'=>50,
					),
					
					'surg_op_date'=>array(
						'label' => 'Surgery Date (DD-MM-YYYY)',//Updated Label:Ernest
						'type' => 'ext.my97DatePicker.JMy97DatePicker',
						'htmlOptions'=>array(
							'value'=>$model->surg_op_date = date('d-m-Y') ,//added by Ernest
							'readonly'=>'readonly',
							'style'=>'width:330px;vertical-align:top',
							'class'=>'date',		
											),
						'options' => array(
							'dateFmt'=>'dd-MM-yyyy',
							'defaultDate'=>$model->surg_op_date,
							'showOn'=>'button', //options: 'focus', 'button', 'both'
							'buttonText'=>Yii::t('ui','Select form calendar'), 
							'buttonImage'=>Yii::app()->request->baseUrl.'/images/calendar2.png', 
							'buttonImageOnly'=>true,
							'defaultDate'=>$model->surg_op_date,
						),
					),
					

					'pt_dob'=>array(
						'label' => 'Date of Birth (DD-MM-YYYY)',//Changed Label:Ernest
						'type' => 'ext.my97DatePicker.JMy97DatePicker',
						'htmlOptions'=>array(
						'style'=>'width:330px;vertical-align:top',
						'onchange'=>'calcAge()',
						),
						'options' => array(
						'dateFmt'=>'dd-MM-yyyy',
						'showOn'=>'button', // options:'focus', 'button', 'both'
							'buttonText'=>Yii::t('ui','Select form calendar'), 
							'buttonImage'=>Yii::app()->request->baseUrl.'/images/calendar2.png', 
							'buttonImageOnly'=>true,
							'defaultDate'=>$model->pt_dob,
						),
					),
					
					'pt_age'=>array(
						'label' => 'Age',
						'type' => 'text',
						'size'=>50,
						'maxlength'=>50,
						'readonly'=>'readonly',
						
					),
					
					'pt_sex'=>array(
						'label' => 'Gender',
						'type' => 'dropdownlist',
						'style'=>'width:330px;vertical-align:top',
    				'items' => ZHtml::enumItem(Dataset::model(),  'pt_sex'),
    				'prompt' => 'Please select:',
					
					),

					'ethnicity'=>array(
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(),  'ethnicity'),
					'style'=>'width:330px;vertical-align:top',
    				'prompt' => 'Please select:',
					),
					'pt_part_of_study'=>array(
						'label' => 'Patient part of study',
						'type' => 'checkbox',
					),
					'study_name'=>array(
						'type' => 'text',
						'size'=>50,
						'maxlength'=>50,
					),
				);
	}
	
	public function getForm() {
		return new CForm(array(
				'elements' => $this->getElements(),
				'buttons' => array(
					'submit'=>array(
						'type'=>'submit',
						'label'=>'Next'
					),
				),
			), $this);
	}

}