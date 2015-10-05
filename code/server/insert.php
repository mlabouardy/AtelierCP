<?php

include '../controler/Functions.php';

$name=$_POST['name'];
$subject=$_POST['subject'];
$location=$_POST['location'];
$hours=$_POST['hours'];
$laboratory=$_POST['laboratory'];
$animator=$_POST['animator'];
$description="No description available";


createWorkshop($name, $subject, $location, $hours, $laboratory, $animator, $description);

?>