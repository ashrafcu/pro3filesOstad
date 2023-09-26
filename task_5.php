<?php
function generatePassword($length){
$chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+";
$charsLength=strlen($chars);
$password= "";
for ($i=0; $i<$length; $i++) {
    $password .= $chars[rand(0,$charsLength)];
}
return $password;
}
echo generatePassword(12);
?>