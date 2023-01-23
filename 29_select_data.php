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

$sql = "SELECT * FROM `trip`";
$result = mysqli_query($conn, $sql);

// find the number of records 

$num = mysqli_num_rows($result);
echo $num;
echo" records found in database <br>";

//display the rown written by sql querry
if($num> 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo"<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo"<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo"<br>";

    //fetch using while loop

    while($row = mysqli_fetch_assoc($result)){
       // echo var_dump($row);
       echo $row['sno'].") hello ".$row['name']." welcome to ".$row['dest'];
        echo "<br>";

    }

}
?>