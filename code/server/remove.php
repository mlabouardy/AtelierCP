<?php

include '../utility/functions.php';

$data = json_decode(file_get_contents("php://input"));

$id=$data->id;

deleteWorkshop($id);

?>