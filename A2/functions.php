<!-- Our Team's TA Mahmoud Monjur, suggested that I implement file redirection using functions, therefore
I tried doing so, but sadly it didn't work, either that or there was an error in my implementation-->

<?php
  function getCSS(){
    require_once "css/main.css";
  }

  function getLogin(){
    require_once "includes/login.php";
  }

  function getLoginData(){
    "server/login-data.txt";
  }


  function getLogoutURL(){
    "includes/logout.php";
  }
?>