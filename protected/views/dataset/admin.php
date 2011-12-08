<?php
$this->breadcrumbs=array(
	'Datasets'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Dataset', 'url'=>array('index')),
	array('label'=>'Create Dataset', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('dataset-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Datasets</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dataset-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		//'patient_id',
		'hospital_number',
		'pt_first_name',
		'pt_last_name',
		'ethnicity',
		/*
		'pt_dob',
		'pt_age',
		'pt_sex',
		'surg_op_date',
		'pt_part_of_study',
		'study_name',
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
		'previous_surgery_comment',
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
