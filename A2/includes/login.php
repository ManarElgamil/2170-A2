


<!-- SanitizeData function taken from lecture 07 Feb 2022 example-forms file on brightspace. -->

<?php

ob_start();

// (1) Sanitize form data input
  	function sanitizeData($inputData) {
		$returnValue = trim($inputData);
		$returnValue = htmlspecialchars($returnValue);
		$returnValue = stripslashes($returnValue);

		return $returnValue;
	}

  ?>


<!-- action attribute, is what the php that processes this form -->
<!-- there is an error here -->
<!-- added includes -->
<form method="get" class="nav-link" action="includes/login.php"> 
			<label for="text-input">Login Form</label>
			<input type="email" name="i-email">
      <input type="password" name="i-password">
			<input type="submit" id="text-submit" name="submit-login-info" value="Log in">
		</form>

<?php


// Create new DB connection object

	//  Database code taken from lecture 07 Feb 2022 example-forms file on brightspace.
  //I needed to include the 3307 because there is a problem with my mamp installation and sql workbench
  //okaaay this is finally connected
	$db = new mysqli("localhost", "root", "root", "user_info");
	if ($db->connect_error) {
		die("Nope, not connected!" . $db->connect_error);
	}

  //now I want to check if the email and password exist, if they do, do something, else so something else
  //so this part is done, let's look at the something and something else and try to do those



// // Process the form submission
if (isset($_REQUEST['submit-login-info'])) {

  $email = sanitizeData($_REQUEST['i-email']);
  $password = sanitizeData($_REQUEST['i-password']);
  $sql = "SELECT * FROM `contact_info` WHERE email='$email' AND pasword='$password'";
  $result = $db->query($sql);

  //here we need to find a way to get the name variable and store this as a record, since so far we can only retrieve the email, but yeah we are going well, and we have all of today to complete this
  //this means that the email and password exist
  if ($result->num_rows > 0){

    $row =  $result->fetch_row();

    $name = $row[0];
  
    //attempt to write user data in file, maybe code should be placed elsewhere 
    $fileH = fopen("../server/login-data.txt", "w+"); 
    if(!$fileH){
      die("File cannot be opened!"); 
    }

    //okaay, so now we have both variables, but we need to find away to store them appropriately

    //we are trying to store this as a json data, and it is saved correctly

    $array = array("name" => "$name" , "email" => "$email");

    //storing the name and email as an
    fwrite($fileH, json_encode($array));  
    rewind($fileH); 
    fclose($fileH);
    ob_end_clean();

    //working properly
    header("Location:../index.php?valid-user");
  
  }
    //this means that it doesn't exist
  else {
    //redirecting to index.php
    header("Location:../index.php?login-error");
  }

}
?>



<!-- This is the styling we want to implement but we will use this later -->
<!-- <form method="get" action="login.php">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="i-email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="i-password">
    </div>
  </div>
  
  <input type="submit" id="login" name="i-submit">
</form> -->