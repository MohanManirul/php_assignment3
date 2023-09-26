<?php
$studentGrades = [
    ['Math' => 85, 'English' => 92, 'Science' => 78],
    ['Math' => 88, 'English' => 95, 'Science' => 90],
    ['Math' => 80, 'English' => 87, 'Science' => 82]
];

function calculateAverageGrades($studentGrades) {
    $averages = [];

    foreach ($studentGrades as $student) {
        $total = 0;
        $count = 0;

        foreach ($student as $subject => $grade) {
            $total += $grade;
            $count++;
        }

        $average = ($count > 0) ? ($total / $count) : 0;
        $averages[] = $average;
    }

    return $averages;
}

$averageGrades = calculateAverageGrades($studentGrades);

for ($i = 0; $i < count($averageGrades); $i++) {
    echo "Average grade for student " . ($i + 1) . ": " . $averageGrades[$i] . "\n";
}
?>