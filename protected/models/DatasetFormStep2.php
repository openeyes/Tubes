<?php
/**
 * Ophthalmic History
 * @author jamie
 */
class DatasetFormStep2 extends CFormModel {
	
	public $ophth_diagnosis;
	public $if_secondary_specify;
	public $angle_diagnosis;
	public $glaucmed_beta_blockers;//Er update
	public $glaucmed_prostaglandins;
	public $glaucmed_pilocarpine;
	public $glaucmed_topical_cai;
	public $glaucmed_sytemic_cai;
	public $glaucmed_alpha_agonists;
	public $glaucmed_none;
	public $glaucmed_not_available;
	
	private $_scenario='wizard';
	
	/**
	 * Validation rules must not conflict with model level rules
	 */
	public function rules() {
		return Dataset::model()->rules_step2();
			}
	
	public function getElements() {
		return array(
					'ophth_diagnosis'=>array(
						'label' => 'Ophthalmic Diagnosis',
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(),  'ophth_diagnosis'),
    				'prompt' => 'Please select:',
					),
					'if_secondary_specify'=>array(
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(),  'if_secondary_specify'),
    				'prompt' => 'Please select:',
					),
					'angle_diagnosis'=>array(
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(),  'angle_diagnosis'),
    				'prompt' => 'Please select:',
					),
					
	//Glaucoma Medication header
		'glaucomaMedicationheader'=>array(
		'type' => 'form',
		'title' => 'Glaucoma Medications',
		'elements' =>array(
			//Added Beta Blockers
			'glaucmed_beta_blockers'=>array(
						'label' => 'Beta blockers',
						'type' => 'checkbox',
						'attributes' => array(
							'class' => 'medications-checkbox',
						),
					),
					
			'glaucmed_prostaglandins'=>array(
						'label' => 'Prostaglandins',
						'type' => 'checkbox',
						'attributes' => array(
							'class' => 'medications-checkbox',
						),
					),
			
			'glaucmed_pilocarpine'=>array(
						'label' => 'Pilocarpine',
						'type' => 'checkbox',
						'attributes' => array(
							'class' => 'medications-checkbox',
						),
					),
					'glaucmed_topical_cai'=>array(
						'label' => 'Topical CAI',
						'type' => 'checkbox',
						'attributes' => array(
							'class' => 'medications-checkbox',
						),
					),
					'glaucmed_sytemic_cai'=>array(
						'label' => 'Sytemic CAI',
						'type' => 'checkbox',
						'attributes' => array(
							'class' => 'medications-checkbox',
						),
					),
					'glaucmed_alpha_agonists'=>array(
						'label' => 'Alpha Agonist',
						'type' => 'checkbox',
						'attributes' => array(
							'class' => 'medications-checkbox',
						),
					),
				
					'glaucmed_none'=>array(
						'label' => 'None',
						'type' => 'checkbox',
						'attributes' => array(
							'class' => 'medications-checkbox medications-checkbox-ctl',
						),
					),
					'glaucmed_not_available'=>array(
						'label' => 'Not Available',
						'type' => 'checkbox',
						'attributes' => array(
							'class' => 'medications-checkbox medications-checkbox-ctl',
						),
					),
		
		),
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
						'label'=>'Next'
					),
				),
			), $this);
	}

}