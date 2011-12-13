<?php
class WizardFormOphthalmicHistory extends CFormModel {
	
	public $ophth_diagnosis;
	public $if_secondary_specify;
	public $angle_diagnosis;
	public $glaucmed_prostaglandins;
	public $glaucmed_pilocarpine;
	public $glaucmed_topical_cai;
	public $glaucmed_sytemic_cai;
	public $glaucmed_alpha_agonists;
	public $glaucmed_none;
	public $glaucmed_not_available;
	
	public function rules() {
		return array(
			array('if_secondary_specify, glaucmed_prostaglandins, glaucmed_pilocarpine, glaucmed_topical_cai, glaucmed_sytemic_cai, glaucmed_alpha_agonists, glaucmed_none, glaucmed_not_available', 'safe'),
			array('ophth_diagnosis, angle_diagnosis', 'required'),
		);
	}
	
	public function getForm() {
		return new CForm(array(
				'elements'=>array(
					'ophth_diagnosis'=>array(
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
					'glaucmed_prostaglandins'=>array(
						'type' => 'checkbox',
					),
					'glaucmed_pilocarpine'=>array(
						'type' => 'checkbox',
					),
					'glaucmed_topical_cai'=>array(
						'type' => 'checkbox',
					),
					'glaucmed_sytemic_cai'=>array(
						'type' => 'checkbox',
					),
					'glaucmed_alpha_agonists'=>array(
						'type' => 'checkbox',
					),
					'glaucmed_none'=>array(
						'type' => 'checkbox',
					),
					'glaucmed_not_available'=>array(
						'type' => 'checkbox',
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