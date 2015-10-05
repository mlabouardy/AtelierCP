<?php

include '../controler/Functions.php';

$data = json_decode(file_get_contents("php://input"));

$id=6;

$workshop=getWorkshop($id);

echo json_encode($workshop);

?>