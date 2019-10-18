<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link href="../vendor/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>
<header>
        <nav class="navbar navbar-expand-sm navbar-light">
          <div class="container">
              <a class="navbar-brand" href="#"><IMG SRC="../resource/img/logo2.png" ALT="Logo" WIDTH=60 HEIGHT=60></a>
              <button class="navbar-toggler bg-white" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link text-dark" href="index.html">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-dark" href="#">About</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" data-toggle="dropdown">Products</a>
                        <div class="dropdown-menu">
                          <a href="#" class="dropdown-item">OMEN by HP - 15-ce199nr</a>
                          <a href="#" class="dropdown-item">OMEN by HP - 15-dc0052nr</a>
                          <a href="#" class="dropdown-item">OMEN by HP - 17-an188nr</a>
                        </div>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-dark" href="#">Services</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-dark" href="#">Contact</a>
                      </li>
                  </ul>
                </div>
              </div>
        </nav>
</header>
<div class="row justify-content-center">

              <div class="card col-md-7">
                  <div class="card-header">Home Page</div>
                  <div class="card-body">
                      <p>
                        You are now logged in.
                      </p>
                      <form method="GET">
                      <div class="form-group row mb-0">
                      </div>
                    </form>
                  </div>
              </div>
      </div>
  </br>
<body>


  <!-- CAROUSEL -->
  <section id="showcase">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner"  >
        <div class="carousel-item carousel-image-1 active">
          <img class="d-block img-fluid" src="../resource/img/pic1.jpg" alt="First Slide">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-5" style="margin-right: -25px;">SLEEK DESIGN</h1>
              <p class="lead mr-3">
                Made to perfection
              </p>
              <a href="#" class="btn btn-danger btn-lg mr-4">Check It Out</a>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-2">
          <img class="d-block img-fluid" src="../resource/img/pic3.jpg" alt="Second Slide">
        </div>

        <div class="carousel-item carousel-image-3">
          <img class="d-block img-fluid" src="../resource/img/pic2.jpg" alt="Third Slide">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-left mb-5">
              <h1 class="display-5">ULTRA DURABLE</h1>
              <p class="lead" style="margin-left: -24px;">
                Premium Build Quality Just Made For You
              </p>
              <a href="#" class="btn btn-success btn-lg" style="margin-left: 86px;">Learn More</a>
            </div>
          </div>
        </div>
      </div>

      <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
      </a>

      <a href="#myCarousel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>

      <section class="section-2" style="background-color: #000;">
        <div class="container py-5">
          <div class="row">
            <div class="col-md-5 justify-content-center">
              <img src="../resource/img/laptop1.png" ALT="img" class="image" WIDTH=440 HEIGHT=340>
            
            </div>
            <div class="col-md-6 text-center">
              <h2 class="display-4 pt-5 my-4 text-white">
                Keep Reinventing
              </h2>
              <p class="para-1 pb-3 text-white">Combat Feels Closer Than Ever <a href="#"> It's A Whole Different World</a>. Experience The Real Battle Within Your Hands, Preparing Technology For Tomorrow.</p>
            </div>
          </div>
        </div>
      </section>





        </div>
      </section>

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
});
</script>

<script>
  $('.carousel').carousel({
    interval:3700,
    keyboard: true,
    pause:'hover',
    wrap:true
  });

  $('#slider1').on('slide.bs.carousel', function(){
    console.log('slide');
  });
  $('#slider1').on('slid.bs.carousel', function(){
    console.log('slide');
  });
</script>
