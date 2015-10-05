<?php

include 'Functions.php';

$workshops=getAllWorkshops();

echo json_encode($workshops);

?>