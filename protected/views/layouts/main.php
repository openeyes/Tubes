<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<!-- Ernest:Adapted from:http://www.jankoatwarpspeed.com/post/2009/09/28/webform-wizard-jquery.aspx on 8th July 2011 -->
	
	<style>
	#banner
	{
	margin-top:0;
	margin-bottom:0;
	 border-bottom: none;
	}
	#header{
	margin-top:0;
	margin-bottom:0;}
	</style>
</head>

<body>

<div class="container" id="page">
	<div class="twocolumndiv" id="banner">
		<div class="leftcolumn"><?php echo CHtml::image(Yii::app()->request->baseUrl."/images/logo.jpg", "MEH Logo"); ?>	</div>
		<div class="rightcolumn" align="right"><?php echo CHtml::image(Yii::app()->request->baseUrl."/images/header.gif", "MEH Logo"); ?></div>
	</div>
	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div>
<!-- header -->
	
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Create New Record', 'url'=>array('/dataset/create'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Manage Patient Record', 'url'=>array('/dataset/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
		
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,)); ?>
		<!-- breadcrumbs --><?php endif?>
		
	<?php echo $content; ?>

<div id="footer">
		Copyright &copy; <?php echo "201".date_default_timezone_set('Europe/London'); ?> Designed by Ernest E-M F(MEH) The OpenEyes Foundation.<br/>
		All Rights Reserved.<br/>
		<?php echo '<font color="blue">Moorfields Eye Hospital OpenEyes Project</font>'; ?>
</div><!-- footer -->
</div><!-- page -->
</body>
</html>