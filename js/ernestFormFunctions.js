/*
**Author:Ernest Elikem Moorfiels Eye Hospital, All rights reserved for OpenEyes Foundation Project
*This functions access form inputs
*Language JavaScript
*/
//This initialises the form Navigation wizard. JQuery command
		$(document).ready(function(){
					$("#dataset-form").formToWizard({ submitButton: 'Create' })
				});
				
				
				
//This function is still under construction for validating the form inputs select boxes
function accessSelect(){
var accessed= document.getElementById('Dataset_ethnicity').value;

if(accessed=='Not Selected'){
alert(accessed);
}

}

//This function autocalculates the average iops
function calcAverageIOP()
{
	var iop1 = document.getElementById('Dataset_asmt_iop1').value;
	var iop2 = document.getElementById('Dataset_asmt_iop2').value;
	var iop3 = document.getElementById('Dataset_asmt_iop3').value;
	var avg_iop = document.getElementById('Dataset_asmt_avg_iop').value;
	
	if(iop1)
	{
	avg_iop = document.getElementById('Dataset_asmt_avg_iop').value=iop1;
	}
	
	if(iop1 && iop2)
	{
	var x;
	x=(Math.abs(iop1) + Math.abs(iop2));
	avg_iop = document.getElementById('Dataset_asmt_avg_iop').value =(x/2);
	}

	if(iop1 && iop2 && iop3)
	{
	var y;
	y=(Math.abs(iop1)+Math.abs(iop2)+Math.abs(iop3));
	avg_iop = document.getElementById('Dataset_asmt_avg_iop').value =(y/3);
	}
}

//This function displays the default surgery date
function defaultSurgeryDate()
{
		var currentTime = new Date()
		var month = currentTime.getMonth() + 1
		var day = currentTime.getDate()
		var year = currentTime.getFullYear()

		var surgeryDate = document.getElementById('Dataset_surg_op_date').value=day +"-"+month+"-"+ year; 

}

//This function autocalculates the age using dob inputs
//Guidance Source:http://www.codingforums.com/archive/index.php/t-220219.html
function calcAge()
{
//Author->Ernest   Function to calculate Age:
var today_date = new Date();
var today_year = today_date.getFullYear();//get Current Year
var dob_value = document.getElementById('Dataset_pt_dob').value;//get dob
var dob_object = new Date(dob_value);//dob object
	dob_year = dob_object.getFullYear();//get dob year
var calcAge =today_year -dob_year + Math.abs(1);
	if(calcAge)
	{
	pt_age=document.getElementById('Dataset_pt_age').value = calcAge;
	}
}

//This function toggles the visibility on check: Patient part of a study? field
function toggleVisibility(id)
	{
		document.getElementById(id).style.visibility='visible';
	}


//This function moves the focus
function moveNextFocus(id)
{
		var nextFocus = document.getElementById(id).focus();
}

//Added this function as an update to previously uploaded tube data files: date:30th November, 2011 Author:Ernest
//This function checks the IOP range>0mmHg
function valIOP1range(){
var iop1 = document.getElementById('Dataset_asmt_iop1').value;
		if(iop1==0){alert('Please select range greater than 0mmHg or leave blank');}
}
		
function valIOP2range(){
	var iop2 = document.getElementById('Dataset_asmt_iop2').value;
		if(iop2==0){alert('Please select range greater than 0mmHg or leave blank');}
}
function valIOP3range(){
		var iop3 = document.getElementById('Dataset_asmt_iop3').value;
		if(iop3==0){alert('Please select range greater than 0mmHg or leave blank');}
}

// Validate checkboxes

function validateGlaucomaMeds(){
	var none = document.getElementById('Dataset_glaucmed_none').value;
	var pg = document.getElementById('Dataset_glaucmed_prostaglandins').value;
	var iop3 = document.getElementById('Dataset_asmt_iop3').value;
	var avg_iop = document.getElementById('Dataset_asmt_avg_iop').value;

	if(none && pg){
		alert('alert')
	
	}

}

// Show/hide secondary dropdown depending on diagnosis
function secondaryToggle() {
	if($('#Dataset_ophth_diagnosis option:selected').val() == 'Secondary') {
		$('#Dataset_if_secondary_specify').parent().show();		
		moveNextFocus("Dataset_if_secondary_specify");
	} else {
		$('#Dataset_if_secondary_specify option:selected').removeAttr("selected");
		$('#Dataset_if_secondary_specify').parent().hide();
	}
}

// Check (and clear if necessary) Glaucoma Medications checkboxes
function checkClearMedications(checkbox) {
	checkboxes = [
	              'Dataset_glaucmed_prostaglandins',
	              'Dataset_glaucmed_pilocarpine',
	              'Dataset_glaucmed_topical_cai',
	              'Dataset_glaucmed_sytemic_cai',
	              'Dataset_glaucmed_alpha_agonists',
	              ];
	if(checkbox == 'glaucmed_none' && $('#Dataset_glaucmed_none').is(':checked')) {
		$.each(checkboxes, function() {
			$('#' + this).attr('checked',false);
		});
		$('#Dataset_glaucmed_not_available').attr('checked',false);
	} else if(checkbox == 'glaucmed_not_available' && $('#Dataset_glaucmed_not_available').is(':checked')) {
		$.each(checkboxes, function() {
			$('#' + this).attr('checked',false);
		});
		$('#Dataset_glaucmed_none').attr('checked',false);
	} else {
		$('#Dataset_glaucmed_none').attr('checked',false);
		$('#Dataset_glaucmed_not_available').attr('checked',false);
	}
}









