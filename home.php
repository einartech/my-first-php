<?php

if(isset($_POST['username'])){
    $username=$_POST['username'];
    echo $username;
    header("Location: /assembler/my-first-php/index.php?username=".$username."");
    exit();
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/assembler/my-first-php/style.css">
    <title>Document</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/ecf8ef7f71.js" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
    <i class="far fa-user"></i>
    </div>

    <!-- Login Form -->
    <form method="post" action ="home.php" >
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="What is your name?">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="Insert your password here">
      <input type="submit" class="fadeIn fourth" value="Save">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
    
</body>
</html>