<?php
session_start();
?>
<!DOCTYPE html> 
<html lang="en" dir="ltr"> 
   <head> 
      <meta charset="utf-8"> 
      <title>LOG IN</title> 
      <link rel="stylesheet" href="login.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> 
   </head> 
   <body> 
 
          <div class="login-form"> 
         <div class="text"> 
            LOGIN 
         </div> 
         <form action="loginn.php" method="post"> 
            <div class="field"> 
            <i class="fas fa-user"></i> 
               <input type="text" name = 'name' placeholder="user name"> 
            </div> 
            <div class="field"> 
               <div class="fas fa-lock"></div> 
               <input type="password" name = 'pass' placeholder="Password"> 
            </div> 
            <div class="field"> 
            <button> 
               <input type= "submit"  value="log in"> 
            </button> 
            </div> 
            <div class="link"> 
               forget password? 
               <a href="#">click here</a> 
            </div> 
         </form> 
      </div> 
   </body> 
</html>