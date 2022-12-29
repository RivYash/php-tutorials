<?php

echo "whelcome to php tutorials on functions<br>";
function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        # code...
        $sum += $value;
    }
    return $sum;
}
function avgMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        # code...
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$sahil = [20,30,50,60,70,45];
$sumMarksSahiladd= processMarks($sahil);

$yash = [90,92,93,100,80,85];
$sumMarksYashadd = processMarks($yash); 

$sahil = [20,30,50,60,70,45];
$sumMarksSahil= avgMarks($sahil);

$yash = [90,92,93,100,80,85];
$sumMarksYash = avgMarks($yash); 

echo "total marks scored by sahil out of 600 is $sumMarksSahiladd and avg is $sumMarksSahil<br>";
echo "total marks scored by yash out of 600 is $sumMarksYashadd and avg is $sumMarksYash";
?>  