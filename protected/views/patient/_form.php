<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patient-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'userId'); ?>
		<?php echo $form->textField($model,'userId',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'userId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hospital_number'); ?>
		<?php echo $form->textField($model,'hospital_number',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'hospital_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pt_first_name'); ?>
		<?php echo $form->textField($model,'pt_first_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pt_first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pt_last_name'); ?>
		<?php echo $form->textField($model,'pt_last_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pt_last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pt_ethnicity'); ?>
		<?php echo $form->textField($model,'pt_ethnicity',array('size'=>26,'maxlength'=>26)); ?>
		<?php echo $form->error($model,'pt_ethnicity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pt_dob'); ?>
		<?php echo $form->textField($model,'pt_dob'); ?>
		<?php echo $form->error($model,'pt_dob'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pt_age'); ?>
		<?php echo $form->textField($model,'pt_age',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pt_age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pt_sex'); ?>
		<?php echo $form->textField($model,'pt_sex',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'pt_sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pt_part_of_study'); ?>
		<?php echo $form->textField($model,'pt_part_of_study',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'pt_part_of_study'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pt_study_name'); ?>
		<?php echo $form->textField($model,'pt_study_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pt_study_name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->