
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register page</title>
  <link href="../vendor/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div id="register">
          <nav class="navbar navbar-expand-md navbar-light bg-danger">
              <div class="container">
                  <a class="navbar-brand text-light" href="login.php">
                  Register Page
                  </a>
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
                      </li>
                      </ul>
                  </div>
              </div>
          </nav>
          <main class="py-4">
        <div class="container" style="margin-top: 10%;">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header bg-danger text-light">Register</div>
                  <div class="card-body">
                      <form method="GET" action="register.php">
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control " name="name" value="" required autocomplete="name" autofocus>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">
                              </div>
                          </div>
                          <div class="form-group row mb-0">
                              <div class="col-md-6 text-right">
                                  <button type="submit" class="btn btn-danger" name="register">
                                  Register
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
