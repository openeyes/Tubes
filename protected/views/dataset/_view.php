<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('ethnicity')); ?>:</b>
	<?php echo CHtml::encode($data->ethnicity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_dob')); ?>:</b>
	<?php echo CHtml::encode($data->pt_dob); ?>
	<br />

</div>