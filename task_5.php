<?php
function generatePassword($length){
$onlySmalls="abcdefghijklmnopqrstuvwxyz";
$onlyCapitals="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$onlyNumbers="1234567890";
$specialChars="!@#$%^&*()_+";
$smallCharsLength=strlen($onlySmalls)-1;
$capitalCharsLength=strlen($onlyCapitals)-1;
$noCharsLength=strlen($onlyNumbers)-1;
$specialCharsLength=strlen($specialChars)-1;
$password= "";
for ($i=0; $i<($length/4); $i++) {
    $password .= $onlySmalls[rand(0, $smallCharsLength)].$onlyNumbers[rand(0, $noCharsLength)].$onlyCapitals[rand(0,$capitalCharsLength)].$specialChars[rand(0,$specialCharsLength)];

}
echo $password;
}
generatePassword(12);
?>