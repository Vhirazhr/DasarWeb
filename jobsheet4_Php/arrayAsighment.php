<?php
$students = [
    ['name' => 'Alice', 'grade' => 85],
    ['name' => 'Bob', 'grade' => 92],
    ['name' => 'Charlie', 'grade' => 78],
    ['name' => 'David', 'grade' => 64],
    ['name' => 'Eva', 'grade' => 90]
];

$totalGrades = 0;
$numberOfStudents = count($students);

foreach ($students as $student) {
    $totalGrades += $student['grade'];
}

$averageGrade = $totalGrades / $numberOfStudents;

echo "Class average grade: " . $averageGrade . "\n";
echo "<br>";
echo "Students with grades above the class average:\n";
echo "<br>";
foreach ($students as $student) {
    if ($student['grade'] > $averageGrade) {
        echo $student['name'] . " with grade " . $student['grade'] . "\n";
    }
}
?>
