<?php
echo "stating with database";


//connecting to database
$servername = "localhost";
$username = "root";
$password = "";

//create connection
$conn = mysqli_connect($servername, $username, $password);


// die if connection not succcesful
if(!$conn){
    die("sorry we failed to connect :" .mysqli_connect_error());
}
else{
    echo " connection was successful";
}

//create db
$sql= "CREATE DATABASE dbyash";
$result = mysqli_query($conn, $sql);

//check for db creation 
if ($result){
    echo"created successfully!";
   
}else{
    echo"db was not created successfully! because of this error -->".mysqli_error($conn);
}





?>