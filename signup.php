<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>SIGN UP</title>
      <link rel="stylesheet" href="login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>

    
      <div class="login-form">
         <div class="text">
            SIGN UP
         </div>
         <!-- PHP-->
         <form action="/index.php" method="POST">
            <div class="field">
            
               <i class="fas fa-user"></i>
               <input type="text" placeholder="user name">
            </div>
            <div class="field">
               <i class="fas fa-envelope-open"></i>
                <input type="email" placeholder="email">
             </div>
            <div class="field">
               <div class="fas fa-lock"></div>
               <input type="password" placeholder="Password">
            </div>
            <button>
               
                <a href="#">Sign Up</a>
            </button>
            <div class="link">
               Have already account?
               <a href="login.html">log in</a>
               

            </div>
         </form>
      </div>
   </body>
</html>
