<?php
// Associative Array 
//key = value 
//method 1

$a[0] = 10;
$a['c'] = "computer";
$a['php'] = "Web Development";
$a[10] = 50.50;

//method 2 

$a = array(
    0 => 10,
    "c" => "Computer",
    10 => "ten", 
    50 => 50.50,
);
echo "c for " .$a['c'];


foreach ($a as $value) {
echo "<br/>Value is $value";    
}
foreach ($a as $key => $value) {
    echo "<br/>Key is <b>$key</b> and Value is <b>$value</b>";
}

