<?php

session_start();
include 'config.php';

//PDO data insert:

$name=$_POST['username'];//username
$pass=$_POST['password'];//password
$email=$_POST['email'];//password

try {
    $conn = new PDO("mysql:host=$servername;dbname=rb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO sign ( name, password , email)
    VALUES ('$name', '$pass','$email')";
    // use exec() because no results are returned
    $conn->exec($sql);
    //echo "New record created successfully";
    header('location:../index.html');
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
