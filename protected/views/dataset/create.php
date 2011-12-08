<?php
$this->breadcrumbs=array(
	'Datasets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Display Records', 'url'=>array('index')),
	array('label'=>'Manage Dataset', 'url'=>array('admin')),
);
?>

<h2>Create Tube Patient Dataset</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
