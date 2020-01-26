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
     $('button.login-button').html("<i> Profile </i> &#11206;");
  }else{
       $('div.login').css('opacity', 1)
       $('div.login').slideUp('medium');
       $('div.login').animate(
         { opacity: 0 },
         { queue: false, duration: 'slow'}
       );
       $('button.login-button').html("<i> Profile </i> &#11205;");
    }
  count++;
}

function slideDownLogin() {
  if (count%2==0){
     $('div.login').css('opacity', 0);
     $('div.login').slideDown('medium');
     $('div.login').animate(
       { opacity: 1 },
       { queue: false, duration: 'slow'}
     );
     $('button.login-button').html('<i>Login</i> &#11206;');
  }else{
       $('div.login').css('opacity', 1)
       $('div.login').slideUp('medium');
       $('div.login').animate(
         { opacity: 0 },
         { queue: false, duration: 'slow'}
       );
       $('button.login-button').html('<i>Login</i> &#11205;');
    }
  count++;
}
