<?php
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
					),
					'pt_last_name'=>array(
						'label' => 'Last Name',
						'type' => 'text',
					),
					'pt_first_name'=>array(
						'label' => 'First Name',
						'type' => 'text',
					),
					'surg_op_date'=>array(
						'label' => 'Surgery Date',
						'type' => 'ext.my97DatePicker.JMy97DatePicker',
						'options' => array(
							'dateFmt'=>'dd-MM-yyyy',
						),
					),
					'pt_dob'=>array(
						'label' => 'Date of Birth',
						'type' => 'ext.my97DatePicker.JMy97DatePicker',
						'options' => array(
							'dateFmt'=>'dd-MM-yyyy',
						),
					),
					'pt_age'=>array(
						'label' => 'Age',
						'type' => 'text',
					),
					'pt_sex'=>array(
						'label' => 'Gender',
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
						'label' => 'Patient part of study',
						'type' => 'checkbox',
					),
					'study_name'=>array(
						'type' => 'text',
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