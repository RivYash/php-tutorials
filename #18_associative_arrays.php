<?php
echo "welcome to assorciative arrays in php<br>";

//$arr = array("this","that","what");
//echo $arr[0];


//assorciative array
$favCol = array(
    "sahil" =>"red",
    "yash" => "blue",
    "ganu" => "green",
    8 =>"eight"
);
foreach ($favCol as $key => $value) {
    # code...
    echo "<br>favorite colour of $key is $value";

}

// echo $favCol ["sahil"];
// echo "<br>";
// echo $favCol ["ganu"];
// echo "<br>";
// echo $favCol ["yash"];


?>