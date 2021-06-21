<a href="index.php">GO BACK</a>
<?php
$username = $_GET['username'];
echo "Hello $username, how are you feeling today?";

echo "Do you want to see more info ? The next lesson is about: <a href='/assembler/my-first-php/server_variables.php?username=".$username."'>PHP SERVER VARIABLES</a>";



echo '<h1>Super Global $_SESSION</h1>';

# $_SESSION SUPERGLOBAL
//session_start();

$_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['time'] = time();
echo '<pre>';
print_r($_SESSION);


exit();
?> 