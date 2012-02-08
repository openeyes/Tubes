<?php
/**
 * Surgical Details
 * @author jamie
 */
class DatasetFormStep4 extends CFormModel {
	
	public $asmt_eye;
	public $anaesthetic_type;
	public $shunt_type;
	public $anti_metabolites;
	public $plate_position;
	public $tube_position;
	public $plate_limbus_distance;
	public $tube_occlusion;
	public $supramid_in_eye;
	public $supramid_distance_from_limbus;
	public $ligated;
	public $slit;
	public $viscoelastic;
	public $flow_tested;
	public $patch;
	public $per_operative_drugs;
	public $surgical_comments;
	public $surgeon_name;

	private $_scenario='wizard';
	
	/**
	 * Validation rules must not conflict with model level rules
	 */
	public function rules() {
		return Dataset::model()->rules_step4();
	}

	public function getElements() {
		return array(
					'asmt_eye'=>array(
						'label' => 'Eye',
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(),  'asmt_eye'),
    				'prompt' => 'Please select:',
					),
					'anaesthetic_type'=>array(
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(),  'anaesthetic_type'),
    				'prompt' => 'Please select:',
					),
					'shunt_type'=>array(
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(),  'shunt_type'),
    				'prompt' => 'Please select:',
					),
					'anti_metabolites'=>array(
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(),  'anti_metabolites'),
    				'prompt' => 'Please select:',
					),
					'plate_position'=>array(
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(),  'plate_position'),
    				'prompt' => 'Please select:',
					),
					'tube_position'=>array(
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(),  'tube_position'),
    				'prompt' => 'Please select:',
					),
					'plate_limbus_distance'=>array(
						'label' => 'Plate Limbus Distance (mm)',
						'type' => 'text',
						'size'=>2,
						'maxlength'=>2,
						
					),
					'tube_occlusion'=>array(
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(),  'tube_occlusion'),
    				'prompt' => 'Please select:',
					),
					'supramid_in_eye'=>array(
						'type' => 'checkbox',
					),
					'supramid_distance_from_limbus'=>array(
						'label' => 'Supramid Distance from Limbus (mm)',
						'type' => 'text',
						'size'=>2,
						'maxlength'=>2,
						'hint' => ' if supramid not in the eye',
					),
					'ligated'=>array(
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(),  'ligated'),
    				'prompt' => 'Please select:',
					),
					'slit'=>array(
						'type' => 'checkbox',
					),
					'viscoelastic'=>array(
						'type' => 'checkbox',
					),
					'flow_tested'=>array(
						'type' => 'checkbox',
					),
					'patch'=>array(
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(),  'patch'),
    				'prompt' => 'Please select:',
					),
					'per_operative_drugs'=>array(
						'label' => 'Per-operative Steroids',
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(),  'per_operative_drugs'),
    				'prompt' => 'Please select:',
					),
					'surgical_comments'=>array(
						'type' => 'textarea',
						'attributes' => array(
							'rows' => 3,
							'cols' => 50,
						),
					),
					'surgeon_name'=>array(
						'label' => 'Primary Surgeon Name',
						'type' => 'text',
						'value'=>'',
					),
				);
	}
	
	public function getForm() {
		return new CForm(array(
				'elements' => $this->getElements(),
				'buttons' => array(
					'previous'=>array(
						'type'=>'submit',
						'label'=>'Back'
					),
					'submit'=>array(
						'type'=>'submit',
						'label'=>'Finish'
					),
				),
			), $this);
	}

}
		