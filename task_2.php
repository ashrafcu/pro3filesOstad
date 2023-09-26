<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function findEvenNos($nums)
{
    if ($nums % 2 == 0) {
        return false;
    } else {
        return true;
    }
}

function findOddNos($allNumbers)
{
    $onlyOddNums = array_filter($allNumbers, "findEvenNos");
    print_r($onlyOddNums);
}
findOddNos($numbers);


?>