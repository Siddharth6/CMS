<?php

session_start();
include 'config.php';

//PDO data insert CMS :

$title=$_POST['title'];//title
$content=$_POST['content'];//content

try {
    $conn = new PDO("mysql:host=$servername;dbname=rb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Post ( title, content)
    VALUES ('$title', '$content')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    header('location:../user/dashbord.php');
    // function redirect($url) {
    //         echo "";
    //         echo "Redirecting in 3 seconds";
    //         echo "<a href='$url' >Click here if it does not redirect you</a>";
    //     }


 //redirect("../user/dashbord.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
