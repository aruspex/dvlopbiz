<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'default' => array(
		'type'       => 'MySQLi',
		'connection' => array(
			'hostname'   => 'localhost',
			'database'	 => 'dvlopbiz',
			'username'   => 'root',
			'password'   => '111',
			'persistent' => FALSE,
		),

		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	),
);
