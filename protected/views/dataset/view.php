<!-- Print function -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/printView.js" type="text/javascript"></script>

<?php
$this->breadcrumbs=array(
	'Records'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Records', 'url'=>array('index')),
	array('label'=>'Update Record', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Record', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Records', 'url'=>array('admin')),
);
?>
<a onclick=" printPage(document.getElementById('printPage'));return false"><?php echo CHtml::image(Yii::app()->request->baseUrl."/images/print.gif", "printer");?></a><br/>
<br/>
<div id="printPage">
<h1>View Patient Record (<?php echo $model->hospital_number; ?>)</h1>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'hospital_number',
		'pt_first_name',
		'pt_last_name',
		'pt_dob',
		'PtAge',
		'pt_sex',
		'surg_op_date',
		'asmt_eye',
		'AverageIOP',
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