<?php
error_reporting(0);
// Start the session
session_start();
//$_SESSION["$username1"];
if(!isset($_SESSION['username'])){
	//header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>RB | Dashbord</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body style="background-color:#FFCCFF;">
  <nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>

      </a>
    </span>

    <!-- <ul class="navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul> -->
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <!-- <a data-toggle="collapse" href="#collapseExample3" >my Profile</a> -->
    <a data-toggle="collapse" href="#collapseExample" >Add Post</a>
    <a data-toggle="collapse" href="#collapseExample3">Action</a>
    <a href="#">Services</a>
    <a data-toggle="collapse" href="#collapseExample2">Contact</a>
    <a href="../php/logout.php">Logout</a>
  </div>
<!--main conter===-->
  <div id="main">
     <div class="container">

       <div class="form-inline">

   <div class="card" style="width:300px;">
       <div class="card-body">
           <h5 class="card-title">HELLO <?php echo $_SESSION['username']; ?></h5>

       </div>
   </div>

   <div class="card" style="width:300px;">
        <div class="card-body">
            <h5 class="card-title">Post</h5>

        </div>
    </div>

    <div class="card" style="width:300px;">
            <div class="card-body">
                <h5 class="card-title">Analytics</h5>

            </div>
        </div>



</div>


</div>






<br/>
<div>

</div>
 <!--Add users--------------------------------------------------------------------------------------------------------------------------------->


<form class="form-inline collapse" method="post" action="../php/add.php" id="collapseExample" style="margin-left:6rem;">

<!-- <h1 class="alert-success text-justify text-center" style="width:350px;"> ADD USERS</h1><br/>
<input id="user" class="form-control" type="text" placeholder="First name">
<input id="user" class="form-control" type="text" placeholder="Last name"><br/><br/>
<input id="user" class="form-control" type="password" placeholder="Enter Password">
<input id="user" class="form-control" type="email" placeholder="Enter email"><br/><br/>
<input id="user" class="form-control" type="password" placeholder="RE-Enter Password">

<select class="custom-select" required> <option value="">select Option</option>
<option value="1">One</option> <option value="2">Two</option> <option
value="3">Three</option> <option value="4">Four</option> <option
value="5">five</option> <option value="6">six</option> <option
value="7">seven</option> <option value="8">eight</option> ctrl-alt-l launch live
server on port 3000. ctrl-alt-q stop live server. </select><br/><br/> <button
class="btn btn-success" type="submit"style="width:80px;">submit</button> -->
<h1 class="alert-success text-justify text-center"style="width:400px;"> Add Post</h1><br/>
<input id="user" class="form-control" type="text" placeholder="ADD a Title"style="width:500px;" name="title"><br/><br/>
 <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" style="width:500px;" placeholder="write your post" name="content"></textarea><br/><br/>
 <button class="btn btn-success" type="submit"style="width:80px;">submit</button>
<br/>



</form>

<!-- <form action="../php/upload.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form> -->
<br/>

<!--update from----------------------------------------------------------------------------------------------------------------------------->

<form class="form-inline collapse" method="post" action="" id="collapseExample1" style="margin-left:6rem;">
<br/>
     <h1 class="alert-success text-justify text-center" style="width:350px;">Post</h1><br/>
    <!--<input id="user" class="form-control" type="text" placeholder="First name">
    <input id="user" class="form-control" type="text" placeholder="Last name"><br/><br/>
    <input id="user" class="form-control" type="password" placeholder="Enter Password">
    <input id="user" class="form-control" type="email" placeholder="Enter email"><br/><br/>
    <input id="user" class="form-control" type="password" placeholder="RE-Enter Password">

    <select class="custom-select" required>
        <option value="">select Option</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option
        <option value="4">Four</option>
        <option value="5">five</option>
        <option value="6">six</option>
        <option value="7">seven</option>
        <option value="8">eight</option>

    </select><br/><br/>
    <button class="btn btn-success" type="submit"style="width:90px;">UPDATE</button>-->





    </form><br/>

<!--contact us from-------------------------------------------------------------------------------------------------------------------------->


    <form class="form-inline collapse"  id="collapseExample2" style="margin-left:6rem;">
<br/>
        <h1 class="alert-success text-justify text-center" style="width:350px;margin-right:25px;">CONTACT - US </h1><br/>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">

  <div class="card-header">HELLO <?php echo $_SESSION['username']; ?></div>
  <div class="card-body">
    <h5 class="card-title">E-mail</h5>
    <p class="card-text">
     siddharthmaurya28021999@gmail.com
    </p>
  </div>
</div>


  </form>

  <!-- show profile -->
  <div class ="container">

<form class="collapse text-justify" id="collapseExample3">
    <h1 class="alert-success text-justify text-center" style="width:350px;margin-right:25px;">POST  </h1><br/>
<?php
include'../php/config.php';
try{
  $conn = new PDO("mysql:host=$servername;dbname=rb", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
  $query = "SELECT * FROM post";
  $data=$conn->query($query);
  foreach ($data as $row) {
    echo' <div class="container">
         <div class="card" style="width: 40rem;margin-top:3px;"><br/>
         <div class="container">
        <div class="card-body">

       <h3 class="card-subtitle mb-2 text-muted">'.$row["title"].'</h3><br

       <p class="card-text">'.$row["content"].'</p>

     </div><br/>
     </div>
     </div>
     </div>

    ';
  }
}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>
</from>

</div>


<script src="../js/index.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }


    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';

    }




  </script>
</body>
</html>
