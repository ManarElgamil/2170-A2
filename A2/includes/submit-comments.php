<!-- <form>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email-i" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="fullname-i" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="fullname-i" class="form-control" id="fullname-i">
    </div>
  </div>

<div class="form-floating">
  <textarea class="form-control" name="comments-i" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
  <label for="floatingTextarea">Comments</label>
</div>

  <button type="submit" class="btn btn-primary">Sign in</button>
  <button type="submit" class="btn btn-primary">Clear</button>
</form> -->

<form method="get" class="nav-link" action="includes/submit-comments.php"> 
			<label for="text-input">Login Form</label>
			<input type="email" name="i-email">
      <input type="password" name="i-password">
      <div class="form-floating">
  <textarea class="form-control" name="comments-i" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
  <label for="floatingTextarea">Comments</label>
</div>
      <button type="submit" name="submit-comments"  class="btn btn-primary">Submit Comment</button>
      <!-- Buttons that clear the page -->
      <button type="submit" class="btn btn-primary">Clear</button>
</form>

<?php

// if (isset($_REQUEST['submit-comments'])) {

//   $email = sanitizeData($_REQUEST['i-email']);
//   $password = sanitizeData($_REQUEST['i-password']);
//   $comments = sanitizeData($_REQUEST['comments-i']);

  //we are not gonna deal with databases, we are

?>




