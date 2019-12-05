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
  <link href="https://fonts.googleapis.com/css?family=Lalezar&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <title>Artists</title>
</head class="body">

<body class="artistbody">
  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 ">
    <a class="navbar-brand" href="#">Cloud<span class="X">X</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="/">Home <span class="sr-only">(curre nt)</span></a>
        </li>
        <li class="nav-item active rounded-pill">
          <a class="nav-link" href="ArtistsPlusjson.php">Artists</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pricing.php">Pricing</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
    			<img src="https://img.icons8.com/ios-glyphs/40/000000/person-male.png">
    		</li>

    		<span class="navbar-text">
        	<?php if(isset($_SESSION["user"])){
					echo $_SESSION["user"]; }?>
      	</span>
    	</ul>
    </div>
  </nav>
  <div class=" ml-2 d-flex flex-row  animated bounceInLeft mt-2" id="artists1">

  </div>
  <div class=" ml-2 d-flex flex-row  animated bounceInLeft mt-2" id="artists2">

  </div>
  <div class=" ml-2 d-flex flex-row  animated bounceInLeft mt-2" id="artists3">

  </div>
  <script type="text/javascript">
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var response = JSON.parse(xhttp.responseText);
          var Artists = response.Artists;
          var output = '';
          for(var i = 0; i < Artists.length ; i++){
            output += '<div id="'+i+'" class="card  mr-2 artist" data-custom-value="'+i+'" onclick="go_to_art(this)" style="width: 18rem;">';
            output += '<img src='+Artists[i].imgPath+' class="card-img-top .img-thumbnail">';
            output += '<div class="card-body">';
            output += '<h2>'+Artists[i].name+'</h2>';
            output += '</div>';
            output += '</div>';
            if(0<=i && i<=6){
              document.getElementById('artists1').innerHTML = output;
            }
            if(i==6){
              var output = '';
            }
            if(7<=i && i<=13){
              document.getElementById('artists2').innerHTML = output;
            }
            if(i==13){
              var output = '';
            }
            if(13<=i && i<=20){
              document.getElementById('artists3').innerHTML = output;
            }
          }
        }
    };

    xhttp.open("GET", "Artists.json", true);
    xhttp.send();
    function go_to_art(element){
      var id = element.id;
      url="/aaa.php?id="+id;
      k=decodeURI(url);
      window.location.href = k;
    }

  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script type="text/javascript" src="main.js"></script>
</body>


</html>
