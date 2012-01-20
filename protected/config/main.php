<?php

return CMap::mergeArray(
	array(
		'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
		'name'=>'Glaucoma Services Tube Database',
		'preload'=>array('log'),
		'import'=>array(
			'application.extensions.*',
			'application.models.*',
			'application.components.*',
		),
		'modules'=>array(
			/*
			 'gii'=>array(
				'class'=>'system.gii.GiiModule',
				'password'=>'gii',
			 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
				'ipFilters'=>array('127.0.0.1','::1'),
			),
			*/
		),
		'components'=>array(
			'user'=>array(
				// enable cookie-based authentication
				'allowAutoLogin'=>true,
			),
			'urlManager'=>array(
				'urlFormat'=>'path',
				'rules'=>array(
					'<controller:\w+>/<id:\d+>'=>'<controller>/view',
					'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
					'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				),
			),
			'db'=>array(
				'connectionString' => 'mysql:host=localhost;dbname=tubes',
				'emulatePrepare' => true,
				'username' => 'root',
				'password' => '',
				'charset' => 'utf8',
			),
			'errorHandler'=>array(
				// use 'site/error' action to display errors
	            'errorAction'=>'site/error',
	        ),
			'log'=>array(
				'class'=>'CLogRouter',
				'routes'=>array(
					'application' => array(
						'class'=>'CFileLogRoute',
						'levels'=>'error, warning',
					),
					// uncomment the following to show log messages on web pages
					/*
					'browser' => array(
						'class'=>'CWebLogRoute',
					),
					*/
				),
			),
		),
		'params'=>array(
			// this is used in contact page
			'adminEmail'=>'admin@example.com',
			
			//Ernest::additional emails
			'consultantEmail'=>'consultant@example.com'
			
		),
	),
	require(dirname(__FILE__).'/local.php')
);
