<?php

Kirby\Cms\App::plugin('adam/plainkit-test', [
	'blueprints' => [
		'fields/demoField' => __DIR__ . '/demoField.yml',
		'pages/home' => __DIR__ . '/homePage.yml'
	]
]);