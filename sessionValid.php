<?php
   include('Config.php');

   session_start();
   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"select email from USER where email = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['email'];

   if(!isset($_SESSION['login_user'])){
      //echo "Session not set";
   }
   else{
     //echo "Session set";
   }
?>
