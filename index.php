<?php
if(!isset($_GET['username'])){
header('Location: /assembler/my-first-php/home.php');
    exit();
}
$username = $_GET['username'];
echo "Hello $username, welcome to our PHP info page!  ";

echo "Do you want to start learning ? The first lesson is about: <a href='/assembler/my-first-php/session_variables.php?username=".$username."'>PHP SESION VARIABLES</a>";
exit();

?> 

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Server Environment</title>
</head>
<body>
<h1>PHP Server Environment</h1>
<ol>
<li><a href="/assembler/my-first-php/phpinfo.php">PHP Information</a></li>
<li><a href="/assembler/my-first-php/server_variables.php">PHP $_SERVER</a></li>
<li><a href="/assembler/my-first-php/session_variables.php">PHP $_SESSION</a></li>
</ol>

<p>Hi!</p>

</body>
</html>