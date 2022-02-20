
<?php
//using the $_SERVER to see which web page the user is currently on

if  (basename($_SERVER['PHP_SELF']) == "index.php"){
	?>

	
<!DOCTYPE html>
<html lang="en">
<head>
<head>
	<meta charset="utf-8">
	 
	<!-- Adding bootstrap's cdn to be able to use bootstrap's styling -->

	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	 <!-- Adding my stylesheet (main.css) after bootstrap's stylesheet, so that after bootstrap's styles
     are applied to the html, my styles are applied after that (my styles get the upper hand)
    This was very nicely explained in this link here: https://www.youtube.com/watch?v=jXt7yYvCYhc -->
		<link href="css/main.css" rel="stylesheet" >`


	<title>Tiger News</title>
</head>

</head>
<body>
<header id="pg-banner" class="pg-header">
		
		<nav id="primary-nav" class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
			<h1 class="h1">Tiger News</h1>

			<div class="collapse navbar-collapse show" id="navbarNavAltMarkup">
      <div class="navbar-nav">

			<a class="nav-link" href="index.php">Home</a>
			<a class="nav-link" href="#">COVID-19 Info</a>
			<a class="nav-link" href="#">Contact Us</a>

			</div>
   	 </div>
			</div>
		</nav>
	</header>

	<?php

		if ($_GET == NULL){

			require_once "includes/login.php";
		}

		//printing the error message, if password is incorrect
		if (isset($_GET['login-error'])){
			require_once "includes/login.php";
			echo "<p>Please enter a valid email or password</p>";
		}

		else if (isset($_GET['valid-user'])){

			$fileH = fopen("server/login-data.txt", "r");
			if(!$fileH){
				die("File cannot be opened!"); 
			}

			echo "<p > <a href=\"includes/logout.php\">Welcome! ". json_decode(fgets($fileH), true)["name"] . " (logout)</a> </p>";

			fclose($fileH);
		} 

 ?>

<aside id="tiger-people"  class="collapse navbar-collapse show">

<div class="container-fluid">
	
<div class="navbar navbar-expand-lg navbar-light bg-light">
<h2 class="h2">   Emails to Use for Contacting </h2>
	<ul  class="navbar-nav" >
		<li><a class="nav-link" href="mailto:yoda@theforce.org">Yoda (Editor-in-Chief)</a></li>
		<li><a class="nav-link" href="mailto:rey@theforce.org">Rey S (Investigative Reporter)</a></li>
		<li><a class="nav-link" href="mailto:luke@theforce.org">Luke S (Contributor)</a></li>
	</ul>
</aside>
</div>
</div>
<?php
}


//all the articles' hea
else {
	?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
	<meta charset="utf-8">
	 
	<!-- Adding bootstrap's cdn to be able to use bootstrap's styling -->

	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	 <!-- Adding my stylesheet (main.css) after bootstrap's stylesheet, so that after bootstrap's styles
     are applied to the html, my styles are applied after that (my styles get the upper hand)
    This was very nicely explained in this link here: https://www.youtube.com/watch?v=jXt7yYvCYhc -->
		<link href="../css/main.css" rel="stylesheet" >`


	<title>Tiger News</title>
</head>

</head>
<body>
<header id="pg-banner" class="pg-header">
		
		<nav id="primary-nav" class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
			<h1 class="h1">Tiger News</h1>

			<div class="collapse navbar-collapse show" id="navbarNavAltMarkup">
      <div class="navbar-nav">
			<a class="nav-link" href="../index.php">Home</a>
			<a class="nav-link" href="#">COVID-19 Info</a>
			<a class="nav-link" href="#">Contact Us</a>

			</div>
   	 </div>
			</div>
		</nav>
	</header>

	
	<?php

		if (filesize('../server/login-data.txt') == 0){
			require_once "../includes/login.php";
	}

	else {

		$fileH = fopen("../server/login-data.txt", "r");
			if(!$fileH){
				die("File cannot be opened!"); 
			}

			echo "<p > <a href=\"../includes/logout.php\">Welcome! ". json_decode(fgets($fileH), true)["name"] . " (logout)</a> </p>";

			fclose($fileH);

	}
 ?>

<aside id="tiger-people"  class="collapse navbar-collapse show">

<div class="container-fluid">
	<div class="navbar navbar-expand-lg navbar-light bg-light">
<h2 class="h2">   Emails to Use for Contacting </h2>
	<ul  class="navbar-nav" >
		<li><a class="nav-link" href="mailto:yoda@theforce.org">Yoda (Editor-in-Chief)</a></li>
		<li><a class="nav-link" href="mailto:rey@theforce.org">Rey S (Investigative Reporter)</a></li>
		<li><a class="nav-link" href="mailto:luke@theforce.org">Luke S (Contributor)</a></li>
	</ul>
</aside>
</div>
</div>
<?php
 }
?>

