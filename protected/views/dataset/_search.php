<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'patient_id'); ?>
		<?php echo $form->textField($model,'patient_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hospital_number'); ?>
		<?php echo $form->textField($model,'hospital_number',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pt_first_name'); ?>
		<?php echo $form->textField($model,'pt_first_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pt_last_name'); ?>
		<?php echo $form->textField($model,'pt_last_name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ethnicity'); ?>
		<?php echo $form->textField($model,'ethnicity',array('size'=>26,'maxlength'=>26)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pt_dob'); ?>
		<?php echo $form->textField($model,'pt_dob',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pt_age'); ?>
		<?php echo $form->textField($model,'pt_age'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pt_sex'); ?>
		<?php echo $form->textField($model,'pt_sex',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surg_op_date'); ?>
		<?php echo $form->textField($model,'surg_op_date',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pt_part_of_study'); ?>
		<?php echo $form->textField($model,'pt_part_of_study',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'study_name'); ?>
		<?php echo $form->textField($model,'study_name',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ophth_diagnosis'); ?>
		<?php echo $form->textField($model,'ophth_diagnosis',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'angle_diagnosis'); ?>
		<?php echo $form->textField($model,'angle_diagnosis',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'if_secondary_specify'); ?>
		<?php echo $form->textField($model,'if_secondary_specify',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'glaucmed_beta_blockers'); ?>
		<?php echo $form->textField($model,'glaucmed_beta_blockers',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'glaucmed_prostaglandins'); ?>
		<?php echo $form->textField($model,'glaucmed_prostaglandins',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'glaucmed_pilocarpine'); ?>
		<?php echo $form->textField($model,'glaucmed_pilocarpine',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'glaucmed_alpha_agonists'); ?>
		<?php echo $form->textField($model,'glaucmed_alpha_agonists',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'glaucmed_topical_cai'); ?>
		<?php echo $form->textField($model,'glaucmed_topical_cai',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'glaucmed_sytemic_cai'); ?>
		<?php echo $form->textField($model,'glaucmed_sytemic_cai',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'glaucmed_none'); ?>
		<?php echo $form->textField($model,'glaucmed_none',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'glaucmed_not_available'); ?>
		<?php echo $form->textField($model,'glaucmed_not_available',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'corticosteroids_topical'); ?>
		<?php echo $form->textField($model,'corticosteroids_topical',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'corticosteroids_sub_conj'); ?>
		<?php echo $form->textField($model,'corticosteroids_sub_conj',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'corticosteroids_peri_orbital'); ?>
		<?php echo $form->textField($model,'corticosteroids_peri_orbital',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'corticosteroids_none'); ?>
		<?php echo $form->textField($model,'corticosteroids_none',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'corticosteroids_intravitreal'); ?>
		<?php echo $form->textField($model,'corticosteroids_intravitreal',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'corticosteroids_systemic'); ?>
		<?php echo $form->textField($model,'corticosteroids_systemic',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'corticosteroids_not_available'); ?>
		<?php echo $form->textField($model,'corticosteroids_not_available',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_bcva'); ?>
		<?php echo $form->textField($model,'asmt_bcva',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_cd_ratio'); ?>
		<?php echo $form->textField($model,'asmt_cd_ratio',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_cornea'); ?>
		<?php echo $form->textField($model,'asmt_cornea',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_iop1'); ?>
		<?php echo $form->textField($model,'asmt_iop1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_iop2'); ?>
		<?php echo $form->textField($model,'asmt_iop2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_iop3'); ?>
		<?php echo $form->textField($model,'asmt_iop3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_avg_iop'); ?>
		<?php echo $form->textField($model,'asmt_avg_iop'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_cct'); ?>
		<?php echo $form->textField($model,'asmt_cct',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_lens'); ?>
		<?php echo $form->textField($model,'asmt_lens',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'previous_post_op_motility'); ?>
		<?php echo $form->textField($model,'previous_post_op_motility',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'previous_surgery_tube'); ?>
		<?php echo $form->textField($model,'previous_surgery_tube',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'previous_surgery_VRSx'); ?>
		<?php echo $form->textField($model,'previous_surgery_VRSx',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'previous_surgery_silicone_oil'); ?>
		<?php echo $form->textField($model,'previous_surgery_silicone_oil',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'previous_surgery_silicone_removed'); ?>
		<?php echo $form->textField($model,'previous_surgery_silicone_removed',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'previous_surgery_cyclo_destruction'); ?>
		<?php echo $form->textField($model,'previous_surgery_cyclo_destruction',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'previous_surgery_trab_npfs_express'); ?>
		<?php echo $form->textField($model,'previous_surgery_trab_npfs_express',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'previous_surgery_corneal_tx'); ?>
		<?php echo $form->textField($model,'previous_surgery_corneal_tx',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'previous_surgery_comment'); ?>
		<?php echo $form->textArea($model,'previous_surgery_comment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_eye'); ?>
		<?php echo $form->textField($model,'asmt_eye',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anaesthetic_type'); ?>
		<?php echo $form->textField($model,'anaesthetic_type',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shunt_type'); ?>
		<?php echo $form->textField($model,'shunt_type',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anti_metabolites'); ?>
		<?php echo $form->textField($model,'anti_metabolites',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_operative_drugs'); ?>
		<?php echo $form->textField($model,'per_operative_drugs',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plate_position'); ?>
		<?php echo $form->textField($model,'plate_position',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tube_position'); ?>
		<?php echo $form->textField($model,'tube_position',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'patch'); ?>
		<?php echo $form->textField($model,'patch',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plate_limbus_distance'); ?>
		<?php echo $form->textField($model,'plate_limbus_distance',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supramid_in_eye'); ?>
		<?php echo $form->textField($model,'supramid_in_eye',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supramid_distance_from_limbus'); ?>
		<?php echo $form->textField($model,'supramid_distance_from_limbus',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tube_occlusion'); ?>
		<?php echo $form->textField($model,'tube_occlusion',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ligated'); ?>
		<?php echo $form->textField($model,'ligated',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'slit'); ?>
		<?php echo $form->textField($model,'slit',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viscoelastic'); ?>
		<?php echo $form->textField($model,'viscoelastic',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flow_tested'); ?>
		<?php echo $form->textField($model,'flow_tested',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surgical_comments'); ?>
		<?php echo $form->textArea($model,'surgical_comments',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surgeon_name'); ?>
		<?php echo $form->textField($model,'surgeon_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->