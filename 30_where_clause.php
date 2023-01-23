<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbyash";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `trip` WHERE `dest`='patna'";
$result = mysqli_query($conn, $sql);

// find the number of records 
//usage of where clause to fetch data from datbase

$num = mysqli_num_rows($result);
echo $num;
echo" records found in database <br>";  

if($num> 0){

    //fetch using while loop

    while($row = mysqli_fetch_assoc($result)){
       // echo var_dump($row);
       echo $row['sno'].") hello ".$row['name']." welcome to ".$row['dest'];
        echo "<br>";

    }

}

//usage of where cluse to update data
$sql="UPDATE `trip` SET `name` = 'achyuth heg' WHERE `trip`.`sno` = 3;";
$result = mysqli_query($conn, $sql);
$aff= mysqli_affected_rows($conn);

echo "number of affected rows are : $aff <br>";

if($result){
    echo "we updated the record successfully";

}else{
    echo "we could not update the record successfully";
}


?>