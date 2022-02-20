
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

  // Create new DB connection object

	//  Database code taken from lecture 07 Feb 2022 example-forms file on brightspace.
	$db = new mysqli("localhost", "root", "root", "user_info");
	if ($db->connect_error) {
		die("Nope, not connected!" . $db->connect_error);
	}

  //getting the relative path of the referrer
  $file_name = $_SERVER['PHP_SELF'];

  //NOTE TO MARKER: due to explicitly specifying the file path of the php file, this may not be functional when you are testing it, however it works perfectly from my file, and if you use the same file paths then it will work perfectly as

  //seeing if it matches index.php file path
  if ($file_name != "/a2part2/elgamil/A2/index.php"){

    ?>
    <!-- having seperate forms if the user is in index or is in the articles, so we could
  change the file pathes accordingly -->
<form method="get" class="nav-link" action="../includes/login.php"> 
			<label for="text-input">Login Form</label>
			<input type="email" name="i-email">
      <input type="password" name="i-password">
			<input type="submit" id="text-submit" name="submit-login-info" value="Log in">
		</form>

<?php

  }
  else {

?>

<form method="get" class="nav-link" action="includes/login.php"> 
			<label for="text-input">Login Form</label>
			<input type="email" name="i-email">
      <input type="password" name="i-password">
			<input type="submit" id="text-submit" name="submit-login-info" value="Log in">
		</form>

    <?php
  }
  ?>

  
<?php

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