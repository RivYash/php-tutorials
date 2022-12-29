<?php
$name="harry";
$income  = 200;

/* php data type
1. string
2. integer
3. float
4. boolean
5. object
6. array
7. null
*/


// string- sequence of caracters
$name = "yash";
$friend = "ganu";
echo "$name is $friend friend";

//integer non decimal number

$income = 455;
$debts =  -55;
echo '<br>';
echo $income;
echo '<br>';
echo $debts;
echo '<br>';


// float- decimal point number 
$income=  344.5;
$debts  = -55.7;
echo $income;
echo '<br>';
echo $debts; 
echo '<br>';

//boolean-  can be either true or false

$x =true;
$is_friend= false;
echo var_dump($x);
echo '<br>';
echo var_dump ($is_friend) ;
echo '<br>';


//object-instances of classes
//Employee is a class ---> yash can be one object
//array - used to store multiple values

$friends = array("rohan","shubham","skillf","larry");
echo var_dump($friends);
echo '<br>';
echo $friends[0];echo '<br>';
echo $friends[1];echo '<br>';
echo $friends[2];echo '<br>';
echo $friends[3];echo '<br>';


//null- reset value
$name= NULL;
echo var_dump($name);

?>