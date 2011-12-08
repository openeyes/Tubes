<?php
$this->breadcrumbs=array(
	'Datasets',
);

$this->menu=array(
	array('label'=>'Create Dataset', 'url'=>array('create')),
	array('label'=>'Manage Dataset', 'url'=>array('admin')),
);
?>

<h1>Tube Patients Datasets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	//Ernest:: Added sort view from:http://www.eha.ee/labs/yiiplay/index.php/en/person/index?Person_sort=firstname
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
