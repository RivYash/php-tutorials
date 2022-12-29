<?php

$name= "yash";
echo $name;
echo "<br>";

echo "the length of string is " . strlen($name);
echo "<br>";

echo "the words are".str_word_count($name);
echo "<br>";

echo "reversed is  ".strrev($name);
echo "<br>";

echo strpos($name,"a");
echo "<br>";

echo str_replace("y","a",$name);
echo "<br>";

echo str_repeat($name,10);
echo "<br>";


echo "<pre>";
echo rtrim("     yash    ");
echo "</pre>";

?>