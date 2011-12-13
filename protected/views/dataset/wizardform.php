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

<?php
	echo $event->sender->menu->run();
	echo '<div>Step '.$event->sender->currentStep.' of '.$event->sender->stepCount;
	echo '<h3>'.$event->sender->getStepLabel($event->step).'</h3>';
	echo CHtml::tag('div',array('class'=>'form'),$form);
?>