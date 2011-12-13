<?php
class WizardFormPatientDemographics extends CFormModel {
	
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
	
	public function rules() {
		return array(
			array('pt_sex, pt_part_of_study, study_name', 'safe'), // Required for attributes that have no other rules
			array('hospital_number, pt_last_name, pt_first_name, surg_op_date, pt_dob, pt_age, ethnicity', 'required'),
		);
	}
	
	public function getForm() {
		return new CForm(array(
				'elements'=>array(
					'hospital_number'=>array(
						'type' => 'text',
					),
					'pt_last_name'=>array(
						'type' => 'text',
					),
					'pt_first_name'=>array(
						'type' => 'text',
					),
					'surg_op_date'=>array(
						'type' => 'ext.my97DatePicker.JMy97DatePicker',
						'options' => array(
							'dateFmt'=>'dd-MM-yyyy',
						),
					),
					'pt_dob'=>array(
						'type' => 'ext.my97DatePicker.JMy97DatePicker',
						'options' => array(
							'dateFmt'=>'dd-MM-yyyy',
						),
					),
					'pt_age'=>array(
						'type' => 'text',
					),
					'pt_sex'=>array(
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(),  'pt_sex'),
    				'prompt' => 'Please select:',
					),
					'ethnicity'=>array(
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(),  'ethnicity'),
    				'prompt' => 'Please select:',
					),
					'pt_part_of_study'=>array(
						'type' => 'checkbox',
					),
					'study_name'=>array(
						'type' => 'text',
					),
				),
				'buttons'=>array(
					'submit'=>array(
						'type'=>'submit',
						'label'=>'Next'
					),
				),
			), $this);
	}

}