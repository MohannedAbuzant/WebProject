<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
  <title>CloudX</title>
</head>

<body class="playa">


  <nav class="navbar navbar-expand-lg navbar-light bg-light " id="musicpl">
    <a class="navbar-brand" href="#">Cloud<span class="X">X</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ml-auto mr-auto">
        <form class="form-inline" action="index.html" method="post">

          <label for="search" class="mr-4"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="11" cy="11" r="8"></circle>
              <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg></label>
          <input type="search" name="search" class="form-control search mr-5">
        </form>
      </ul>
    </div>
  </nav>
  <nav class="navbar fixed-bottom navbar-expand-lg navbar-light bg-light " id="player">

    <div class="d-flex flex-row">

      <audio id="mysong"></audio>
      <ul class="navbar-nav mt-lg-0">
        <li class="nav-item">
          <img class="album" src="artist/adele.jpg" id="album-cover" alt="">
        </li>
        <li class="nav-item ml-2">
          <div class=" d-flex flex-column">
            <div>
              <p class="song-info" id="songName">Hello!</p>
            </div>
            <div>
              <p class="song-info" id="artistName">Adele</p>
            </div>
            <div>
              <p class="song-info" id="Album">Album</p>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav  ml-auto  mr-auto ">
      <div class="d-flex flex-column">
        <div class="progress">

        </div>
        <div class="d-flex flex-row">


          <li class="nav-item">

            <a class="nav-link" id="prev"><img src="https://img.icons8.com/ios-filled/50/26e07f/rewind-button-round.png"></a>
          </li>
          <li class="nav-item">

            <a class="nav-link" id="play"><img id="play-icon" src="https://img.icons8.com/ios-filled/50/26e07f/circled-play.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="next"><img src="https://img.icons8.com/ios-filled/50/26e07f/fast-forward-round.png"></a>
          </li>
        </div>
      </div>
    </ul>
    <div class="share-button">
      <span><i class="fas fa-share-alt"></i> Share!</span>
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </div>

  </nav>

  <div class="d-flex align-items-start">
    <nav class="navbar side pt-4">
      <ul class="navbar-nav ">
        <li class="nav-item circle p-2 ">
    			<img src="https://img.icons8.com/ios-glyphs/40/000000/person-male.png">
    		</li>
        <li class="nav-item  text-center pt-2 pr-2 font-weight-bold Uname"> Hi,<?php echo $_SESSION["user"]; ?>
          <hr>
        </li>

        <li class="nav-item p-2 "><a class="nav-link sub activem " href="http://localhost/">Home</a></li>

        <li class="nav-item p-2"></li>
          </ul>
    </nav>
    <div class=" d-flex flex-column p-2">
      <div class="">
        <h3>Trending <svg id="live" xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="2"></circle>
            <path d="M16.24 7.76a6 6 0 0 1 0 8.49m-8.48-.01a6 6 0 0 1 0-8.49m11.31-2.82a10 10 0 0 1 0 14.14m-14.14 0a10 10 0 0 1 0-14.14"></path>
          </svg>
          <hr>
        </h3>
      </div>
      <div class="d-flex flex-column">
      <div id="first_row" class="d-flex flex-row ">
         <div class="card" >
           <img src="covers/Loseyou.jpg" class="card-img-top .img-thumbnail" alt="">
           <div class="card-body">
             <h5 class="card-title">Lose you to Love me</h5>
          <a  id="lose" class="playbt"data-custom-value="1">  <img src="https://img.icons8.com/ios-filled/50/26e07f/circled-play.png"></a>
        </div>
         </div>
         <div class="card ml-2 mr-2" >
           <img src="covers/instruction.jpg" class="card-img-top .img-thumbnail" alt="">
           <div class="card-body">
             <h5 class="card-title">instruction</h5>
             <a  id="inst" class="playbt"data-custom-value="0">  <img src="https://img.icons8.com/ios-filled/50/26e07f/circled-play.png"></a>

           </div>
         </div>
         <div class="card mr-2" >
           <img src="covers/me.png" class="card-img-top .img-thumbnail" alt="">
           <div class="card-body">
             <h5 class="card-title">ME!</h5>
             <a  id="me" class="playbt"data-custom-value="2">  <img src="https://img.icons8.com/ios-filled/50/26e07f/circled-play.png"></a>
           </div>
         </div>
         <div class="card" >
           <img src="covers/memories.webp" class="card-img-top .img-thumbnail" alt="">
           <div class="card-body">
             <h5 class="card-title">Memories</h5>
             <a  id="memories" class="playbt"data-custom-value="3">  <img src="https://img.icons8.com/ios-filled/50/26e07f/circled-play.png"></a>

           </div>
         </div>
         <div class="card ml-2" >
           <img src="covers/WR.jpg" class="card-img-top .img-thumbnail" alt="">
           <div class="card-body">
             <h5 class="card-title">Wrecking Ball</h5>
             <a  id="Wrecking" class="playbt"data-custom-value="4">  <img src="https://img.icons8.com/ios-filled/50/26e07f/circled-play.png">
             </a>
           </div>
         </div>
         <div class="card ml-2" >
           <img src="covers/Selena_Gomez_-_Look_at_Her_Now.png" class="card-img-top .img-thumbnail" alt="">
           <div class="card-body">
             <h5 class="card-title">Look At Her Now</h5>
             <a  id="LHN" class="playbt"data-custom-value="5">  <img src="https://img.icons8.com/ios-filled/50/26e07f/circled-play.png">
             </a>
           </div>
         </div>
         </div>
         <div  id="second_row" class="d-flex flex-row">


         <div class="card ml-2" >
           <img src="covers/old-town-road-remix-cover.jpg" class="card-img-top .img-thumbnail" alt="">
           <div class="card-body">
             <h5 class="card-title">Old Town Road</h5>
             <a  id="OTR" class="playbt"data-custom-value="6">  <img src="https://img.icons8.com/ios-filled/50/26e07f/circled-play.png">
             </a>
           </div>
         </div>
         <div class="card ml-2" >
           <img src="covers/Dua_Lipa_-_Don't_Start_Now.png" class="card-img-top .img-thumbnail" alt="">
           <div class="card-body">
             <h5 class="card-title">Don’t Start Now</h5>
             <a  id="DSW" class="playbt"data-custom-value="7">  <img src="https://img.icons8.com/ios-filled/50/26e07f/circled-play.png">
             </a>
           </div>
         </div>
         <div class="card ml-2" >
           <img src="covers/Shawn_Mendes_and_Camila_Cabello_-_Señorita.png" class="card-img-top .img-thumbnail" alt="">
           <div class="card-body">
             <h5 class="card-title">Señorita</h5>
             <a  id="Sen" class="playbt"data-custom-value="8">  <img src="https://img.icons8.com/ios-filled/50/26e07f/circled-play.png">
             </a>
           </div>
         </div>
         <div class="card ml-2" >
           <img src="/covers/Taylor_Swift_-_Lover.png" class="card-img-top .img-thumbnail" alt="">
           <div class="card-body">
             <h5 class="card-title">Lover</h5>
             <a  id="Lover" class="playbt"data-custom-value="9">  <img src="https://img.icons8.com/ios-filled/50/26e07f/circled-play.png">
             </a>
           </div>
         </div>
         <div class="card ml-2" >
           <img src="/covers/The_Chainsmokers_-_Call_You_Mine.png" class="card-img-top .img-thumbnail" alt="">
           <div class="card-body">
             <h5 class="card-title">Call You Mine</h5>
             <a  id="CYM" class="playbt"data-custom-value="10">  <img src="https://img.icons8.com/ios-filled/50/26e07f/circled-play.png">
             </a>
           </div>
         </div>
         <div class="card ml-2" >
           <img src="/covers/sjlt.jpg" class="card-img-top .img-thumbnail" alt="">
           <div class="card-body">
             <h5 class="card-title">Something Just Like This</h5>
             <a  id="sjlt" class="playbt"data-custom-value="11">  <img src="https://img.icons8.com/ios-filled/50/26e07f/circled-play.png">
             </a>
           </div>
         </div>
           </div>
    </div>
    </div>


  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script type="text/javascript" src="main.js"></script>
  <script>
  var urlParams = new URLSearchParams(window.location.search);
  var k = urlParams.get('id');
  let hussien;
  if(k==null){
    let i = 0;
    $.getJSON('songs.json', (songs) => {

      var count = Object.keys(songs).length;

      function playm() {
        aud.play();
        $('#songName').text(songs[i].name);
        $('#artistName').text(songs[i].ArtistName);
        $('#Album').text(songs[i].Album);
        $('#album-cover').attr('src', songs[i].songpic);
        $('#play-icon').attr('src', "https://img.icons8.com/ios-filled/50/26e07f/circled-pause.png");

      }
      $('#lose').click(() => {
        i = $('#lose').data('custom-value');
        aud = $('#mysong').attr('src', songs[i].songloc)[0];
        playm();
      });


      $('#inst').click(() => {
        i = $('#inst').data('custom-value');
        aud = $('#mysong').attr('src', songs[i].songloc)[0];
        playm();
      });

      $('#me').click(() => {
        i = $('#me').data('custom-value');
        aud = $('#mysong').attr('src', songs[i].songloc)[0];
        playm();
      });
      $('#memories').click(() => {
        i = $('#memories').data('custom-value');
        aud = $('#mysong').attr('src', songs[i].songloc)[0];
        playm();
      });

      $('#Wrecking').click(() => {
        i = $('#Wrecking').data('custom-value');
        aud = $('#mysong').attr('src', songs[i].songloc)[0];
        playm();
      });
      $('#LHN').click(() => {
        i = $('#LHN').data('custom-value');
        aud = $('#mysong').attr('src', songs[i].songloc)[0];
        playm();
      });
      $('#OTR').click(() => {
        i = $('#OTR').data('custom-value');
        aud = $('#mysong').attr('src', songs[i].songloc)[0];
        playm();
      });
      $('#DSW').click(() => {
        i = $('#DSW').data('custom-value');
        aud = $('#mysong').attr('src', songs[i].songloc)[0];
        playm();
      });
      $('#Sen').click(() => {
        i = $('#Sen').data('custom-value');
        aud = $('#mysong').attr('src', songs[i].songloc)[0];
        playm();
      });
      $('#Lover').click(() => {
        i = $('#Lover').data('custom-value');
        aud = $('#mysong').attr('src', songs[i].songloc)[0];
        playm();
      });
      $('#CYM').click(() => {
        i = $('#CYM').data('custom-value');
        aud = $('#mysong').attr('src', songs[i].songloc)[0];
        playm();
      });
      $('#sjlt').click(() => {
        i = $('#sjlt').data('custom-value');
        aud = $('#mysong').attr('src', songs[i].songloc)[0];
        playm();
      });


      aud = $('#mysong').attr('src', songs[i].songloc)[0];
      $('#play').click(() => {
        if (aud.paused) {
          playm();
        } else {
          aud.pause();
          $('#play-icon').attr('src', "https://img.icons8.com/ios-filled/50/26e07f/circled-play.png");
        }
      })
      $('#prev').click(() => {
        if (aud.currentTime > 0.99) {
          aud.currentTime = 0;
        } else {
          if (i != 0) {
            i = i - 1;
            aud = $('#mysong').attr('src', songs[i].songloc)[0];
            playm();

          }
        }
      });


      $('#next').click(() => {
        if (i < count) {
          i = i + 1;
          aud = $('#mysong').attr('src', songs[i].songloc)[0];
          playm();
        }
      });
      aud.ontimeupdate = () => {
        $('.progress').css('width', aud.currentTime / aud.duration * 100 + '%');
      }
    });  }
  else{
  var l= k.split("/");
  var  aud = $('#mysong').attr('src','');

  document.getElementById('artistName').innerHTML=l[0];
  document.getElementById('songName').innerHTML=l[2];
  document.getElementById('Album').innerHTML=l[1];
  let artistName=l[0];
  let songName=l[2];
  // console.log(k);
  var output = '';
  let visited=false;
  let songs='';

  function findsong(artistName,songName){
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var response = JSON.parse(xhttp.responseText);
        var song = response.Artists;

        for(let t=0;t<song.length;t++){

          if(artistName == song[t].name){
            console.log("yes");
            for(let j=0;j<song[t].Albums.length;j++){

              if(song[t].Albums[j].name==l[1]){

                l[3]=song[t].Albums[j].Location;
                document.getElementById('album-cover').setAttribute("src",l[3]);

                for(let k=0;k<song[t].Albums[j].Albumsong.length;k++){
                  if(!visited){
                  for (var i = 0; i < song[t].Albums[j].Albumsong.length; i++) {

                    output += '<div class="card ml-2" >';
                    output += '<img src="' ;
                    console.log(song[t].Albums[j].Location);

                    output +=  song[t].Albums[j].Location ;
                    output += '"class="card-img-top .img-thumbnail" alt="">';
                    output += '<div class="card-body">';
                    output += '<h5 class="card-title">'+song[t].Albums[j].Albumsong[i].song+'</h5>';
                    console.log(song[t].Albums[j].Albumsong[i].song);
                    songs=song[t].Albums[j].Albumsong[i].song;
                    console.log("songs="+songs);
                    output += '<a  id="sjlt" class="playbt"data-custom-value="11" onclick="playsong(this)">  <img src="https://img.icons8.com/ios-filled/50/26e07f/circled-play.png">'
                    output += '</a></div></div>';
                    }
                    visited=true;
                  }
                  document.getElementById('first_row').innerHTML = output;
                  document.getElementById('second_row').innerHTML="";
                  if(songName == song[t].Albums[j].Albumsong[k].song){
                    l[4]=song[t].Albums[j].Albumsong[k].songloc;
                    hussien=song[t].Albums[j].Albumsong[k+1].songloc;
                     aud = $('#mysong').attr('src', l[4])[0];
                     $('#play-icon').attr('src', "https://img.icons8.com/ios-filled/50/26e07f/circled-pause.png");
                    aud.play();
                    aud.ontimeupdate = () => {
                      $('.progress').css('width', aud.currentTime / aud.duration * 100 + '%');
                    }
                    break;
                  }
                }
              }
            }
          }
        }
      }
    }
  xhttp.open("GET", "Artists.json", true);
  xhttp.send();
  }
  function nextsong(artistName){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var response = JSON.parse(xhttp.responseText);
          var song = response.Artists;

          for(let t=0;t<song.length;t++){

            if(artistName  == song[t].name){
              console.log("yes");
              for(let j=0;j<song[t].Albums.length;j++){

                if(song[t].Albums[j].name==l[1]){
                 console.log("pass");
                  l[3]=song[t].Albums[j].Location;
                  document.getElementById('album-cover').setAttribute("src",l[3]);

                  for(let k=0;k<song[t].Albums[j].Albumsong.length;k++){

                    if($('#songName').text() == song[t].Albums[j].Albumsong[k].song){
                      l[4]=hussien;
                      $('#songName').text(song[t].Albums[j].Albumsong[k+1.].song);
                      aud = $('#mysong').attr('src', l[4])[0];
                      $('#play-icon').attr('src', "https://img.icons8.com/ios-filled/50/26e07f/circled-pause.png");
                      aud.play();
                      aud.ontimeupdate = () => {
                        $('.progress').css('width', aud.currentTime / aud.duration * 100 + '%');
                      }
                      break;
                    }
                  }
                }
              }
            }
          }
        }
      }
    xhttp.open("GET", "Artists.json", true);
    xhttp.send();
  }
  function prevsong(artistName){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var response = JSON.parse(xhttp.responseText);
          var song = response.Artists;

          for(let t=0;t<song.length;t++){

            if(artistName == song[t].name){

              for(let j=0;j<song[t].Albums.length;j++){

                if(song[t].Albums[j].name==l[1]){

                  l[3]=song[t].Albums[j].Location;
                  document.getElementById('album-cover').setAttribute("src",l[3]);

                  for(let k=0;k<song[t].Albums[j].Albumsong.length;k++){

                    if($('#songName').text() == song[t].Albums[j].Albumsong[k].song){

                      l[4]=song[t].Albums[j].Albumsong[k-1].songloc;
                      // alert(l[4]);
                      $('#songName').text(song[t].Albums[j].Albumsong[k-1].song);
                       aud = $('#mysong').attr('src', l[4])[0];
                       $('#play-icon').attr('src', "https://img.icons8.com/ios-filled/50/26e07f/circled-pause.png");
                      aud.play();
                      aud.ontimeupdate = () => {
                        $('.progress').css('width', aud.currentTime / aud.duration * 100 + '%');
                      }
                      break;
                    }
                  }
                }
              }
            }
          }
        }
      }
    xhttp.open("GET", "Artists.json", true);
    xhttp.send();
  }
  l[3]= findsong(artistName,songName);
  function playsong(element){

    songName=element.previousSibling.innerHTML;
    alert(songName);
    $('#songName').text(songName);
    findsong(artistName,songName);
  }

  $('#play').click(() => {
    if (aud.paused) {
      aud.play();
        $('#play-icon').attr('src', "https://img.icons8.com/ios-filled/50/26e07f/circled-pause.png");
    } else {
      aud.pause();
      $('#play-icon').attr('src', "https://img.icons8.com/ios-filled/50/26e07f/circled-play.png");
    }
  });

  $('#next').click(() => {
  nextsong(artistName);

  });
  $('#prev').click(() => {
  prevsong(artistName);

  });

}
  </script>
<br>
<br>
<br>
</body>

</html>
