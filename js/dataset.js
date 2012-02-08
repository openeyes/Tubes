/**
 * Dataset form enhancements 
 */
$(function() {
	
	studyNameToggle();
	$('#DatasetFormStep1_pt_part_of_study').change(function() {
		studyNameToggle();
	});
	$('.medications-checkbox').change(function() {
		checkClearMedications(this);
	});
	secondaryToggle();
	$('#DatasetFormStep2_ophth_diagnosis').change(function() {
		secondaryToggle();
	});
	supramidToggle();
	$('#DatasetFormStep4_supramid_in_eye').change(function() {
		supramidToggle();
	});
	
});

// Only show Study Name field if Part of Study is checked
function studyNameToggle() {
	if($('#DatasetFormStep1_pt_part_of_study').attr('checked')) {
		$('#DatasetFormStep1_study_name').parent().show();			
	} else {
		$('#DatasetFormStep1_study_name').parent().hide();
	}	
}


// Check (and clear if necessary) Glaucoma Medications checkboxes
function checkClearMedications(checkbox) {
	$checkboxes = $('.medications-checkbox:not(.medications-checkbox-ctl)');
	checkbox_id = $(checkbox).attr('id');		
	if(checkbox_id == 'DatasetFormStep2_glaucmed_none' && $(checkbox).is(':checked')) {
		$.each($checkboxes, function() {
			$(this).attr('checked',false);
		});
		$('#DatasetFormStep2_glaucmed_not_available').attr('checked',false);
	} else if(checkbox_id == 'DatasetFormStep2_glaucmed_not_available' && $(checkbox).is(':checked')) {
		$.each($checkboxes, function() {
			$(this).attr('checked',false);
		});
		$('#DatasetFormStep2_glaucmed_none').attr('checked',false);
	} else if($(checkbox).is(':checked')){
		$('#DatasetFormStep2_glaucmed_none').attr('checked',false);
		$('#DatasetFormStep2_glaucmed_not_available').attr('checked',false);					
	}
}

// Show/hide secondary dropdown depending on diagnosis
function secondaryToggle() {
	if($('#DatasetFormStep2_ophth_diagnosis option:selected').val() == 'Secondary') {
		$('#DatasetFormStep2_if_secondary_specify').parent().show();		
	} else {
		$('#DatasetFormStep2_if_secondary_specify option:selected').removeAttr("selected");
		$('#DatasetFormStep2_if_secondary_specify').parent().hide();
	}
}


// Only show silicon removed? field if silicon is checked Ernest
function siliconRemovedToggle() {
	if($('#DatasetFormStep3_previous_surgery_silicone_oil').attr('checked')) {
		$('#DatasetFormStep3_previous_surgery_silicone_removed').parent().show();			
	} else {
		$('#DatasetFormStep3_previous_surgery_silicone_removed').parent().hide();
	}	
}


// Show/hide supramid distance depending on in eye
function supramidToggle() {
	if($('#DatasetFormStep4_supramid_in_eye').attr('checked')) {
		$('#DatasetFormStep4_supramid_distance_from_limbus').val('');
		$('#DatasetFormStep4_supramid_distance_from_limbus').parent().hide();
	} else {
		$('#DatasetFormStep4_supramid_distance_from_limbus').parent().show();		
	}
}
