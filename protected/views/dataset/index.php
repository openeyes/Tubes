<?php
$this->breadcrumbs=array(
	'Records',
);

$this->menu=array(
	array('label'=>'Manage Records', 'url'=>array('admin')),
);
?>

<h1>List Patient Records</h1>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'ajaxUpdate'=>false,
	'template'=>'{sorter}{pager}{summary}{items}{pager}',
	'itemView'=>'_view',
	'pager'=>array(
  	'maxButtonCount'=>'7',
	),
	'sortableAttributes'=>array(
		'hospital_number',
		'pt_first_name',
		'pt_last_name',
	),
)); ?>
