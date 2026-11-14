<?php
$files = [
    'ex1' => __DIR__ . '/../midterm/ex1/index.html',
    'ex2' => __DIR__ . '/../midterm/ex2/index.php',
];
$key = $_GET['file'] ?? '';
if (!isset($files[$key])) { http_response_code(404); exit('Unknown file.'); }
header('Content-Type: text/plain; charset=utf-8');
readfile($files[$key]);
