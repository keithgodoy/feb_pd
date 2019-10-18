<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resource/php/function/loginCode.php';
session_start();
if(isset($_GET['login'])){
  $edit = new loginCode($_GET['username'],$_GET['password']);
  $edit->login();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login page</title>
  <link href="../vendor/css/bootstrap.min.css" rel="stylesheet">
  <link href="/feb_pd/resource/css/login.css" type="text/css" rel="stylesheet">
</head>
<body>
  <div id="login">
          <nav class="navbar navbar-expand-md navbar-light text-light bg-danger" >

              <div class="container">
                <h4 class="text-light" href="login.php">Login Page</h4>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCont" aria-controls="navbarCont" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarCont">
                      <ul class="navbar-nav mr-auto">
                      </ul>
                      <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                      <a class="nav-link text-light" href="login.php">Login</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link text-light" href="register.php">Register</a>
                      </ul>
                  </div>
              </div>
          </nav>
          <main class="py-4">
              <div class="container" style="margin-top: 10%;">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header bg-danger text-light">Login</div>
                  <div class="card-body">
                      <form method="GET" action="">
                          <div class="form-group row">
                              <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                              <div class="col-md-6">
                                  <input id="username" type="username" class="form-control " name="username" value="" required autocomplete="username" autofocus>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control " name="password" required autocomplete="password">
                              </div>
                          </div>
                          <div class="form-group row mb-0">
                              <div class="col-md-8 text-center ml-5">
                                  <button type="submit" class="btn btn-danger" name="login">
                                      Login
                                  </button>
                            </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../vendor/js/bootstrap.min.js"></script>
</html>
