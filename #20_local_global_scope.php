<?php
echo "welcome to scope and local/global vars in php <br>";
$a=98;  //global variable
$b = 100;
function printValue(){
    //$a = 97;    //local variable
    global $a,$b;
    $a=1000;
    $b=100;
    echo "<br>the value of your variable a is $a and b is $b";
}
echo $a and $b;
printValue();


?>