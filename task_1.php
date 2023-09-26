<?php
function turnLowerCase(string $txt){
    $lowText= strtolower($txt);
    return $lowText;
}
$text="The quick brown fox jumps over the lazy dog.";
$newText = turnLowerCase($text);

function replaceTexts(string $searchThing, string $replaceThing, $nText) {
    global $newText;
    $replacedString= str_replace($searchThing, $replaceThing, $nText);
    echo $replacedString;
}

replaceTexts("brown", "red", $newText);





?>