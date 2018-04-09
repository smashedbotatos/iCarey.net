<?php
/**
* Home Page for the main site
* @license      Apache License v2.0
* @author       Smashedbotatos <ian@icarey.net>
* @copyright    Copyright © 2009-2018 iCarey Computer Services.
*/
include_once('header.php');
include_once __DIR__ . '/classes/login.class.php';

if(!isset($_SESSION['icarey']['email']) && $_POST['login']) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $validate = new Login();
  $success = $validate->validate($email, $password);
if(isset($_SESSION['icarey']['email'])) {
  header('Location: tracker.php');
  exit();
} else {
}
}
?>

<main role="main" class="container-fluid">

  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
      <h1 class="display-4 mt-5">Login</h1>
      <br />
      <hr>
    </div>
    <div class="col-sm-3">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
  <form action='./login.php' method='POST' class="form-horizontal">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
      <div class="col-sm-10">
        <input type="email" name='email' class="form-control" id="inputEmail3" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
      <div class="col-sm-10">
        <input type="password" name='password' class="form-control" id="inputPassword3" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name='login' value='Login' class="btn btn-icarey">Sign in</button>
      </div>
    </div>
  </form>
</div>
<div class="col-sm-3">
</div>
</main>

<?php include_once('footer.php'); ?>
