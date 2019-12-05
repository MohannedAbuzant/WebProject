<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <title>CloudX</title>
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
</head>
<body class="mainP" style="background: #343434 !important;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
<a class="navbar-brand" href="/">Cloud<span class="X">X</span></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse " id="navbarNav">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item active rounded-pill">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(curre nt)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="ArtistsPlusjson.php">Artists</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/pricing.php">Pricing</a>
    </li>
  </ul>
  <ul id="change" class="navbar-nav ml-auto" >

    <li class="nav-item">
			<img src="https://img.icons8.com/ios-glyphs/40/000000/person-male.png">
		</li>

		<span class="navbar-text">
    	<?php echo $_SESSION["user"]; ?>
  	</span>
	</ul>
</div>
</nav>
 <div class="d-flex flex-column">
   <div class="rel">
      <div class="container" id="cont">
        <div class="content">
          <h2 class="frame-5">
            <span id="CloudcolorWhite">Cloud</span><span id="XcolorRed">X</span>
            <br>
						<br>
            <span>  <button type="button" name="button" onclick="to_musicPlayer()" class="btn btn-primary rounded-pill btn-lg" id="pM">Go to music Player</button></span>

          </h2>

        </div>
      </div>
</div>

<div class="banner">
</div>
</div>
<script type="text/javascript">
	function to_musicPlayer(){
		window.location.href = 'http://localhost/musicPlayer.php';
	}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
<script src="lib/typed.js"></script>
<script src="https://requirejs.org/docs/release/2.3.6/minified/require.js"></script>
<!-- <script type="text/javascript" src="main.js"></script> -->
</body>


</html>
