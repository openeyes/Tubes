<?php
$this->breadcrumbs = array(
	'Records'=>array('index'),
	'Create',
);

$this->layout = '//layouts/column1'
?>

<h1>Create New Patient Record</h1>
<?php
	echo $event->sender->menu->run();
	echo '<div>Step '.$event->sender->currentStep.' of '.$event->sender->stepCount;
	echo '<h3>'.$event->sender->getStepLabel($event->step).'</h3>';
	echo CHtml::tag('div',array('class'=>'form'),$form);
	Yii::app()->clientScript->registerScriptFile('/js/dataset.js');
?>