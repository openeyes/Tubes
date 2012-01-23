<!-- Print function -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/printView.js" type="text/javascript"></script>

<?php
$this->breadcrumbs=array(
	'Datasets'=>array('index'),
	$model->id,
);
$this->menu=array(
	array('label'=>'Display Records', 'url'=>array('index')),
	array('label'=>'Create Record', 'url'=>array('create')),
	array('label'=>'Update Record', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Record', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Record', 'url'=>array('admin')),
);
?>
<br/>
<a  onclick=" printPage(document.getElementById('printPage'));return false"><?php echo CHtml::image(Yii::app()->request->baseUrl."/images/print.gif", "printer");?></a><br/>
<br/>
<div id="printPage">
<h1>Patient (<?php echo $model->hospital_number; ?>) Dataset</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'hospital_number',
		'pt_first_name',
		'pt_last_name',
		//'ethnicity',
		'pt_dob',
		//'pt_age',
		'pt_sex',
		'surg_op_date',
		//'pt_part_of_study',
		/*'study_name',
		'ophth_diagnosis',
		'angle_diagnosis',
		'if_secondary_specify',
		'glaucmed_beta_blockers',
		'glaucmed_prostaglandins',
		'glaucmed_pilocarpine',
		'glaucmed_alpha_agonists',
		'glaucmed_topical_cai',
		'glaucmed_sytemic_cai',
		'glaucmed_none',
		'glaucmed_not_available',
		'corticosteroids_topical',
		'corticosteroids_sub_conj',
		'corticosteroids_peri_orbital',
		'corticosteroids_none',
		'corticosteroids_intravitreal',
		'corticosteroids_systemic',
		'corticosteroids_not_available',
		'asmt_bcva',
		'asmt_cd_ratio',
		'asmt_cornea',
		'asmt_iop1',
		'asmt_iop2',
		'asmt_iop3',
		'asmt_avg_iop',
		'asmt_cct',
		'asmt_lens',
		'previous_post_op_motility',
		'previous_surgery_tube',
		'previous_surgery_VRSx',
		'previous_surgery_silicone_oil',
		'previous_surgery_silicone_removed',
		'previous_surgery_cyclo_destruction',
		'previous_surgery_trab_npfs_express',
		'previous_surgery_corneal_tx',
		'previous_surgery_comment',*/
		'asmt_eye',
		'anaesthetic_type',
		'shunt_type',
		'anti_metabolites',
		'per_operative_drugs',
		'plate_position',
		'tube_position',
		'patch',
		'plate_limbus_distance',
		'supramid_in_eye',
		'supramid_distance_from_limbus',
		'tube_occlusion',
		'ligated',
		'slit',
		'viscoelastic',
		'flow_tested',
		'surgical_comments',
		'surgeon_name',
	),
)); ?>
</div>