<?php
/**
* Home Page for the main site
* @license      Apache License v2.0
* @author       Smashedbotatos <ian@icarey.net>
* @copyright    Copyright © 2009-2018 iCarey Computer Services.
*/
include_once('header.php');
include __DIR__ . '/classes/tracker.class.php';
?>

<main role="main" class="container-fluid">

  <?php if(isset($_SESSION['icarey']['email'])) { ?>
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <h1 class="mt-5">iCarey Computer Services</h1>
        <p><small>Client Tracker</small></p>
        <br />
        <hr>
      </div>
      <div class="col-sm-3">
      </div>
    </div>
  <?php } else {
    header('Location: login.php');
    exit();
     ?>

  <?php } ?>
</main>

<?php include_once('footer.php'); ?>
