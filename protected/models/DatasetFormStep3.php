<?php
/**
 * Ophthalmic Exam
 * @author jamie
 */
class DatasetFormStep3 extends CFormModel {
	
	public $asmt_bcva;
	public $asmt_cd_ratio;
	public $asmt_cornea;
	public $asmt_iop1;
	public $asmt_iop2;
	public $asmt_iop3;
	public $asmt_cct;
	public $asmt_lens;
	public $previous_post_op_motility;
	public $previous_surgery_tube;
	public $previous_surgery_VRSx;
	public $previous_surgery_silicone_oil;
	public $previous_surgery_silicone_removed;
	public $previous_surgery_cyclo_destruction;
	public $previous_surgery_trab_npfs_express;
	public $previous_surgery_corneal_tx;
	public $previous_surgery_comment;

	private $_scenario='wizard';
	
	/**
	 * Validation rules must not conflict with model level rules
	 */
	public function rules() {
		return Dataset::model()->rules_step3();
	}

	public function getElements() {
		return array(
					'asmt_bcva'=>array(
						'label' => 'BCVA',
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(), 'asmt_bcva'),
    				'prompt' => 'Please select:',
					),
					'asmt_cd_ratio'=>array(
						'label' => 'CD Ratio',
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(), 'asmt_cd_ratio'),
    				'prompt' => 'Please select:',
					),
					'asmt_cornea'=>array(
						'label' => 'Cornea',
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(), 'asmt_cornea'),
    				'prompt' => 'Please select:',
					),
					'asmt_iop'=>array(
						'type' => 'form',
						'title' => 'Previous last 3 IOPs',
						'elements' => array(
							'asmt_iop1'=>array(
								'label' => '1',
								'type' => 'text',
								'size'=>5,
								'maxlength'=>2,
							),
							'asmt_iop2'=>array(
								'label' => '2',
								'type' => 'text',
								'size'=>5,
								'maxlength'=>2,
							),
							'asmt_iop3'=>array(
								'label' => '3',
								'type' => 'text',
								'size'=>5,
								'maxlength'=>2,
							),
						),
					),
					'asmt_cct'=>array(
								'label' => 'CCT',
								'type' => 'text',
								'size'=>7,
								'maxlength'=>4,
					),
					'asmt_lens'=>array(
						'label' => 'Lens',
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(), 'asmt_lens'),
    				'prompt' => 'Please select:',
					),
					'previous_post_op_motility'=>array(
						'label' => 'Previous pre-Op motility disturbance',
						'type' => 'dropdownlist',
    				'items' => ZHtml::enumItem(Dataset::model(), 'previous_post_op_motility'),
    				'prompt' => 'Please select:',
					),

			'previous_surgery'=>array(
					'type' => 'form',
					'title' => 'Previous Surgery',
					'elements' => array(
								'previous_surgery_tube'=>array(
									'label' => 'Tube',
									'type' => 'checkbox',
								),
								'previous_surgery_VRSx'=>array(
									'label' => 'VRSx',
									'type' => 'checkbox',
								),
								'previous_surgery_silicone_oil'=>array(
									'label' => 'Silicon Oil',
									'type' => 'checkbox',
								),
								'previous_surgery_silicone_removed'=>array(
									'label' => 'Silicon Removed?',
									'type' => 'checkbox',
								),
								'previous_surgery_cyclo_destruction'=>array(
									'label' => 'Cyclo Destruction',
									'type' => 'checkbox',
								),
								'previous_surgery_trab_npfs_express'=>array(
									'label' => 'Trab/NPFS/Express',
									'type' => 'checkbox',
								),
								'previous_surgery_corneal_tx'=>array(
									'label' => 'Corneal Tx',
									'type' => 'checkbox',
								),
						),
					),
					'previous_surgery_comment'=>array(
						'type' => 'textarea',
						'attributes' => array(
							'rows' => 3,
							'cols' => 50,
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
