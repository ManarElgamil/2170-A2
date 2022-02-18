
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	 
	<!-- Adding bootstrap's cdn to be able to use bootstrap's styling -->

	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	 <!-- Adding my stylesheet (main.css) after bootstrap's stylesheet, so that after bootstrap's styles
     are applied to the html, my styles are applied after that (my styles get the upper hand)
    This was very nicely explained in this link here: https://www.youtube.com/watch?v=jXt7yYvCYhc -->
		<link href="css/main.css" rel="stylesheet" >


	<title>Tiger News</title>
</head>
<body>
	<header id="pg-banner" class="pg-header">
		
		<nav id="primary-nav" class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
			<h1>Tiger News</h1>

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

<!-- including the login form -->
<?php


		//printing the error message, if password is incorrect 
		if ($_GET == NULL){
			require_once "includes/login.php";
		}

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

	<aside id="tiger-people">
		<ul>
			<li><a href="mailto:yoda@theforce.org">Yoda (Editor-in-Chief)</a></li>
			<li><a href="mailto:rey@theforce.org">Rey S (Investigative Reporter)</a></li>
			<li><a href="mailto:luke@theforce.org">Luke S (Contributor)</a></li>
		</ul>
	</aside>

	<!-- 
		Content in this page is dummy content from ForcemIpsum.com
		Author: Scotty G
		URL: https://forcemipsum.com/
		Date accessed: 18 Jan 2022
	 -->
	<main id="pg-main-content" class="container-fluid">
	<div class="row my-background">

<!-- Using mx-auto to make the main centered, from bootstrap -->
<div class="col-sm-8 mx-auto background pt-5">

		<section id="highlights" class="info-box">
			<h2>Highlights</h2>
			<p>Did you hear that? They've shut down the main reactor. We'll be destroyed for sure. This is madness! We're doomed!</p>
			<p>Artoo! Artoo-Detoo, where are you? At last! Where have you been?</p>
			<p>But sir, nobody worries about upsetting a droid. That's 'cause droids don't pull people's arms out of their socket when they lose.</p>
			<p>A real bargain. That R2 unit is in prime condition.</p>
		</section>

		<section id="covid-summary" class="info-box">
			<h2>COVID-19 Info Summary</h2>
			<ul>
				<li>New hospital admissions: 99</li>
				<li>New cases: 650</li>
				<li>New vaccine doses: 12,581</li>
			</ul>
		</section>

		<section id="featured-articles">
			<h2 class="h2">Featured Articles</h2>
			<section id="featured-art1" class="art-summary">
				<h3 class="h3">Main reactor</h3>
				<p>Did you hear that? They've shut down the main reactor. We'll be destroyed for sure. This is madness! We're doomed! There'll be no escape for the Princess this time. What's that? Artoo! Artoo-Detoo, where are you? At last! Where have you been? They're heading in this direction.</p>
				<p><a href="articles/main-reactor.php">Read more &raquo;</a></p>
			</section>
			<section id="featured-art2" class="art-summary">
				<h3 class="h3">Bad motivator</h3>
				<p>Did you hear that? They've shut down the main reactor. We'll be destroyed for sure. This is madness! We're doomed! There'll be no escape for the Princess this time. What's that? Artoo! Artoo-Detoo, where are you? At last! Where have you been? They're heading in this direction.</p>
				<p><a href="articles/bad-motivator.php">Read more &raquo;</a></p>
			</section>
			<section id="featured-art3" class="art-summary">
				<h3 class="h3">Wookies taking over</h3>
				<p>Did you hear that? They've shut down the main reactor. We'll be destroyed for sure. This is madness! We're doomed! There'll be no escape for the Princess this time. What's that? Artoo! Artoo-Detoo, where are you? At last! Where have you been? They're heading in this direction.</p>
				<p><a href="articles/wookies.php">Read more &raquo;</a></p>
			</section>
			<section id="featured-art4" class="art-summary">
				<h3>Human-cyborg communication</h3>
				<p>Did you hear that? They've shut down the main reactor. We'll be destroyed for sure. This is madness! We're doomed! There'll be no escape for the Princess this time. What's that? Artoo! Artoo-Detoo, where are you? At last! Where have you been? They're heading in this direction.</p>
				<p><a href="articles/human-cyborg-comm.php">Read more &raquo;</a></p>
			</section>
		</section>
		
		<article id="about-info">
			<h2 class="h2">About Tiger News</h2>
			<p>Did you hear that? They've shut down the main reactor. We'll be destroyed for sure. This is madness! We're doomed! There'll be no escape for the Princess this time. What's that? Artoo! Artoo-Detoo, where are you? At last! Where have you been? They're heading in this direction.</p>
			<p>Now be careful, Artoo. He made a fair move. Screaming about it won't help you. Let him have it. It's not wise to upset a Wookiee. But sir, nobody worries about upsetting a droid. That's 'cause droids don't pull people's arms out of their socket when they lose.</p>
			<p>There's no mystical energy field that controls my destiny. It's all a lot of simple tricks and nonsense. I suggest you try it again, Luke. This time, let go your conscious self and act on instinct.</p>
			<p>Yeah?This R2 unit has a bad motivator. Look! Hey, what're you trying to push on us? Excuse me, sir, but that R2 unit is in prime condition. A real bargain.</p>
			<p>All right. Threepio! Come in, Threepio! Threepio! Get to the top! I can't Where could he be? Threepio! Threepio, will you come in? They aren't here! Something must have happened to them. See if they've been captured. Hurry! One thing's for sure.</p>
		</article>
</div>

	</main>

	<script>
	</script>

	<?php
	require_once "includes/footer.php";
?>