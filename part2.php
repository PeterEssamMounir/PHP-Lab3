<?php
$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
];

foreach ($students as $student) {
    if ($student['status'] == 'CMS') {
        echo '<p style="color:red;">';
    } else {
        echo '<p>';
    }
    echo $student['name'] . ' - ' . $student['email'] . ' - ' . $student['status'];
    echo '</p>';
}
?>
