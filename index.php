<?php

$name=_POST['name'];
$pass=_POST['pass'];
$con= new mysqli("localhost","root","root","books");
if($con->connect_error){
    die('connection failed : ' .$con->connect_error);
}else{ 
   $stmt =$con->prepare("insert into user (username , password) values(?,?)"); 
   $stmt ->bind_param("ss",$name,$pass);
   $stmt ->execute();
   echo "login suuccessfuley";
   $stmt ->close();
   $con ->close();
}


?>