<?php
$this->breadcrumbs=array(
	'Records'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Records', 'url'=>array('index')),
	array('label'=>'View Record', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Records', 'url'=>array('admin')),
);
?>

<h1>Update Patient Record (<?php echo $model->hospital_number; ?>)</h1>
<div class="form">
<?php
	echo $form->renderBegin();
	echo $form->getActiveFormWidget()->errorSummary($model);
	$this->widget('zii.widgets.jui.CJuiTabs', array(
	    'tabs'=>array(
        'Patient Demographics' => $form->renderElement('step1'),
        'Ophthalmic History' => $form->renderElement('step2'),
        'Ophthalmic Exam' => $form->renderElement('step3'),
        'Surgical Details' => $form->renderElement('step4'),
			),
	));
	echo $form->renderButtons();
	echo $form->renderEnd();
?>
</div>

<script type="text/javascript">
$(function() {
	$('div.form').bind('tabscreate', function() {
		$('.ui-tabs-panel').each(function() {
			if($('.error', this).length) {
				id = $(this).attr('id');
				$('.ui-tabs-nav a[href$="#'+id+'"]', $(this).parent()).addClass('has_errors');
			}
		});
	});
});
</script>
