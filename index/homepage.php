<?php
session_start();
$username = $_SESSION['username'];
if(isset($username))
{

}else{
  header("Location: login.php");
}
?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resource/php/function/logoutCode.php';
$logout = new logoutCode;
$logout->logout();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link href="../vendor/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div id="reset">
          <nav class="navbar navbar-expand-md navbar-light bg-white">
              <div class="container">
                  <a class="navbar-brand">
                  Laravel
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCont" aria-controls="navbarCont" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarCont">
                      <ul class="navbar-nav mr-auto">
                      </ul>
                      <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                      <a class="nav-link">
                      </a>
                      </li>
                      </ul>
                  </div>
              </div>
          </nav>
          <main class="py-4">
              <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Home Page</div>
                  <div class="card-body">
                      <p>
                        You are now logged in.
                      </p>
                      <form method="GET">
                      <div class="form-group row mb-0">
                          <div class="col-md-6">
                            <button class="btn btn-primary" name="logout">Log out</button>
                            <a class="btn btn-primary" href="edit.php">Change Password</a>
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
