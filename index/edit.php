<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resource/php/function/updateCode.php';
if(isset($_GET['update'])){
  $edit = new updateCode($_GET['oldpassword'],$_GET['newpassword']);
  $edit->update();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update page</title>
  <link href="../vendor/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar">
    <a href="homepage.php" class="stretched-link mr-5">Go Back</a>
  </nav>
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-8">
  <div class="card">
  <div class="card-body">
    <form method="GET" action =""class="pb-3 pt-1">
      <div class="form-group">
      <label for="companyInput">Old Password</label>
      <input class="form-control" id="password" placeholder="Old Password" name="oldpassword" required autocomplete="username">
      </div>
      <div class="form-group">
      <label for="contactLas">New Password</label>
      <input class="form-control" id="password" placeholder="New Password" name="newpassword" required autocomplete="username">
      </div>
      <button type="submit" class="btn btn-primary col" name="update">Update</button>
    </form>
  </div>
  </div>
  </div>
  </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../vendor/js/bootstrap.min.js"></script>
</html>
