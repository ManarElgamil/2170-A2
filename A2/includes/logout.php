<?php
// Over here we make the user log out and delete everything and redirect back to index.php

ob_start();
//attempt to write user data in file, maybe code should be placed elsewhere 
$fileH = fopen("../server/login-data.txt", "w+"); 
if(!$fileH){
  die("File cannot be opened!"); 
}

//deleting everything in the file
fwrite($fileH, "");

ob_end_clean();

//working properly
header("Location:../index.php");

?>