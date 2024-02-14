<?php
$servername = "localhost";
$username = "root";
$password = ""; //letak semicolon
$database = "farmasi"; //letak nama database

// Create connection
$conn = mysqli_connect("localhost","root",""); //tukar mysql_connect kepada mysqli_connect
$db = mysqli_select_db($conn, "farmasi"); //tukar mysql_connect kepada mysqli_connect //tambah $conn 
echo "databases not connected";
?>
