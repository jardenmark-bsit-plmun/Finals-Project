
<?php
header('Content-Type: application/json');
$student = ['name' => 'Venice Canlas', 'age' => 21, 'course' => 'IT'];
echo json_encode($student);
