<?php

//validation from ......

session_start();
$con= mysqli_connect('localhost','root','');
if($con){
	
   echo "connection successful";
   
}else{
	
	echo "no connection";
}
mysqli_select_db($con,'rb'); 

 $name =$_POST['username'];
 
 $pass = $_POST['password'];
 
 
 $q= "select *from Sign where name ='$name' && password ='$pass' ";
 
 $reuslt= mysqli_query($con ,$q);
 
 $num= mysqli_num_rows($reuslt);
 
 if ($num ==1){
	
	$_SESSION['username']=$name;
    
    header('location:../user/dashbord.php');
	
 }else{
	 
     header('location :../index.html');
     //echo" User  not found";
 }
 
 ?>