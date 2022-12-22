<?php
require __DIR__."/includes/error_display.php";

require __DIR__ . "/vendor/autoload.php";

require __DIR__ . "/lib/phpqrcode/qrlib.php";

$id = $_GET['id'];



QRcode::png("$id", false, "L", 5, 4);

