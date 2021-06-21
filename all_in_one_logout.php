<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have cleaned session';
   echo 'Now we go back home!';

   header('Refresh: 2; URL = all_in_one.php');
?>