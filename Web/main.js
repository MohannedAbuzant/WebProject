function updatek(l){
  return k=l;
}
function isletter(letter){
  if(letter>='A' && letter<='Z'){
    return true;
  }
  else if (letter>='a' && letter<='z') {
    return true
  }
  else return false;
}
function isSymbol(sym){
  if(sym>='A' && sym<='Z'){
    return false;
  }
  else if (sym>='a' && sym<='z') {
    return false
  }
  if(sym>='A' && sym<='Z'){
    return false;
  }
  if(sym>=0 && sym<=9){
    return false;
  }
  else return true;

}
if (window.location.pathname == "/ArtistsPlusjson.html") {
  document.getElementById("Login").onclick = function() {
    window.location.href = "http://localhost/login.php";
  };
  document.getElementById("SignUp").onclick = function() {
    window.location.href = "http://localhost/newaccount.php";
  }
}
if (window.location.pathname == "/" ) {
  document.getElementById("Login").onclick = function() {
    window.location.href = "http://localhost/login.php";
  };
  document.getElementById("SignUp").onclick = function() {
    window.location.href = "http://localhost/newaccount.php";
  };
  // var typed = new Typed('#typed', {
  //   stringsElement: '#typed-strings',
  //   typeSpeed: 20
  // });
  $('#pM').click(()=>{
    window.location.href="/musicplayer.html";
  });
}


if (window.location.pathname == "/Artist.html") {
  document.getElementById("Login").onclick = function() {
    window.location.href = "http://localhost/login.php";
  };
  document.getElementById("SignUp").onclick = function() {
    window.location.href = "http://localhost/newaccount.php";
  };
  document.getElementById("a").onclick = ()=> {
    window.location.href = "https://www.google.com";
  }

}

if (window.location.pathname == "/newaccount.html" ) {

    let passfield = document.getElementById('password');
  passfield.onkeyup = () => {
    for (let i = 0; i < passfield.value.length; i++) {
      let c = passfield.value.charAt(i);
      if (!isNaN(c)) {
        document.getElementById('num').setAttribute("stroke", "#ff0000  ");
          document.getElementById('num').style.animation = "myframe 1s";
      }
      else if (isletter(c)) {
        document.getElementById('alpha').setAttribute("stroke","#ffea00");
        document.getElementById('alpha').style.animation="myframe 1s";

      }
      else if (isSymbol(c)) {
        document.getElementById('dolla').setAttribute("stroke","#40a70e");
        document.getElementById('dolla').style.animation="myframe 1s";

      }
    }
  }
}
function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
};

if(window.location.pathname=="/pricing.html"){
  document.getElementById("Login").onclick = function() {
    window.location.href = "http://localhost/login.php";
  };
  document.getElementById("SignUp").onclick = function() {
    window.location.href = "http://localhost/newaccount.php";
  };
  $('#payment').click(()=>{
    window.location.href="credit.html";
  })
}
if(window.location.pathname=="/credit.html"){
  document.addEventListener('DOMContentLoaded', () => {
    const Credit = new Cleave('#cardNum', {
        creditCard: true,
        onCreditCardTypeChanged:function(type){
          //visa starts with 4
          if(type=='visa'){
            $('#logo').attr('src','icons/icons8-visa.svg');
            $('#logo').attr('alt','Visalogo');
          }
          // mastercard starts with 51
          if(type=='mastercard'){
              $('#logo').attr('src','icons/icons8-mastercard.svg');
              $('#logo').attr('alt','masterCardlogo');
          }
          //American Express stars with 34
          if(type=='amex'){
            $('#logo').attr('src','icons/icons8-american-express.svg');
            $('#logo').attr('alt','Amexlogo');
          }

        if(type =='discover'){
          $('#logo').attr('src','icons/icons8-discover.svg');
          $('#logo').attr('alt','discoverlogo');
        }
}
    });
    const date = new Cleave('.Da', {
        date: true,
        datePattern: ['m', 'y']
    });

});

  $('#cardNum').focus(()=>{

    $('#digit').css("border","solid black 1px");


  })
  $('#cardNum').blur(()=>{
    $('#digit').css("border","0");
  });
  $('#cardNum').keyup(()=>{
    if($('#cardNum').val()==""){
      $('#logo').attr('src','');
      $('#logo').attr('alt','');
    }
    $('#digit').text($('#cardNum').val());
  })
    $('#cvi').focus(()=>{
      $('#CV').css("border","solid black 1px");
      $('.inner').css("transform","rotateY(180deg)");

    })
    $('#cvi').blur(()=>{
      $('.inner').css("transform","rotateY(0deg)");
      $('#CV').css("border","0");

    })
    $('#dat').focus(()=>{

      $('#date').css("border","solid black 1px");


    })
    $('#dat').blur(()=>{

      $('#date').css("border","0");

    })
    $('#dat').keyup(()=>{

      $('#date').text($('#dat').val());

    })

   $('#cvi').keyup(()=>{
       $('#CV').text($('#cvi').val());
   })
  $('#cvi').keyup(()=>{
    $('#cv').text($('#cvi').val());
  })
  $('#cardholder').focus(()=>{
    $('#Name').css("border","solid black 1px");

  })
  $('#cardholder').blur(()=>{
    $('#Name').css("border","0");


  })
  $('#cardholder').keyup(()=>{
    $('#Name').text($("#cardholder").val());
  })
}
if (window.location.pathname == "/musicPlayer.html") {

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
  });

}
