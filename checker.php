<?php
$data = [  //pole s hodnotami
    "count" => rand(0, 10),
    "bar" => rand(0, 10),
    "foo" => rand(0, 10)
];
header('Content-Type: application/json');
echo json_encode($data);