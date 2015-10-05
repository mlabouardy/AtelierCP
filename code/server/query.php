<?php

include '../utility/functions.php';

$workshops=getAllWorkshops();

echo json_encode($workshops);

?>