<?php
//array_sum and array_product
$myarray=array(1,2,3,4,5);
echo "<br>".array_sum($myarray);
echo "<br>". array_product($myarray);
shuffle($myarray);
foreach ($myarray as $key => $value) {
    echo "<br /> $value";
}
?>

<?php

$a=array("c","php","c","anroid","php","java");
//array_Count_value()
$b=array_count_values($a);
foreach ($a as $key => $value) {
    echo "<br> $key - <b> $value</b>";
}
//array_reverse
$rev= array_reverse($a);
echo "<pre>";
print_r($rev);
echo "<pre>";
//in_array
$temp = in_array('php', $a);
echo "<br>".$temp;
//array_rand
$index = array_rand($a);
echo "<br>".$a[$index];
//array_unique
echo "<pre>";
print_r(array_unique($a));
echo "<pre>";
//array_search
$check = array_search('android', $a);
echo $check;
?>

<?php
//array sort,rsort,asort functions
$my=array(9,4,8,7,5);
sort($my);
echo "<pre>";
print_r($my);
echo "<pre>";
rsort($my);
echo "<pre>";
print_r($my);
echo "<pre>";
asort($my);
echo "<pre>";
print_r($my);
echo "<pre>";

echo end($my);

?>
<?php
$a=array("c","php","c","anroid","php","java");
$b=array(1,2,3,4,5);
//array_merge
$new = array_merge($a,$b);
echo "<pre>";
print_r($new);
echo "<pre>";
?>
<?php 
$year = range(1900,2020);
echo "<select>";
foreach ($year as $value) {
    echo "<option> $value</option>";
}
echo "</slect>";
?>
<?php
//array_key_exists
$arr = array("a" => "apple", "b" => "banana");
echo array_key_exists ('a',$arr);
?>
<?php
//array_change_key_case
$arr = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green");
$uppercase = array_change_key_case ($arr,CASE_UPPER);
print_r($uppercase);
 $indexofarray= array_rand($a,2);
foreach ($a as $key => $value) {
    echo "<br>$key -<strong>".$a[$value]."</strong>";
}
?>
<?php
//array_combine
$arr1 = array("Banana" , "Apple" , "Mango");
$arr2 = array("Yellow","Red ","green");
$NewVar = array_combine ($arr1, $arr2);
print_r($NewVar);
?>
<?php
//compact function 
$name = " akash";
$subject = " php";
$arr = compact("name","subject");
print_r($arr)
?>
<?php
//array_flip function
$arr = array("a" => "akash ", "b" => "banana", "c" => "computer");
$fliparray = array_flip($arr);
print_r($fliparray);
?>
<?php
//array_diff function
$a=array("akash c","c ++"," php ","android");
$b=array("akash ","c"," php");
$diff =array_diff ($a, $b);
print_r($diff);
?>
<?php
//array_intersect
$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect($arr1,$arr2));
?>
<?php
//array_values function
$arr =array ("i"=> "c","want" =>"c++", "learn"=>"php");
$myarr = array_values($arr);
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}
?>
<?php
//array_push function
$a=array("c","c++");
array_push($a,"java"." php");
print_r($a);
?>
<?php
//array_pop function
$a = array("c", "c++", "Java", "PHP", "asp");
array_pop($a ); 
print_r($a);
array_pop($a );
print_r($a);
?>
<?php
//implode function
$arr =array("i","love","php","language");
$mystring = implode (" ", $arr);
echo $mystring;
?>