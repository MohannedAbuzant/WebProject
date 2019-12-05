<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <title>Pricing!</title>
  </head>
  <body class="price">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 ">
  <a class="navbar-brand" href="#">Cloud<span class="X">X</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/">Home <span class="sr-only">(curre nt)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ArtistsPlusjson.php">Artists</a>
      </li>
      <li class="nav-item active rounded-pill">
        <a class="nav-link" href="pricing.php">Pricing</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
  			<img src="https://img.icons8.com/ios-glyphs/40/000000/person-male.png">
  		</li>

  		<span class="navbar-text">
      	<?php echo $_SESSION["user"]; ?>
    	</span>
  	</ul>
  </div>
  </nav>
<div class="container-fluid block">
<div class="row">

  <div class="colm">
    <div class="d-flex justify-content-center">
    <div class="text">
      <p>Join us At Cloud<span class="X">X</span> for Great Experince at a great price</p>
    </div>
  </div>
</div>
</div>
</div>
<div class="container-fluid block2 ">
<div class="d-flex flex-row pt-2 justify-content-center">
    <div class="card mr-2 ">
      <div class="card-body">
         <h3 class="text-center">Free</h3>
         <p class="pt-5">-All songs are available to stream</p>
         <p class="pt-5">-Limited Skips</p>
         <p class="pt-5">-Ads Between Songs</p>
        <div class="custom-control custom-radio text-center mt-5">
  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
  <label for="customRadio1" class="custom-control-label"></label>
         </div>
      </div>
    </div>
    <div class="card ml-5 mr-5">
      <div class="card-body">
         <h3 class="text-center">$5 Pack</h3>
         <p class="pt-5">-All songs are available to stream</p>
         <p class="pt-5">-Limited Skips</p>
         <p class="pt-5">-No Ads Between Songs</p>
        <div class="custom-control custom-radio text-center mt-5">
  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
  <label for="customRadio2" class="custom-control-label"></label>
  </div>
</div>
</div>
<div class="card ml-2">
  <div class="card-body">
    <h3 class="text-center">$10 Pack</h3>
    <p class="pt-5">-All songs are available to stream</p>
    <p class="pt-5">-Unlimited Skips</p>
    <p class="pt-5">-No Ads Between Songs</p>
    <div class="custom-control custom-radio text-center mt-5">
      <input type="radio" name="customRadio" id="customRadio3" class="custom-control-input">
      <label for="customRadio3" class="custom-control-label "></label>
    </div>
  </div>
</div>
</div>
<button type="button" name="Pack" class="btn btn-primary btn-block mt-2 " id="payment" onclick="to_credit()">Next</button>
  </body>
  <script type="text/javascript">
    function to_credit(){
      window.location.href ='/credit.html';
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
  <script src="lib/typed.js"></script>
  <script type="text/javascript" src="main.js"></script>
</html>