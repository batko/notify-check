<?php
$data = [  //pole s hodnotami
    "count" => rand(0, 10),
    "bar" => $_POST["foo"],
    "foo" => $_POST["bar"]
];
header('Content-Type: application/json');
echo json_encode($data);