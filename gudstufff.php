<?php

$dir = 'gudstufff';
$array = scandir($dir);

unset($array[0]);
unset($array[1]);

$item = array_rand($array);

header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, x-requested-with');
header('Access-Control-Allow-Credentials: true');

$response = [
    'status' => true,
    'item'   => '/gudstufff/'.$array[$item]
];

echo json_encode($response);
?>