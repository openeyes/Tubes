<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patient-form',
	'enableAjaxValidation'=>false,
)); ?>
 

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	  
	 <div class="twocolumndiv">
        <div class="leftcolumn">
        </div>
        <div class="rightcolumn">
        </div>
    </div>
   
   
   
	<div class="twocolumndiv">
		  <div class="leftcolumn">
	
	
				<div class="row">
					<?php echo $form->labelEx($model,'hospitalNumber'); ?>
					<?php echo $form->textField($model,'hospitalNumber',array('size'=>27,'maxlength'=>20)); ?>
					<?php echo $form->error($model,'hospitalNumber'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'firstName'); ?>
					<?php echo $form->textField($model,'firstName',array('size'=>27,'maxlength'=>30)); ?>
					<?php echo $form->error($model,'firstName'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'lastName'); ?>
					<?php echo $form->textField($model,'lastName',array('size'=>27,'maxlength'=>30)); ?>
					<?php echo $form->error($model,'lastName'); ?>
				</div>
				
				<div class="row" align="left">
					<?php echo $form->labelEx($model,'ethnicity'); ?>
					<?php echo ZHtml::enumDropDownList($model,'ethnicity', array()); ?>
					<?php echo $form->error($model,'ethnicity'); ?>
				</div>
	
	
		</div>

		
		
		 <div class="rightcolumn">
				

				<div class="row">
					<?php echo $form->labelEx($model,'dob'); ?>
					 <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
								'model'=>$model,
								'attribute'=>'dob',
								'value'=>$model->dob,
								// additional javascript options for the date picker plugin
								'options'=>array(
												 'showAnim'=>'fold',
												 'showButtonPanel'=>true,
												 'autoSize'=>true,
												 'dateFormat'=>'yy-mm-dd',
												 'defaultDate'=>$model->dob,
												 ),
								)); ?>
								
								
					<?php echo $form->error($model,'dob'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'age'); ?>
					<?php echo $form->textField($model,'age',array('size'=>10,'maxlength'=>10)); ?>
					<?php echo $form->error($model,'age'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'gender'); ?>
					<?php echo ZHtml::enumDropDownList($model,'gender', array()); ?>
					<?php echo $form->error($model,'gender'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'partStudy'); ?>
					<?php echo ZHtml::enumDropDownList($model,'partStudy', array()); ?>
					<?php echo $form->error($model,'partStudy'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'studyName'); ?>
					<?php echo $form->textField($model,'studyName',array('size'=>14,'maxlength'=>10)); ?>
					<?php echo $form->error($model,'studyName'); ?>
				</div>
				
				
				
				
		</div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->