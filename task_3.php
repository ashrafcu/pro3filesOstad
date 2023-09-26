<?php 
$grades=[85, 92, 78, 88, 95];
function doSortDes($grade){
    rsort($grade);
    print_r($grade);
}

doSortDes($grades);
?>