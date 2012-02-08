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
						'size' => 50,
					),
					'pt_first_name'=>array(
						'label' => 'First Name',
						'type' => 'text',
						'size' => 50,
					),
					'surg_op_date'=>array(
						'label' => 'Surgery Date (DD-MM-YYYY)',
						'value'=> '',
						'type' => 'zii.widgets.jui.CJuiDatePicker',
						'options' => array(
							'changeMonth' => true,
							'changeYear' => true,
							'yearRange' => '+0:+10',
							'dateFormat'=>'dd-mm-yy',
						),
					),
					'pt_dob'=>array(
						'label' => 'Date of Birth (DD-MM-YYYY)',
						'type' => 'zii.widgets.jui.CJuiDatePicker',
						'options' => array(
							'changeMonth' => true,
							'changeYear' => true,
							'yearRange' => '-100:+0',
							'dateFormat'=>'dd-mm-yy',
						),
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