<?php
    echo" this is for each loop";
    $arr =  array("bananas","apples","harpic","cherry","btter");
    /*
    for ($i=0; $i < count($arr); $i++) { 
        # code...
        echo $arr[$i];
        echo"<br>"
    }
    */
    foreach ($arr as $value) {
        # code...
        echo "$value<br>";
    }
 
?>