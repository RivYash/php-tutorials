<?php
echo "stating with database";


//connecting to database
$servername = "localhost";
$username = "root";
$password = "";

//create connection
$conn = mysqli_connect($servername,$username,$password);

// die if connection not succcesful


if(!$conn){
    die("sorry we failed to connect :" .mysqli_connect_error());
}
else{
    echo " connection was successful";
}

?>