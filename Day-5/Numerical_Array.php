<?php

//Numerical array
//Method 1

$a[0] = 10;
$a[1] = 20;
$a[2] = 20.50;
$a[3] = "c";
$a[4] = "4";

//Method 2 // Dynamic Array

$a[] = 10;
$a[] = 20;
$a[] = 20.50;
$a[] = "c";
$a[] = "4";

//Method 3

$a=array(10,20,30,"c",10.50);
echo $a[3];

for ($i=0;$i<count($a);$i++){
     echo "<br/>".$a[$i];
}

//3 Imp Functions
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";
