<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return CMap::mergeArray(
        array(
		'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
		'name'=>'My Console Application',
		// application components
		'components'=>array(
			'db'=>array(
				'connectionString' => 'mysql:host=localhost;dbname=tubes',
				'emulatePrepare' => true,
				'username' => 'root',
				'password' => '',
				'charset' => 'utf8',
			),
		),
        ),
        require(dirname(__FILE__).'/local.php')
);

