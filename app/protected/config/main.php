<?php
return [
	'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'name' => 'Finance app',

	// preloading 'log' component
	'preload' => ['log'],

	// autoloading model and component classes
	'import' => [
		'application.models.*',
		'application.components.*',
	],

	'modules' => [
		'gii' => [
			'class' => 'system.gii.GiiModule',
			'password' => 'adminadmin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters' => ['172.*'],
		],
	],

	// application components
	'components' => [
		'request' => [
			'enableCookieValidation' => false,
		],

		'response' => [
			'format' => 'json',
		],
		'user' => [
			// enable cookie-based authentication
			'allowAutoLogin' => true,
		],

		// uncomment the following to enable URLs in path-format
		/*
						'urlManager'=>[
							'urlFormat'=>'path',
							'rules'=>[
								'<controller:\w+>/<id:\d+>'=>'<controller>/view',
								'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
								'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
							),
						),
						*/

		// database settings are configured in database.php
		'db' => require dirname(__FILE__) . '/database.php',

		'errorHandler' => [
			// use 'site/error' action to display errors
			'errorAction' => 'site/error',
		],

		'log' => [
			'class' => 'CLogRouter',
			'routes' => [
				[
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
				],
			],
		],

	],

	'behaviors' => [
		'corsFilter' => [
			'class' => 'application.components.CorsBehavior'
		]
	],

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params' => [
		// this is used in contact page
		'adminEmail' => 'webmaster@example.com',
	],
];
