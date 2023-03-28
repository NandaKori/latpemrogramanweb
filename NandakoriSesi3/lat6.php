<?php
$mhs = array (
    array("Aldy","21101144","Denpasar"),
    array("Jagad","21101135","Denpasar"),
    array("Nanda","21101150","Denpasar"),
    array("Gusde","21101159","Denpasar"),
);
header('Content-type: application/json; charset=utf-8');
echo json_encode($mhs);
