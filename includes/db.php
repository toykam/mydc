<?php

require(__DIR__ . "/../vendor/autoload.php");

use Medoo\Medoo;

$db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'mydc',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
]);