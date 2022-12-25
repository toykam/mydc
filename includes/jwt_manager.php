<?php

use MiladRahimi\Jwt\Generator;
use MiladRahimi\Jwt\Parser;
use MiladRahimi\Jwt\Cryptography\Algorithms\Hmac\HS256;



function generateToken($data) {
    // Use HS256 to generate and parse token
    $signer = new HS256('12345678901234567890123456789012');
    // Generate a token
    $generator = new Generator($signer);
    $jwt = $generator->generate($data);

    return $jwt;
}

function verifyToken($jwt) {
    $signer = new HS256('12345678901234567890123456789012');
    // Parse the token
    $parser = new Parser($signer);
    $claims = $parser->parse($jwt);

    return $claims;
}