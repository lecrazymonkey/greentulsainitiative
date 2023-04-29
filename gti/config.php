<?php

$servername = "localhost";

$username = "u766251276_greentulsa"; 

$password = "Greentulsa23!"; 

$dbname = "u766251276_greentulsa1"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?> 