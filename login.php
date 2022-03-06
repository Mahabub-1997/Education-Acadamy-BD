<html>

<head>
  <style>
    table,
    tr,
    th {

      border: 1px solid black;
    }

    body {
  background: url(img/login.jpg);
}

  </style>
</head>
<body>


    <table style="width: 100%">
           <div style="border: 1px solid black; background-color:darkmagenta ">
           <h1 style="font-size: 20px;" >Login </h1>         
           </div>
 

  <table style="width: 1262px; height: 200px" border="3">
  <p>
<?php
   ob_start();
   session_start();
?>

      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #ffef96 ;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h2{
            text-align: center;
            color: #017572;
         }
      </style>
      
   </head>
  
   <body>
      
      <h2>Enter Username and Password</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
        
               if ($_POST['username'] == 'tosmia'&& 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tosmia';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> 
      
      <div class = "container">
      <div style="border: 1px solid black;background-color: #eca1a6">

         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username  " 
               required autofocus style="margin-left: 45px"><br>
           </br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password  " required  style="margin-left: 45px">
               <br> <br>
            <button class = "btn btn-lg btn-primary btn-block" type = "GO"  name = "login" style="margin-left: 43px">Login</button>
         </form>

         <br>
     </br>
      
        
         
      </div> 
      
   </body>
</html>


<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>

 <div  class="w3-container w3-teal" style="border: 1px solid black;background-color: #9932CC ">
  <footer style="width:100%; text-align: center;">
    <p>&copy; 2021 </p>
    <a href=" 2021. All right reserve"> All right reserve</a>
  </footer>
</div>
</body>
</head>
