<?php
$gradingConditions = array(
    'A+' => 80,
    'A' => 70,
    'A-' => 60,
    'B' => 50,
    'C' => 40,
    'D' => 33,
    'F' => 0
);
function findGrade($totalAvgScore, $gradingConditions) {
    foreach ($gradingConditions as $grade => $minimumScore) {
        if ($totalAvgScore >= $minimumScore) {
            return $grade;
        }
    }
    return 'Invalid Result';
}
$studentGrades = array(
    array(
        'name' => 'Rahad',
        'math' => 88,
        'english' => 98,
        'science' => 81 
    ),
    array(
        'name' => 'Sayem',
        'math' => 23,
        'english' => 12,
        'science' => 11 
    ),
    array(
        'name' => 'Sanjida',
        'math' => 78,
        'english' => 52,
        'science' => 67 
    )
);

foreach ($studentGrades as $student) {
    $name = $student['name'];
    $mathMarks = $student['math'];
    $englishMarks= $student['english'];
    $scienceMarks= $student ['science'];
    
    $totalAvgScore = ($mathMarks+$englishMarks+$scienceMarks)/(count($studentGrades[0])-1);
    $grade = findGrade($totalAvgScore, $gradingConditions);
    echo "{$name} achieved {$grade} in average with {$mathMarks} in Math, {$englishMarks} in English and {$scienceMarks} in Science."."\n";
}
?>