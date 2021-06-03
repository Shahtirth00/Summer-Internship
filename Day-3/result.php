<?php

$a=$_POST['name'];
$c=$_POST['dob'];
$d=$_POST['mobile'];
$e=$_POST['num1'];
$f=$_POST['num2'];
$g=$_POST['num3'];
$h=$_POST['num4'];
$i=$_POST['num5'];

echo "Name of student is $a<br>";
echo "Date of Birth is $c<br>";
echo "Mobile No. is $d<br>";
echo "Marks in Math  is $e<br>";
echo "Marks in Biology is $f<br>";
echo "Marks in Chemistry is $g<br>";
echo "Marks in Physics is $h<br>";
echo "Marks in English is $i<br>";
$total=$e+$f+$g+$h+$i;
echo "Total marks obtained is $total/500<br>";
$p=($total/500)*100;
          echo"percentage:$p<br>";

if($p>80)
{
    echo "First Class";
}
elseif($p>65)
{
    echo "second class";
}
elseif($p>50)
{
    echo "Pass";

}
else
{
    echo "fail";
}
?>

