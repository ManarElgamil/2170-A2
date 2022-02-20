<?php

// (1) Sanitize form data input
  	function sanitizeData2($inputData) {
		$returnValue = trim($inputData);
		$returnValue = htmlspecialchars($returnValue);
		$returnValue = stripslashes($returnValue);
		return $returnValue;
	}

?>

<form method="get" class="nav-link" action="../includes/submit-comments.php"> 
			<label for="text-input">Comments Form</label>
			<input type="email" name="input-email">
      <input type="text" name="input-fullname">
      <div class="form-floating">
  <textarea class="form-control" name="comments-i" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
  <label for="floatingTextarea">Comments</label>
</div>
      <button type="submit" name="submit-comments"  class="btn btn-primary">Submit Comment</button>
      <!-- Buttons that clear the page -->
      <button type="submit" class="btn btn-primary">Clear</button>
</form>


<?php

$file_name = $_SERVER['PHP_SELF'];

if (isset($_REQUEST['submit-comments'])) {

  $fullname = sanitizeData2($_REQUEST['input-fullname']);
  $email = sanitizeData2($_REQUEST['input-email']);
  $comments = sanitizeData2($_REQUEST['comments-i']);
}

$fileH = fopen("../server/comments.txt", "w+"); 
if(!$fileH){
  die("File cannot be opened!"); 
}


//converting the form information into an associative array
$array = array("file_name" => "$file_name" , "commenter_name" => "$fullname", "commenter_email" => "$email", "comment" => "$comments");

//storing it in JSON format
fwrite($fileH, json_encode($array));  


rewind($fileH); 
fclose($fileH);


//my attempt at displaying and reloading the page after the form submission
// if ($file_name == "/a2part2/elgamil/A2/articles/bad-motivator.php"){
//   $file_name = "bad-motivator.php";
// }
// if ($file_name == "/a2part2/elgamil/A2/articles/wookies.php"){
//   $file_name = "/wookies.php";
// }
// if ($file_name == "/a2part2/elgamil/A2/articles/main-reactor.php"){
//   $file_name = "main-reactor.php";
// }
// if ($file_name == "/a2part2/elgamil/A2/articles/human-cyborg-comm.php"){
//   $file_name = "human-cyborg-comm.php";
// }

// if (!filesize('../server/comments.txt') == 0){
  
//   echo "\n\nComments submitted by the User $comments";
// }
?>




