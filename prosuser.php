<?php include("config.php"); //tukar link.php kepada config.php
    
$name = $_POST['name']; //tukar $nama kepada $name
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user VALUES ('','$name','$username','$email','$password','2')"; 
$result = mysqli_query($conn, $sql); //tukar mysql_query kepada mysqli_query //tambah $conn

header("Location: index.php"); //tiada directory ke laman utama
?>


