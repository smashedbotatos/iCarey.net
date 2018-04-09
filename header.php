<?php
/**
* Header file for the main site
* @license      Apache License v2.0
* @author       Smashedbotatos <ian@icarey.net>
* @copyright    Copyright © 2009-2018 iCarey Computer Services.
*/
ob_start();

if ( ! session_id() ) session_start();
if ( ! isset( $_SESSION['icarey'] ) ) {
    $_SESSION['icarey'] = array();
}

require_once __DIR__ . '/classes/basic.class.php';

?><!DOCTYPE html><html lang="en">
<head>
  <meta charset="utf-8">
  <title>iCarey Computer Services</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Mono">
  <!-- Icon Fonts -->
  <link rel="stylesheet" href="assets/open-iconic/font/css/open-iconic-bootstrap.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/icarey.css">
  <!-- Favicon Configuration -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-16x16.png">
  <link rel="manifest" href="assets/icons/site.webmanifest">
  <link rel="mask-icon" href="assets/icons/safari-pinned-tab.svg" color="#ff652f">
  <meta name="apple-mobile-web-app-title" content="iCarey Computer">
  <meta name="application-name" content="iCarey Computer">
  <meta name="msapplication-TileColor" content="#242424">
  <meta name="theme-color" content="#ffffff">
  <!-- JavaScript -->
  <script src="assets/js/icarey.js"></script>

</head>

<body>
<!-- Main Menu Navigation ================================================== -->
<!-- Fixed navbar -->
  <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top nav-main">
        <a class="navbar-brand" href="https://icarey.net">
          <img src="assets/images/icarey_logo.png" width="145" height="45" alt="iCarey Computer Services">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link">
                <button type="button" id="popup" onclick="div_show()" class="btn btn-icarey btn-sm">
                  <span class="oi oi-clipboard" title="Track Repair" aria-hidden="true"></span>
                   Track Repair
                </button>
                </a>
            </li>
            <?php if(isset($_SESSION['icarey']['email'])) { ?>
              <li class="nav-item dropdown">
                <button type="button" class="btn btn-outline-secondary btn-sm">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php echo $_SESSION['icarey']['email']; ?>
                  </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="logout.php">Logout</a>
                  <!-- <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>-->
                </div>
                </button>
              </li>

            <?php } else { ?>
            <li class="nav-item">
              <a href="login.php" class="nav-link">
                <button type="button" class="btn btn-icarey btn-sm">
                  <span class="oi oi-account-login" title="Account Login" aria-hidden="true"></span>
                   Login
                </button>
              </a>
            </li>
          <?php } ?>
          </ul>
        </div>
        </nav>
    </header>
    <!-- iTracker Form Popup -->
  <div id="TrackingWindow">
    <!-- Popup Div Starts Here -->
    <div id="popupTrack">
    <!-- Tracking Form -->
      <div class="container">
        <form id="track-form">
          <h2>Track Your Repair</h2>
          <span id="track-close" class="oi oi-x float-md-right" onclick ="div_hide()" title="Close" aria-hidden="true"></span>
          <div class="form-group">
            <label for="track-email">Email address</label>
            <input type="email" class="form-control" id="track-email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">Email address given at dropoff.</small>
          </div>
          <div class="form-group">
            <label for="track-tag">Asset Tag ID</label>
            <input type="text" class="form-control" id="track-tag" aria-describedby="tagHelp" placeholder="Asset Tag">
            <small id="tagHelp" class="form-text text-muted">Asset Tag from your dropoff sheet.</small>
          </div>
          <button type="submit" class="btn btn-icarey" onclick="check_empty();">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <!-- iTracker Form End -->
