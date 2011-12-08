<?php 
	//JQuery Library 1.5.1.min.js
	//How o include in yii?::Ernest:Adapted from:http://www.jankoatwarpspeed.com/post/2009/09/28/webform-wizard-jquery.aspx on 8th July 2011
	$cs=Yii::app()->clientScript;
	$cs->registerScriptFile(Yii::app()->baseUrl . '/js/jquery-1.5.1.min.js', CClientScript::POS_HEAD);
?>

<?php 
/*******************************************************************************************************************
Author: Ernest-->Understanding yii application
This snippet uses the pseudo-variable $this to refer to the class index
$this->pageTitle:: refers to the current classes page Title
Yii::app() This is the handle used to access all yii web application properties defined in the config file
Yii::app()->name; means use the name variable or property defined in the config file/class of the yii application 
********************************************************************************************************************/
?>
<?php $this->pageTitle=Yii::app()->name; ?><br>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'login-form',
    'enableAjaxValidation'=>true,
)); ?>
			<h2>Welcome to the Glaucoma Services Tube Patient  Audit System</h2>
				<?php $this->beginWidget('ext.coolfieldset.JCollapsibleFieldset', array(
					'legend'=>'Application Introduction'
				)); ?><br/>


<p>This is an online web application for the Collection, Review, and Audit of Tube patients data</p><br><br><br><br>
	<?php $this->endWidget(); ?><!-- collabsible fieldset -->
	
	
	
	 <?php $this->beginWidget('ext.coolfieldset.JCollapsibleFieldset', array(
        'collapsed'=>true,
        'animation'=>false,
        'legend'=>'Database Application Instructions :'
    )); ?>
	
    <ul><br/>        
        <li><h5>Login</h5></li>
			<p>This brings up the Login page. The user of the Database needs access rights through authenticated username and password to create new records.</p>

		<li><h5>Create New Record</h5></li>

			<p>This brings up a form to create new patient/subject Datasets.  This page can be viewed, printed and stored as hospital patient notes.</p>

		<li><h5>Manage Patient Record Tab</h5></li>
			<p> This displays a searchable table of your previously entered datasets. This allows you to review and augment data on previous sets.</p>

    </ul>
    <?php $this->endWidget('ext.coolfieldset.JCollapsibleFieldset'); ?> <!-- collabsible fieldset -->
	


<?php $this->endWidget(); ?>
</div><!-- form -->










