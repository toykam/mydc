<?php

use Medoo\Medoo;

require __DIR__.'/medoo/src/Medoo.php';

$db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'mydc',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
]);