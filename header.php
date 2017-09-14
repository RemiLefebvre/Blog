<?php
  include ('connection.php');
 ?>
<!doctype html>
<html class="no-js" lang="FR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="favicon.ico">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    </head>

    <body>
      <nav class="d-flex justify-content-around navbar-light bg-faded">
          <a class="navbar-brand" href="#">Brand</a>
          <nav class="nav pull-xs-left d-flex">
            <a class="nav-item nav-link" href="#">Dashboard</a>
            <a class="nav-item nav-link" href="#">Settings</a>
            <a class="nav-item nav-link" href="#">Profile</a>
            <a class="nav-item nav-link" href="#">Help</a>
          </nav>
          <form class="form-inline pull-xs-right">
              <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">
              <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">
              <a class="btn btn-primary" href="#"><i class="fa fa-sign-in fa-lg fa-fw"></i>Login</a>
          </form>
      </nav>
