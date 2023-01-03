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

// to re-insert into the table

$name = "achyuth hegde";
$destination = "thailand";

//sql querry to be executed

$sql = "INSERT INTO `trip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

//add a new trip to the trip table
if($result){
    echo "The record has beeen inserted successfully!<br>";
}
else{
    echo "The record has not been inserted successfully ---> ". mysqli_error($conn);
}
?>