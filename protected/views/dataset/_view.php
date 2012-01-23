<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hospital_number')); ?>:</b>
	<?php echo CHtml::encode($data->hospital_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_first_name')); ?>:</b>
	<?php echo CHtml::encode($data->pt_first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_last_name')); ?>:</b>
	<?php echo CHtml::encode($data->pt_last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ethnicity')); ?>:</b>
	<?php echo CHtml::encode($data->ethnicity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_dob')); ?>:</b>
	<?php echo CHtml::encode($data->pt_dob); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_sex')); ?>:</b>
	<?php echo CHtml::encode($data->pt_sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surg_op_date')); ?>:</b>
	<?php echo CHtml::encode($data->surg_op_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_part_of_study')); ?>:</b>
	<?php echo CHtml::encode($data->pt_part_of_study); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('study_name')); ?>:</b>
	<?php echo CHtml::encode($data->study_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ophth_diagnosis')); ?>:</b>
	<?php echo CHtml::encode($data->ophth_diagnosis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('angle_diagnosis')); ?>:</b>
	<?php echo CHtml::encode($data->angle_diagnosis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('if_secondary_specify')); ?>:</b>
	<?php echo CHtml::encode($data->if_secondary_specify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('glaucmed_beta_blockers')); ?>:</b>
	<?php echo CHtml::encode($data->glaucmed_beta_blockers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('glaucmed_prostaglandins')); ?>:</b>
	<?php echo CHtml::encode($data->glaucmed_prostaglandins); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('glaucmed_pilocarpine')); ?>:</b>
	<?php echo CHtml::encode($data->glaucmed_pilocarpine); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('glaucmed_alpha_agonists')); ?>:</b>
	<?php echo CHtml::encode($data->glaucmed_alpha_agonists); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('glaucmed_topical_cai')); ?>:</b>
	<?php echo CHtml::encode($data->glaucmed_topical_cai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('glaucmed_sytemic_cai')); ?>:</b>
	<?php echo CHtml::encode($data->glaucmed_sytemic_cai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('glaucmed_none')); ?>:</b>
	<?php echo CHtml::encode($data->glaucmed_none); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('glaucmed_not_available')); ?>:</b>
	<?php echo CHtml::encode($data->glaucmed_not_available); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('corticosteroids_topical')); ?>:</b>
	<?php echo CHtml::encode($data->corticosteroids_topical); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('corticosteroids_sub_conj')); ?>:</b>
	<?php echo CHtml::encode($data->corticosteroids_sub_conj); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('corticosteroids_peri_orbital')); ?>:</b>
	<?php echo CHtml::encode($data->corticosteroids_peri_orbital); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('corticosteroids_none')); ?>:</b>
	<?php echo CHtml::encode($data->corticosteroids_none); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('corticosteroids_intravitreal')); ?>:</b>
	<?php echo CHtml::encode($data->corticosteroids_intravitreal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('corticosteroids_systemic')); ?>:</b>
	<?php echo CHtml::encode($data->corticosteroids_systemic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('corticosteroids_not_available')); ?>:</b>
	<?php echo CHtml::encode($data->corticosteroids_not_available); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_bcva')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_bcva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_cd_ratio')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_cd_ratio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_cornea')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_cornea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_iop1')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_iop1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_iop2')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_iop2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_iop3')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_iop3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_avg_iop')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_avg_iop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_cct')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_cct); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_lens')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_lens); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previous_post_op_motility')); ?>:</b>
	<?php echo CHtml::encode($data->previous_post_op_motility); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previous_surgery_tube')); ?>:</b>
	<?php echo CHtml::encode($data->previous_surgery_tube); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previous_surgery_VRSx')); ?>:</b>
	<?php echo CHtml::encode($data->previous_surgery_VRSx); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previous_surgery_silicone_oil')); ?>:</b>
	<?php echo CHtml::encode($data->previous_surgery_silicone_oil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previous_surgery_silicone_removed')); ?>:</b>
	<?php echo CHtml::encode($data->previous_surgery_silicone_removed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previous_surgery_cyclo_destruction')); ?>:</b>
	<?php echo CHtml::encode($data->previous_surgery_cyclo_destruction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previous_surgery_trab_npfs_express')); ?>:</b>
	<?php echo CHtml::encode($data->previous_surgery_trab_npfs_express); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previous_surgery_corneal_tx')); ?>:</b>
	<?php echo CHtml::encode($data->previous_surgery_corneal_tx); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previous_surgery_comment')); ?>:</b>
	<?php echo CHtml::encode($data->previous_surgery_comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_eye')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_eye); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anaesthetic_type')); ?>:</b>
	<?php echo CHtml::encode($data->anaesthetic_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shunt_type')); ?>:</b>
	<?php echo CHtml::encode($data->shunt_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anti_metabolites')); ?>:</b>
	<?php echo CHtml::encode($data->anti_metabolites); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('per_operative_drugs')); ?>:</b>
	<?php echo CHtml::encode($data->per_operative_drugs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plate_position')); ?>:</b>
	<?php echo CHtml::encode($data->plate_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tube_position')); ?>:</b>
	<?php echo CHtml::encode($data->tube_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patch')); ?>:</b>
	<?php echo CHtml::encode($data->patch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plate_limbus_distance')); ?>:</b>
	<?php echo CHtml::encode($data->plate_limbus_distance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supramid_in_eye')); ?>:</b>
	<?php echo CHtml::encode($data->supramid_in_eye); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supramid_distance_from_limbus')); ?>:</b>
	<?php echo CHtml::encode($data->supramid_distance_from_limbus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tube_occlusion')); ?>:</b>
	<?php echo CHtml::encode($data->tube_occlusion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ligated')); ?>:</b>
	<?php echo CHtml::encode($data->ligated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slit')); ?>:</b>
	<?php echo CHtml::encode($data->slit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viscoelastic')); ?>:</b>
	<?php echo CHtml::encode($data->viscoelastic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flow_tested')); ?>:</b>
	<?php echo CHtml::encode($data->flow_tested); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surgical_comments')); ?>:</b>
	<?php echo CHtml::encode($data->surgical_comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surgeon_name')); ?>:</b>
	<?php echo CHtml::encode($data->surgeon_name); ?>
	<br />

	*/ ?>

</div>