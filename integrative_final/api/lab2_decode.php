<?php
header('Content-Type: application/json');
$json = '{"name":"Venice Canlas","age":21,"email":"venice@example.com"}';
$obj  = json_decode($json);
$arr  = json_decode($json, true);
echo json_encode([
    'source_json'  => $json,
    'object_name'  => $obj->name,
    'object_email' => $obj->email,
    'array_name'   => $arr['name'],
    'array_email'  => $arr['email'],
]);
