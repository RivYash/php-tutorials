<?php
echo "welcome to multi dimentional arrays in php<br>";
// arrays inside array is called multi dimentional arrays


//creating two dimentional array
$multiDim = array(
    array(2,5,7,8),
    array(1,2,3,1),
    array(4,5,0,1)
);
//echo var_dump($multiDim);
//echo $multiDim[1][2];

// for ($i=0; $i < count($multiDim) ; $i++) { 
//       # code...
//       echo var_dump($multiDim[$i]);
//       echo"<br>";
// }

for ($i=0; $i < count($multiDim) ; $i++) { 
    for ($j=0; $j<count($multiDim[$i]) ; $j++) { 
        # code...
        echo ($multiDim[$i][$j]);
        echo " ";
    }
    # code...
    
    echo"<br>";
}

?>