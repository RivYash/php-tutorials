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
$sql = "DELETE FROM `trip` WHERE `dest` = 'thaila' LIMIT 1" ;
$result = mysqli_query($conn, $sql);


$aff= mysqli_affected_rows($conn);

echo "number of affected rows are : $aff <br>";

if($result){
    echo "we deleted the record successfully";

}else{
    $err = mysqli_error($conn);
    echo "we could not delete the record successfully --> $err";
}
?>