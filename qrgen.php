

<?php
require __DIR__."/includes/error_display.php";
require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/includes/jwt_manager.php";


for ($i=1; $i < 1001; $i++) {
    
    // echo $jwt;

    

    $data = bin2hex($i."_qr");
    // $jwt = generateToken(['qrid' => $data]);

    echo "<img src='./qrcode.php?id=$data' alt='alt'/>";
}
?>