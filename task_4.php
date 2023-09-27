<?php

$studentGrades = [
    'Rahad' => ['math' => 88, 'english' => 98, 'science' => 81],
    'Sayem' => ['math' => 56, 'english' => 40, 'science' => 33],
    'Sanjida' => ['math' => 78, 'english' => 52, 'science' => 67]
];

function getGrades($allStudentGrades)
{
    foreach ($allStudentGrades as $student => $scores) {
        $avgScore = floor(array_sum($scores) / count($scores));
        if (100 >= $avgScore && 80 <= $avgScore):
            echo "$student got A+ with " . $avgScore . "% score. \n";
        elseif (80 > $avgScore && 70 <= $avgScore):
            echo "$student got A- with " . $avgScore . "% score. \n";
        elseif (70 > $avgScore && 60 <= $avgScore):
            echo "$student got A- with " . $avgScore . "% score. \n";
        elseif (60 > $avgScore && 50 <= $avgScore):
            echo "$student got B with " . $avgScore . "% score. \n";
        elseif (50 > $avgScore && 40 <= $avgScore):
            echo "$student got C with " . $avgScore . "% score. \n";
        elseif (40 > $avgScore && 33 <= $avgScore):
            echo "$student got D with " . $avgScore . "% score. \n";
        elseif (100 < $avgScore):
            echo "Invalid Score. Please input numbers smaller than 100. \n";
        else:
            echo "$student got F with " . $avgScore . "% score. \n";
        endif;
    }
}
getGrades($studentGrades);
?>