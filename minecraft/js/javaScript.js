$(document).ready(function(){
  $("#login").hide();
  $("button[name='register-option']").css('color', '#FF7E64');
  $("button[name='login-option']").click(function(){
      $("#register").fadeOut();
      $("#login").delay(500).fadeIn();
      $("button[name='login-option']").html('<u>Log</u>in');
      $("button[name='register-option']").html('Register');
      $("button[name='login-option']").css('color', '#FF7E64');
      $("button[name='register-option']").css('color', 'rgba(255, 255, 255, 0.75)');
  });
  $("button[name='register-option']").click(function(){
      $("#login").fadeOut();
      $("#register").delay(500).fadeIn();
      $("button[name='login-option']").html('Login');
      $("button[name='register-option']").html('<u>Regis</u>ter');
      $("button[name='login-option']").css('color', 'rgba(255,255,255,0.75)');
      $("button[name='register-option']").css('color', '#FF7E64');
  });
});

$(document).ready(function () {
    $('div.notif').slideDown().delay(1750).fadeOut();
});


//based on a pen by @robinselmer
var url = "https://api.minetools.eu/ping/play.cubedpotato.com/25565";
//https://mcapi.us/server/status?ip=666.fluctis.com&port=25757
$.getJSON(url, function(r) {
    //data is the JSON string
 if(r.error){
    $('#rest').html('Server Offline');
   return false;
 }
var pl = '';
 if(r.players.sample.length > 0 ){ pl = '<br>OP: '+r.players.sample[0].name;  }
  $('#rest').html(r.description.replace(/§(.+?)/gi, '')+'<br>'+r.players.online+' <b>PLAYING NOW</b> ');
 $('#favicon').attr('src', r.favicon);

});

function fadeInPage() {
      if (!window.AnimationEvent) { return; }
      var fader = document.getElementById('fader');
      fader.classList.add('fade-out');
}

document.addEventListener('DOMContentLoaded', function() {
      if (!window.AnimationEvent) { return; }
      var anchors = document.getElementsByTagName('a');

   for (var idx=0; idx<anchors.length; idx+=1) {
     if (anchors[idx].hostname !== window.location.hostname) {
            continue;
        }
        anchors[idx].addEventListener('click', function(event) {
           var fader = document.getElementById('fader'),
               anchor = event.currentTarget;

           var listener = function() {
               window.location = anchor.href;
               fader.removeEventListener('animationend', listener);
           };
           fader.addEventListener('animationend', listener);

           event.preventDefault();
           fader.classList.add('fade-in');
      });
  }
});




var userName = '<?php echo json_encode($navName); ?>';
var count = 0;

function slideDownProfile() {
  if (count%2==0 || count == 0){

     $('div.login').css('opacity', 0);
     $('div.login').slideDown('medium');
     $('div.login').animate(
       { opacity: 1 },
       { queue: false, duration: 'slow'}
     );
     $('button.login-button').html("<i>" + userName + "</i> &#11206;");
     count++;
  }else if(!count%2==0){
       $('div.login').css('opacity', 1)
       $('div.login').slideUp('medium');
       $('div.login').animate(
         { opacity: 0 },
         { queue: false, duration: 'slow'}
       );
       $('button.login-button').html("<i>" + userName + "</i> &#11205;");
       count++;
    }else{
      count++;
    }
}

function slideDownLogin() {
  if (count%2==0){
     $('div.login').css('opacity', 0);
     $('div.login').slideDown('medium');
     $('div.login').animate(
       { opacity: 1 },
       { queue: false, duration: 'slow'}
     );
     $('button.login-button').html('<i>Login/Register</i> &#11206;');
  }else{
       $('div.login').css('opacity', 1)
       $('div.login').slideUp('medium');
       $('div.login').animate(
         { opacity: 0 },
         { queue: false, duration: 'slow'}
       );
       $('button.login-button').html('<i>Login/Register</i> &#11205;');
    }

  count++;
}
