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
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.9.1/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <title>Artist page</title>
</head>

<body class="aaa-b">

  <div class="container">
    <div class="ml-2 d-flex flex-row justify-content-center ">

      <!-- <p class="Artist-name text-align" id="AN">Alan<img src="artist/alan.jpg" alt="Alan Walker" class="rounded-circle float-middle"> Walker</p> -->
      <div class="" id="name_pic">
        <p class="Artist-name text-align" id="AN">Alan<img id="pic" src="artist/alan.jpg" alt="Alan Walker" class="rounded-circle float-middle"> Walker</p>
      </div>
    </div>
  </div>
  <div class="container mt-5 songs-con p-5 rounded">
<div class="card-deck ">
  <div class="card">  <!-- card start // Last updated -->
    <div class="card-body exp">
      <!-- <h5 class="card-title" id="card-title">Last updated</h5> -->
<div id="last-updated">


      <div class="card mb-3" style="max-width: 250px;">      <!-- first song start -->
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="songimg/faded.png" class="card-img">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h6 class="card-title">Faded</h6>
      </div>
    </div>
  </div>
</div><!-- first song end -->

<div class="card mb-3" style="max-width: 250px;">      <!-- second song start -->
<div class="row no-gutters">
<div class="col-md-4">
<img src="songimg/faded.png" class="card-img">
</div>
<div class="col-md-8">
<div class="card-body">
  <h6 class="card-title">sing me to sleep</h6>
  <!-- <p class="card-text">This is</p> -->
  <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
</div>
</div>
</div>
</div><!-- second song end -->

<div class="card mb-3" style="max-width: 250px;">      <!-- third song start -->
<div class="row no-gutters">
<div class="col-md-4">
<img src="songimg/faded.png" class="card-img">
</div>
<div class="col-md-8">
<div class="card-body">
  <h6 class="card-title">Alone</h6>
  <!-- <p class="card-text">This is</p> -->
  <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
</div>
</div>
</div>
</div><!-- third song end -->


<div class="card mb-3" style="max-width: 250px;">      <!-- third song start -->
<div class="row no-gutters">
<div class="col-md-4">
<img src="songimg/faded.png" class="card-img">
</div>
<div class="col-md-8">
<div class="card-body">
  <h6 class="card-title">Alone</h6>
  <!-- <p class="card-text">This is</p> -->
  <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
</div>
</div>
</div>
</div><!-- third song end -->


      <p class="card-text"><small class="text-muted">See more</small></p>
    </div>
    </div>
  </div><!-- card end // Last updated-->
  <!-- <div class="card">
    <div class="card-body">
      <h5 class="card-title" id="card-title">Most played</h5>
      <div class="card mb-3" style="max-width: 250px;">
  <div class="row no-gutters">
    <div class="col-md-4">
        <img src="songimg/faded.png" class="card-img">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h6 class="card-title">Faded</h6>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-width: 250px;">
<div class="row no-gutters">
<div class="col-md-4">
<img src="songimg/faded.png" class="card-img">
</div>
<div class="col-md-8">
<div class="card-body">
  <h6 class="card-title">sing me to sleep</h6>

</div>
</div>
</div>
</div>

<div class="card mb-3" style="max-width: 250px;">
<div class="row no-gutters">
<div class="col-md-4">
<img src="songimg/faded.png" class="card-img">
</div>
<div class="col-md-8">
<div class="card-body">
  <h6 class="card-title">Alone</h6>
