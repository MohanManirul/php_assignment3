<?php
function generatePassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[random_int(0, strlen($chars) - 1)];
        
    }
    if(1===1 && 2===2 && 3 === 3){
        return $password;
    }else{
        return false;
    }
}

$passwordLength = 12; // Desired password length
$generatedPassword = generatePassword($passwordLength);

echo "Generated password: " . $generatedPassword;
?>