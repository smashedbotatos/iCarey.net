<?php
/**
* Header file for the main site
* @license      Apache License v2.0
* @author       Smashedbotatos <ian@icarey.net>
* @copyright    Copyright © 2009-2018 iCarey Computer Services.
*/

if ( ! session_id() ) session_start();
if ( ! isset( $_SESSION['icarey'] ) ) {
    $_SESSION['icarey'] = array();
}

error_log( "HELLO MAIN SITE HEADER" );

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
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li>
              <a href="register.php" class="signup-link">
                <button type="button" class="btn btn-icarey btn-sm">
                  <span class="oi oi-person" title="Account Register" aria-hidden="true"></span>
                   Register
                </button>
              </a>
              &nbsp;
            </li>
            <li>
              <a href="login.php" class="signup-link">
                <button type="button" class="btn btn-icarey btn-sm">
                  <span class="oi oi-account-login" title="Account Login" aria-hidden="true"></span>
                   Login
                </button>
              </a>
            </li>
          </ul>
        </div>
        </nav>
    </header>
