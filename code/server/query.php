<?php

include '../controller/functions.php';

$workshops=getAllWorkshops();

echo json_encode($workshops);

?>