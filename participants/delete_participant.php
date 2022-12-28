<?php
require __DIR__ . "/../vendor/autoload.php";
include __DIR__.'/../includes/error_display.php';
include __DIR__.'/../includes/db.php';
require __DIR__.'/../includes/functions.php';
require __DIR__.'/../includes/participantManager.php';

$id = $_GET['id'];

deleteParticipant(['id' => $id]);

// var_dump($_SERVER);

header("location: " . $_SERVER['HTTP_REFERER']);