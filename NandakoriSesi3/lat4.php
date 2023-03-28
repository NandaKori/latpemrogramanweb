<?php
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";


header('Content-type: application/json; charset=utf-8');
echo json_encode($cars);