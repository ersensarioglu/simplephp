<?php

$name="Description";
$value[1][1]="ha ha hay";
$value[2][1]="wa wa way";
$value[2][2]="ta ta tay";
$array[$name]=$value;

//print_r($value);
echo json_encode($array);