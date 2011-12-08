<?php $cs=Yii::app()->clientScript;
//Ernest:Adapted from:http://www.jankoatwarpspeed.com/post/2009/09/28/webform-wizard-jquery.aspx on 8th July 2011,This allows the use of jquery library functions and plugins
$cs->registerScriptFile(Yii::app()->baseUrl . '/js/jquery-1.5.1.min.js', CClientScript::POS_HEAD);
?>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/formWizard.css" type="text/css" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ernestCustomiseForm.css" type="text/css" />
<script language="JavaScript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/formToWizard.js" type="text/javascript"></script>
<script language="JavaScript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ernestFormFunctions.js" type="text/javascript"></script>

<script type="text/javascript">
function uncheckAll(field)
{
for (i = 0; i < field.length; i++)
	field[i].checked = false;
}
</script>




<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dataset-form',
	'enableAjaxValidation'=>false,
)); ?>

<i>Fields with <span class="required">*</span> are required</i>
<?php echo $form->errorSummary($model); ?>
 
 
	<div class="row">
				<?php //Ernest:: To do-> create relationships with patient table::echo $form->labelEx($model,'patient_id'); ?>
				<?php echo $form->hiddenField($model,'patient_id',array('size'=>24,'maxlength'=>10)); ?>
				<?php //echo $form->error($model,'patient_id'); ?>
	</div>

