<?php

include '../controller/functions.php';

$data = json_decode(file_get_contents("php://input"));

$id=$data->id;

$workshop=getWorkshop($id);

echo json_encode($workshop);

?>