</div>
</div>
</div>
</div>
      <p class="card-text"><small class="text-muted">See more</small></p>
    </div>
  </div> -->


  <div class="card">
    <div class="card-body" id="Albums">
      <h5 class="card-title" id="card-title">Albums</h5>
      <div class="card mb-3" style="max-width: 250px;">
      <div class="row no-gutters">
      <div class="col-md-4">
      <img src="songimg/faded.png" class="card-img">
      </div>
      <div class="col-md-8">
      <div class="card-body">
        <h6 class="card-title">Faded</h6>
      </div>
      </div>
      </div>
      </div>

      <div class="card mb-3" style="max-width: 250px;">
      <div class="row no-gutters">
      <div class="col-md-4">
      <img src="songimg/faded.png" class="card-img">
      </div>
      <div class="col-md-8">
      <div class="card-body">
      <h6 class="card-title">Different world</h6>
      </div>
      </div>
      </div>
      </div>

      <div class="card mb-3" style="max-width: 250px;">
      <div class="row no-gutters">
      <div class="col-md-4">
      <img src="songimg/faded.png" class="card-img">
      </div>
      <div class="col-md-8">
      <div class="card-body">
      <h6 class="card-title">on may way</h6>
      </div>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
  </div>
  <div class="middle">
    <ul id="list">
      <li>
        <a class="btn" id="fancy" href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li>
        <a class="btn" id="fancy" href="#">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li>
        <a class="btn" id="fancy" href="#">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
      <li>
        <a class="btn" id="fancy" href="#">
          <i class="fab fa-youtube"></i>
        </a>
      </li>
      <li>
        <a class="btn" id="fancy" href="#">
          <i class="fab fa-google"></i>
        </a>
      </li>
    </ul>
    </div>
</body>
<script type="text/javascript">
  var urlParams = new URLSearchParams(window.location.search);
  var k = Number(urlParams.get('id'));
  var kk = Number(k);
  var xhttp = new XMLHttpRequest();
  var Artist_name ;
  var Album_name ;
  var Song_name ;
  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var response = JSON.parse(xhttp.responseText);
        var Artists = response.Artists;
        for(var i = 0; i < Artists.length ; i++){
          if(i==urlParams.get('id')){
            var output ='';
            output +='<p class="Artist-name text-align" id="AN">';
            output +=Artists[i].firstname;
            output +='<img id="pic" src=" ';
            output += Artists[i].imgPath;
            output +='"alt="Alan Walker" class="rounded-circle float-middle">';
            output += Artists[i].lastname;
            output += '</p>';
            document.getElementById('name_pic').innerHTML =output;
            document.title=Artists[i].name;
            var album ='';
            album +='<h5 class="card-title" id="card-title">Albums</h5>';
            for(let k=0 ; k<Artists[i].Albums.length ; k++){
              album +='<div class="card mb-3" style="max-width: 400px;font-size: 30px   ;">';
              album +='<div class="row no-gutters">';
              album +='<div class="col-md-4">';
              album +='<img src="';
              album += Artists[i].Albums[k].Location;
              album +='"class="card-img">';
              album +='</div>';
              album +='<div class="col-md-8">';
              album +='<div class="card-body">';
              album +='<h6 class="card-title pleaseeee">';
              album += Artists[i].Albums[k].name;
              album +='</h6></div></div></div></div>';
            }//for
            document.getElementById('Albums').innerHTML=album;
            var song = '';
            song +='<h5 class="card-title" id="card-title">Lastest Songs</h5>';
            for(let k=0 ; k<Artists[i].Albums.length ; k++){
              for (var j = 0 ; j < Artists[i].Albums[k].Albumsong.length ; j++) {
                Artist_name = Artists[i].name;
                Album_name = Artists[i].Albums[k].name;
                Song_name = Artists[i].Albums[k].Albumsong[j].song;
                var all = Artist_name.concat('/',Album_name,'/',Song_name);
                song +='<div id="'+all+'" class="card mb-3 " style="max-width: 400px;" onclick="go_to_song(this)">';
                song +='<div class="row no-gutters">';
                song +='<div class="col-md-4">';
                song +='<img src="';
                song += Artists[i].Albums[k].Location;
                song +='"class="card-img">';
                song +='</div>';
                song +='<div class="col-md-8">';
                song +='<div class="card-body">';
                song +='<h6 class="card-title pleaseeee">';
                song += Artists[i].Albums[k].Albumsong[j].song;
                song +='</h6></div></div></div></div>';
              }
              document.getElementById('last-updated').innerHTML=song;
            }//for
          }//if
        }//for
      }//if
  };

  xhttp.open("GET", "Artists.json", true);
  xhttp.send();
  function go_to_song(element){
    var id = element.id;
    // url="/musicPlayer.html?ArtistName="+Artist_name+"/AlbumName="+Album_name+"/SongName="+Song_name;
    url="/musicPlayer.php?id="+id;
    k=decodeURI(url);
    window.location.href = k;
  }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
<script src="lib/typed.js"></script>
<script type="text/javascript" src="main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.9.1/js/OverlayScrollbars.min.js"></script>

</html>