<fieldset>
	  <legend>Patient Demographics </legend>
	  <div class="demographicMarginAlign">
	 
	<table border="1" bordercolor="" style="background-color:" width="400" cellpadding="2" cellspacing="2">
	<tr class="borders">
		<td colspan=><?php echo $form->labelEx($model,'hospital_number'); ?>
					<?php echo $form->textField($model,'hospital_number',array('size'=>24,'maxlength'=>50,)); ?>
					<?php echo $form->error($model,'hospital_number'); ?>
		</td>
		
			
		<td><?php echo $form->labelEx($model,'pt_last_name'); ?>
			<?php echo $form->textField($model,'pt_last_name',array('size'=>24,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'pt_last_name'); ?>
		</td>
		
		<td><?php echo $form->labelEx($model,'pt_first_name'); ?>
			<?php echo $form->textField($model,'pt_first_name',array('size'=>24,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'pt_first_name'); ?>
		</td>
		
	
		
		
		<td>
			<?php echo $form->labelEx($model,'surg_op_date'); ?>
			<?php  date_default_timezone_set('Europe/London')?>			
			<?php $this->widget('ext.my97DatePicker.JMy97DatePicker',array(
									'name'=>CHtml::activeName($model,'surg_op_date'),
									'value'=>$model->surg_op_date =  date('d-m-Y') ,
									/*Ernest: trying to add a default date value= date("d/m/y")*/
									//Ernest: Added this html option to allow addition of onclick event
									'htmlOptions'=>array(
									'readonly'=>'readonly',
											
										),
									'options'=>array(
									'dateFmt'=>'dd-MM-yyyy',
									'showOn'=>'focus', // 'focus', 'button', 'both'
									'buttonText'=>Yii::t('ui','Select form calendar'), 
									'buttonImage'=>Yii::app()->request->baseUrl.'/images/calendar2.png', 
									'buttonImageOnly'=>true,
									'defaultDate'=>$model->surg_op_date,
									),
									'htmlOptions'=>array(
									'style'=>'width:175px;vertical-align:top',
									'class'=>'date',
									
									),
									
									)); ?>
				<?php echo $form->error($model,'surg_op_date'); ?></td>
	</tr>

	<tr class="borders">
		<td><?php echo $form->labelEx($model,'pt_dob'); ?>
			<?php $this->widget('ext.my97DatePicker.JMy97DatePicker',array(
												'name'=>CHtml::activeName($model,'pt_dob'),
												'value'=>$model->pt_dob/*Ernest: trying to add a default date value= date("d/m/y")*/,
												//Ernest: Added this html option to allow addition of onclick event
												'options'=>array(
												'dateFmt'=>'dd-MM-yyyy',
												'showOn'=>'focus', // 'focus', 'button', 'both'
												'buttonText'=>Yii::t('ui','Select form calendar'), 
												'buttonImage'=>Yii::app()->request->baseUrl.'/images/calendar2.png', 
												'buttonImageOnly'=>true,
												'defaultDate'=>$model->pt_dob,
												),
												'htmlOptions'=>array(
												'style'=>'width:175px;vertical-align:top',
												'class'=>'date',
												'onchange'=>'calcAge()',
												),
												
												)); ?>
			<?php echo $form->error($model,'pt_dob'); ?></td>
			
		<td><?php echo $form->labelEx($model,'pt_age'); ?>
			<?php echo $form->textField($model,'pt_age',array('size'=>15,'maxlength'=>10, 'readonly'=>'readonly',))." (yrs)"; ?>
			<?php echo $form->error($model,'pt_age'); ?></td>
			
			
			
			
			
			
							
		<td style="text-align:center; vertical-align:middle;"><?php echo "Gender " //$form->labelEx($model,'pt_sex'); ?>
			<?php echo  ZHtml::enumDropDownList($model,'pt_sex', array('onchange'=>'moveNextFocus("Dataset_ethnicity");')); ?>
			<?php echo $form->error($model,'pt_sex'); ?></td>
			
			
			
			
			
			
			
						
		<td><?php echo $form->labelEx($model,'ethnicity'); ?>
		<?php echo ZHtml::enumDropDownList($model,'ethnicity', array('onchange'=>'accessSelect();')); ?>
		<?php echo $form->error($model,'ethnicity'); ?></td>

	</tr>
	
	<tr class="borders">
		<td>	<?php //echo $form->labelEx($model,'pt_part_of_study'); ?>
				<?php echo "Patient part of a study". CHtml::activeCheckBox($model,'pt_part_of_study',array('onclick'=>"toggleVisibility('Dataset_study_name');")); ?>
				<?php echo $form->error($model,'pt_part_of_study'); ?></td>

		<td colspan=3>
			<?php //echo $form->labelEx($model,'study_name',array('style'=>'visibility:hidden;text-align:right')); ?>
			<?php echo $form->textField($model,'study_name',array('value'=>'enter study name...','size'=>100,'maxlength'=>40,'title'=>'study Name','style'=>'visibility:hidden;text-align:left;background-color:lightyellow;',)); ?>
			<?php echo $form->error($model,'study_name'); ?></td>	
	</tr>
</table>

	</fieldset>

	
	
	
	
	<fieldset >
	
	 <legend>Ophthalmic History </legend>
	<div class="ophthalmicHistoryMarginAlign">
	  <table  width="400" height="179" border="1" cellpadding="3" cellspacing="3" bordercolor="" style="background-color:">
        <div class="borders">
		<tr class="borders">
          <td ><div align="center"><?php echo $form->labelEx($model,'ophth_diagnosis'); ?> 
		  <?php echo ZHtml::enumDropDownList($model,'ophth_diagnosis', array('onchange'=>'moveNextFocus("Dataset_if_secondary_specify");toggleVisibility("Dataset_if_secondary_specify");')); ?> 
		  <?php echo $form->error($model,'ophth_diagnosis'); ?> </div></td>
		  
		  
		  
		  
          <td><div align="center"><?php echo $form->labelEx($model,'if_secondary_specify'); ?> 
		  <?php echo ZHtml::enumDropDownList($model,'if_secondary_specify', array('onchange'=>'moveNextFocus("Dataset_angle_diagnosis");*/')); ?> <?php echo $form->error($model,'if_secondary_specify'); ?> </div></td>
          <td><div align="center"><?php echo $form->labelEx($model,'angle_diagnosis'); ?> <?php echo ZHtml::enumDropDownList($model,'angle_diagnosis', array()); ?> <?php echo $form->error($model,'angle_diagnosis'); ?> </div></td>
		 <td>
		 
		 
		 
		 
		 
			<blockquote>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</blockquote>
		 </td>
		 </tr>
		 </div>
		
        <tr>
          <th colspan=4 style="text-align:center">
            Glaucoma Medications</th>
        </tr>

        <tr class="borders">
          <td style="text-align:left">
			<div align="center">
				  <?php echo "Prostaglandins  "//$form->labelEx($model,'glaucmed_prostaglandins'); ?> </div>
				  <div align="center">  <?php echo $form->checkBox($model,'glaucmed_prostaglandins'); ?>
				  <?php echo $form->error($model,'glaucmed_prostaglandins'); ?></div>
		  </td>
		  
		  
          <td style="text-align:left">
		  <div align="center">
		  <?php echo "Pilocarpine"//$form->labelEx($model,'glaucmed_pilocarpine'); ?> </div>
		  
          <div align="center"><?php echo $form->checkBox($model,'glaucmed_pilocarpine'); ?> <?php echo $form->error($model,'glaucmed_pilocarpine'); ?></div></td>
          <td  style="text-align:left"><div align="center"><?php echo "Topical CAI"//$form->labelEx($model,'glaucmed_topical_cai'); ?> </div>
          <div align="center"><?php echo $form->checkBox($model,'glaucmed_topical_cai'); ?> <?php echo $form->error($model,'glaucmed_topical_cai'); ?></div></td>
		  
          <td style="text-align:left"><div align="center"><?php echo "Systemic CAI"//$form->labelEx($model,'glaucmed_sytemic_cai'); ?> </div>
          <div align="center"><?php echo $form->checkBox($model,'glaucmed_sytemic_cai'); ?> <?php echo $form->error($model,'glaucmed_sytemic_cai'); ?></div></td>
        </tr>
        <tr class="borders">
		  <td style="text-align:left;column-width:200px;"><div align="center">
		  <?php echo "Alpha agonist"//$form->labelEx($model,'glaucmed_alpha_agonists'); ?> </div>
            <div align="center"></div>
          <div align="center"><?php echo $form->checkBox($model,'glaucmed_alpha_agonists'); ?> 
		  <?php echo $form->error($model,'glaucmed_alpha_agonists'); ?></div></td>
          <td><div align="center"><?php echo "None"//$form->labelEx($model,'glaucmed_none'); ?> </div>
          <div align="center"><?php echo $form->checkBox($model,'glaucmed_none',array('onclick'=>'uncheckAll("Dataset");validateGlaucomaMeds();')); ?> <?php echo $form->error($model,'glaucmed_none'); ?></div></td>
          <td><div align="center"><?php echo "Not Available"// $form->labelEx($model,'glaucmed_not_available'); ?> </div>
          <div align="center"><?php echo $form->checkBox($model,'glaucmed_not_available',array('onclick'=>'uncheckAll("Dataset");validateCheckBox();')); ?> <?php echo $form->error($model,'glaucmed_not_available'); ?></div></td>
        
		<td>&nbsp;</td>
		</tr>

  
      </table>
	</div>
	</fieldset>
	
	
	
	
	
	
	
	
	
	<fieldset>
	 <legend>Ophthalmic Exam </legend>
			<div class="ophthalmicExamMarginAlign">
				<table>
					
					<tr>
					<td width="95" >
					<?php echo "BCVA  ". ZHtml::enumDropDownList($model,'asmt_bcva', array('onchange'=>'moveNextFocus("Dataset_asmt_cd_ratio");',)); ?>
						<?php echo  $form->error($model,'asmt_bcva'); ?></td>
						
					<td width="94">
					<?php echo "CD ratio ". ZHtml::enumDropDownList($model,'asmt_cd_ratio', array('onchange'=>'moveNextFocus("Dataset_asmt_cornea");',)); ?>
						<?php echo $form->error($model,'asmt_cd_ratio'); ?></td>
						
					<td colspan=2>
					<?php echo "Cornea ".ZHtml::enumDropDownList($model,'asmt_cornea', array('onchange'=>'moveNextFocus("Dataset_asmt_iop1");',)); ?>
						<?php echo $form->error($model,'asmt_cornea'); ?></td>
					<td width="31">&nbsp;</td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td width="42">&nbsp;</td>
					</tr>
					<tr>
				
					<td colspan=2 class="inputFieldalign">
						<?php echo $form->labelEx($model,'asmt_iop1'); ?>
						<?php echo $form->textField($model,'asmt_iop1',array('size'=>2,'maxlength'=>2,'onchange'=>'calcAverageIOP();valIOP1range();')); ?>
						<?php echo $form->error($model,'asmt_iop1'); ?>
						<?php echo $form->labelEx($model,'asmt_iop2'); ?>
						<?php echo $form->textField($model,'asmt_iop2',array('size'=>2,'maxlength'=>2,'onchange'=>'calcAverageIOP();valIOP2range();')); ?>
						<?php echo $form->error($model,'asmt_iop2'); ?>
					
						<?php echo $form->labelEx($model,'asmt_iop3'); ?>
						<?php echo $form->textField($model,'asmt_iop3',array('size'=>2,'maxlength'=>2, 'onchange'=>'calcAverageIOP();valIOP3range();')); ?>
						<?php echo $form->error($model,'asmt_iop3'); ?>
					</td>
					
				
					<td class="inputFieldalign"><?php echo $form->textField($model,'asmt_avg_iop',array('size'=>3,'maxlength'=>2,'readonly'=>'readonly')); ?>
					<?php echo $form->error($model,'asmt_avg_iop')."(Average IOP)";?></td>
						
					<td width="220" class="inputFieldalign"><?php echo "CCT   ".$form->textField($model,'asmt_cct',array('size'=>6,'maxlength'=>4)); ?>
						<?php echo $form->error($model,'asmt_cct'); ?>					</td>

					</tr>
					
					<tr>
							<td class="inputFieldalign"><?php echo $form->labelEx($model,'asmt_lens'); ?></td>	
							<td class="inputFieldalign">	<?php echo ZHtml::enumDropDownList($model,'asmt_lens', array('onchange'=>'moveNextFocus("Dataset_previous_post_op_motility");',)); ?>
									<?php echo $form->error($model,'asmt_lens'); ?></td>
									
							<td class="inputFieldalign"><?php echo $form->labelEx($model,'previous_post_op_motility'); ?></td>
							<td class="inputFieldalign">	<?php echo ZHtml::enumDropDownList($model,'previous_post_op_motility', array()); ?>
									<?php echo $form->error($model,'previous_post_op_motility'); ?>	</td>
						
					
       </table>

	   <table border="1" bordercolor="" style="background-color:" width="400" cellpadding="3" cellspacing="3">
	   <tr>
			<th colspan=3 >Previous Surgery</th>
		</tr>
			<tr class="borders">
				<td class="tdWidth"><?php echo "Tube"//$form->labelEx($model,'previous_surgery_tube'); ?>
				<?php echo $form->checkBox($model,'previous_surgery_tube'); ?>
				<?php echo $form->error($model,'previous_surgery_tube'); ?></td>
				
				<td class="tdWidth"> <?php echo "VRSx" //$form->labelEx($model,'previous_surgery_VRSx'); ?>
				<?php echo $form->checkBox($model,'previous_surgery_VRSx'); ?>
				<?php echo $form->error($model,'previous_surgery_VRSx'); ?></td>
				
				<td class="tdWidth"><?php echo "Silicon" //$form->labelEx($model,'previous_surgery_silicone_oil'); ?>
				<?php echo $form->checkBox($model,'previous_surgery_silicone_oil'); ?>	
				<?php echo $form->error($model,'previous_surgery_silicone_oil'); ?></td>
				<td class="tdWidth"><?php echo "Silicon&nbsp;Removed?" //$form->labelEx($model,'previous_surgery_silicone_removed'); ?>
				<?php echo $form->checkBox($model,'previous_surgery_silicone_removed'); ?>
				<?php echo $form->error($model,'previous_surgery_silicone_removed'); ?></td>
				<td class="tdWidth"><?php echo "Cyclo&nbsp;Destruction"//$form->labelEx($model,'previous_surgery_cyclo_destruction'); ?>
				<?php echo $form->checkBox($model,'previous_surgery_cyclo_destruction'); ?>
				<?php echo $form->error($model,'previous_surgery_cyclo_destruction'); ?></td>
				<td class="tdWidth"><?php echo "Trab/NPFS/Express"//$form->labelEx($model,'previous_surgery_trab_npfs_express'); ?>
				<?php echo $form->checkBox($model,'previous_surgery_trab_npfs_express'); ?>
				<?php echo $form->error($model,'previous_surgery_trab_npfs_express'); ?></td>
				<td class="tdWidth"><?php echo "Corneal&nbsp;Tx"//$form->labelEx($model,'previous_surgery_corneal_tx'); ?>
				<?php echo $form->checkBox($model,'previous_surgery_corneal_tx'); ?>
				<?php echo $form->error($model,'previous_surgery_corneal_tx'); ?></td>
				
				<td class="tdWidth"><?php echo $form->labelEx($model,'previous_surgery_comment'); ?>
				<?php echo $form->textArea($model,'previous_surgery_comment',array('rows'=>2, 'cols'=>26)); ?>
				<?php echo $form->error($model,'previous_surgery_comment'); ?></td>	
			</tr>
</table>
</div>

	</fieldset>
	
	
	

	
	<fieldset>
	<legend>Surgical Details</legend>
		<div class="surgicalMarginAlign">
	<table border="0" bordercolor="" style="background-color:" width="400" cellpadding="3" cellspacing="3">
	<tr>
		<td style="vertical-align:left"><?php echo $form->labelEx($model,'asmt_eye'); ?>
			<?php echo ZHtml::enumDropDownList($model,'asmt_eye', array('onchange'=>'moveNextFocus("Dataset_anaesthetic_type");',)); ?>
			<?php echo $form->error($model,'asmt_eye'); ?></td>
								

		<td><?php echo $form->labelEx($model,'anaesthetic_type'); ?>
			<?php echo ZHtml::enumDropDownList($model,'anaesthetic_type', array('onchange'=>'moveNextFocus("Dataset_shunt_type");',)); ?>
			<?php echo $form->error($model,'anaesthetic_type'); ?></td>
								
											
		<td><?php echo $form->labelEx($model,'shunt_type'); ?>
			<?php echo ZHtml::enumDropDownList($model,'shunt_type', array('onchange'=>'moveNextFocus("Dataset_anti_metabolites");',)); ?>
			<?php echo $form->error($model,'shunt_type'); ?></td>
								
				
		<td><?php echo $form->labelEx($model,'anti_metabolites'); ?>
			<?php echo ZHtml::enumDropDownList($model,'anti_metabolites', array('onchange'=>'moveNextFocus("Dataset_plate_position");')); ?>
			<?php echo $form->error($model,'anti_metabolites'); ?></td>
								

		<td style="vertical-align:left"><?php echo $form->labelEx($model,'plate_position'); ?>
			<?php echo ZHtml::enumDropDownList($model,'plate_position', array('onchange'=>'moveNextFocus("Dataset_tube_position");')); ?>
			<?php echo $form->error($model,'plate_position'); ?></td>	
										
	</tr>
	<tr>
		
		<td><?php echo $form->labelEx($model,'tube_position'); ?>
		<?php echo ZHtml::enumDropDownList($model,'tube_position', array('onchange'=>'moveNextFocus("Dataset_plate_limbus_distance");')); ?>
		<?php echo $form->error($model,'tube_position'); ?></td>						
								
		<td>
		<?php echo "Plate Limbus distance  ".$form->textField($model,'plate_limbus_distance',array('size'=>2,'maxlength'=>2,)).' (mm)'; ?>
		<?php echo $form->error($model,'plate_limbus_distance'); ?></td>
									
	<td style="vertical-align:top"><?php echo $form->labelEx($model,'tube_occlusion'); ?>
		<?php echo ZHtml::enumDropDownList($model,'tube_occlusion', array('onchange'=>'moveNextFocus("");')); ?>
		<?php echo $form->error($model,'tube_occlusion'); ?></td>													
														
	<td style="vertical-align:middle"><?php //echo $form->labelEx($model,'supramid_in_eye'); ?>
			<?php echo "Supramid In Eye". $form->checkBox($model,'supramid_in_eye',array('onclick'=>'moveNextFocus("Dataset_supramid_distance_from_limbus");')); ?>
			<?php echo $form->error($model,'supramid_in_eye'); ?></td>													
														
	</tr>
	<tr>
															
		<td colspan=2 style="vertical-align:middle" >
				<?php echo "Supramid Distance from limbus (if supramid not in the eye) ".$form->textField($model,'supramid_distance_from_limbus',array('size'=>8,'maxlength'=>5)); ?>
				<?php echo $form->error($model,'supramid_distance_from_limbus'); ?></td>													
		
			
		<td style="vertical-align:middle"><?php echo $form->labelEx($model,'ligated'); ?>
			<?php echo ZHtml::enumDropDownList($model,'ligated', array()); ?>
			<?php echo $form->error($model,'ligated'); ?></td>
								
								
								
			<td><?php //echo $form->labelEx($model,'slit'); ?>
								<?php echo "Slit   ". $form->checkBox($model,'slit',array('value'=>'Yes','unchecked'=>'No')); ?>
								<?php echo $form->error($model,'slit'); ?></td>

	</tr>
	<tr>
		<td>	<?php //echo $form->labelEx($model,'viscoelastic'); ?>
									<?php echo "Viscoelastic  ". $form->checkBox($model,'viscoelastic',array('value'=>'Yes','unchecked'=>'No')); ?>
								<?php echo $form->error($model,'viscoelastic'); ?></td>
		<td><?php //echo $form->labelEx($model,'flow_tested'); ?>
								<?php echo "Flow tested   ". $form->checkBox($model,'flow_tested',array('value'=>'Yes','unchecked'=>'No')); ?>
								<?php echo $form->error($model,'flow_tested'); ?></td>	
								
								
		<td><?php echo $form->labelEx($model,'patch'); ?>
								<?php echo ZHtml::enumDropDownList($model,'patch', array('onchange'=>'moveNextFocus("Dataset_per_operative_drugs");')); ?>
								<?php echo $form->error($model,'patch'); ?></td>
	
	<td><?php echo $form->labelEx($model,'per_operative_drugs'); ?>
								<?php echo ZHtml::enumDropDownList($model,'per_operative_drugs', array('onchange'=>'moveNextFocus("");')); ?>
								<?php echo $form->error($model,'per_operative_drugs'); ?></td>
																
	</tr>
	<tr></tr>
	<tr>
		<td colspan=2><?php echo $form->labelEx($model,'surgical_comments'); ?>
								<?php echo $form->textArea($model,'surgical_comments',array('rows'=>3, 'cols'=>25)); ?>
								<?php echo $form->error($model,'surgical_comments'); ?></td>

		<td colspan=2 style="vertical-align:top"><?php echo $form->labelEx($model,'surgeon_name'); ?>
								<?php echo $form->textField($model,'surgeon_name',array('value'=>Yii::app()->user->id,'size'=>25,'maxlength'=>25)); ?>
								<?php echo $form->error($model,'surgeon_name'); ?></td>
	</tr>
	
</table>
</div>
		<div class="row buttons" align="left">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Finish and Save Dataset' : 'Save'); ?>
		</div>

	</fieldset>

<?php $this->endWidget(); ?>
</div><!-- form -->

