<?php
// operators in php
/*
1. arithmatic operators
2. assignment operators
3. comparison operators
4. logical operators
*/

$a =45;
$b = 8;

//1. arithmatic operators

echo "for a+b resultis ".($a + $b)."<br>";
echo "for a-b resultis ".($a - $b)."<br>";
echo "for a*b resultis ".($a * $b)."<br>";
echo "for a/b resultis ".($a / $b)."<br>";

//2. assignment operators
$x = $a;
echo $x;echo "<br>";
$a+=5; echo $a;echo "<br>";
$a-=5; echo $a;echo "<br>";
$a*=5; echo $a;echo "<br>";
$a/=5; echo $a;echo "<br>";


//3.comparison operators

$x = 6;
$b = 9;

echo "for x == b,the result is ";


echo var_dump($x == $b)."<br>";
echo "for x == b,the result is ";

echo var_dump($x > $b)."<br>";
echo "for x > b,the result is ";

echo var_dump($x < $b)."<br>";
echo "for x > b,the result is ";

echo var_dump($x <> $b)."<br>";
echo "for x <> b,the result is ";
echo "<br>";


//4.logical operators

$m = true;
$n =  false; 

echo "for m and n,the result is ";
echo var_dump($m and $n);
echo "<br>";

echo "for m or n,the result is ";
echo var_dump($m or $n);
echo "<br>";

echo "for m || n,the result is ";
echo var_dump($m || $n);
echo "<br>";

echo "for m && n,the result is ";
echo var_dump($m && $n);
echo "<br>";

echo "for !m and n,the result is ";
echo var_dump(!$m and $n);
echo "<br>";


?>