<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hospital_number')); ?>:</b>
	<?php echo CHtml::encode($data->hospital_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_first_name')); ?>:</b>
	<?php echo CHtml::encode($data->pt_first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_last_name')); ?>:</b>
	<?php echo CHtml::encode($data->pt_last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_ethnicity')); ?>:</b>
	<?php echo CHtml::encode($data->pt_ethnicity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_dob')); ?>:</b>
	<?php echo CHtml::encode($data->pt_dob); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_age')); ?>:</b>
	<?php echo CHtml::encode($data->pt_age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_sex')); ?>:</b>
	<?php echo CHtml::encode($data->pt_sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_part_of_study')); ?>:</b>
	<?php echo CHtml::encode($data->pt_part_of_study); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_study_name')); ?>:</b>
	<?php echo CHtml::encode($data->pt_study_name); ?>
	<br />

	*/ ?>

</div>