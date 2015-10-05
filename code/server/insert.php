<?php

include '../utility/functions.php';

$data = json_decode(file_get_contents("php://input"));

$name=$data->name;
$subject=$data->subject;
$location=$data->location;
$hours=$data->hours;
$laboratory=$data->laboratory;
$animator=$data->animator;
$description="No description available";


createWorkshop($name, $subject, $location, $hours, $laboratory, $animator, $description);

?>