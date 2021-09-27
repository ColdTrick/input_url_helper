<?php

return [
	'plugin' => [
		'version' => '4.0',
	],
	'view_extensions' => [
		'input/url' => [
			'input_url_helper/extend' => [
				'priority' => 400,
			],
		],
	],
];
