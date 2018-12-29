<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RB | Home </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  </head>
  <body class="bg-light text-dark">
<!-- img <colgroup></colgroup>-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" class="img-fluid rounded" src="https://picsum.photos/1420/513/?random=First slide" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://picsum.photos/1420/513/?random=?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://picsum.photos/1420/513?random=?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>







    <ul class="nav nav-tabs bg-primary">
  <li class="nav-item">
    <a class="nav-link active" href="index1.php">Home</a>
  </li>
  <li class="nav-item dropdown active">
    <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Create Blog</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="sign.html">Join me </a>
        <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="index.html">Login</a>
      <!-- <a class="dropdown-item" href="#"></a> -->
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#"> Please Donate </a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li>
</ul>

<br/>
<div class="container border border-danger" style="margin-left:20px;">
  <div class="container border border-danger" style="margin-left:20px;">
    <!-- php code show data in fetch data in db -->
    <?php

    include 'php/Config.php';
    //error_reporting(0);
    // Check connection
    try{
        $conn = new PDO("mysql:host=$servername;dbname=rb", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM post";
        $data=$conn->query($query);
        foreach ($data as $row) {
          // code...
          echo'

   <div class="container">
       <div class="card" style="width:auto;margin-top:3px;"><br/>
       <div class="container">
      <div class="card-body">

     <h3 class="card-subtitle mb-2 text-muted text-justify">'.$row["title"].'</h3><br

     <p class="card-text">'.$row["content"].'</p>

   </div><br/>
   </div>
   </div>
   </div>
          ';
        }

    }catch(PDOException $e)
    {
      $error->getMessage();
    }
    ?>










  </div>
  </div>
<br/>
  <!-- footer -->





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
