<?php 

use Medoo\Medoo;

$db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'mydc',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',
]);

// $db = new Medoo([
//     'database_type' => 'mysql',
//     'database_name' => 'mydc_mydc',
//     'server' => 'localhost',
//     'username' => 'mydc_mydc',
//     'password' => '(s8pnhLCIuja',
// ]);

?>