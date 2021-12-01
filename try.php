<?php
$username= "root";
$password= "";
$database = new POD ("mysql:localhost; dbname=books;", $username,$password );

if($database){
    echo " every thing is okay";
}


?>