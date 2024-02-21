<?php
$tokens = [[]];
function generate($user)
{
    $token = bin2hex(random_bytes(16)); //generates a crypto-secure 32 characters long 
    $tokens = [$user => array($token)];
    if (key($tokens) == $user) {
        $tokens[$user][] = $token;
    }
    // return $token;
}

echo generate("mimi");

function verify_token($user, $token)
{
}

//Mohon maaf Pak/Bu HRD Digicorp, saya kurang mengerti maksud dari soal nomor 1. Maaf saya tidak dapat menyelesaikannya, Pak/Bu.
//Biasanya saya menggunakan JWT token untuk generate token, jadi saya agak bingung gimana caranya menggunakan token menggunakan array. Mohon maaf sekali, Pak/Bu.
//Mohon dibimbing lebih lanjut. Terima kasih dan maaf.