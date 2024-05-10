<?php
require 'config.php';

/**
*$host_name = 'localhost';
*$database = 'dbs228156';
*$user_name = 'root';
*$password = '';*/

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM asistentes";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Invitado: ".$row["ID"] ."<br> <b>Name:</b> " . $row["Nombre"] . " <br> Alergia: " . $row["Alergias"] . "<br> preboda: ". $row["preboda"] ."<br><hr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);


