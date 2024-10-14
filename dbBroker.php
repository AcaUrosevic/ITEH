<?php
$host = "localhost";
$pass = "";
$user = "root";
$database = "kolokvijumi";
$port = 3306;

$conn = new mysqli($host, $user, $pass, $database, $port);
if ($conn->connect_errno) {
    echo ("povezivanje sa bazom nije uspelo");
}
