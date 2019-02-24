$(document).ready(function() {

  $("#iz").on("click", function() {
    $("#banner").attr("src", "assets/img/banner_2.jpg");
  });

  $("#der").on("click", function() {
    $("#banner").attr("src", "assets/img/banner_1.jpg");
  });

  $(".featured").attr("src", "assets/img/festicrin_1.jpg")

  $(".thumb").on("click", function() {
    source = $(this).attr("src");
    $(".featured").attr("src", source);
  })
})


/*Reproductor*/

$(
  function(){
  var aud = $('audio')[0];
  $('.play-pause').on('click', function(){
  if (aud.paused) {
    aud.play();
    $('.play-pause').removeClass('icon-play');
    $('.play-pause').addClass('icon-stop');
  }
  else {
    aud.pause();
    $('.play-pause').removeClass('icon-stop');
    $('.play-pause').addClass('icon-play');
  }

})
  $('.next').on('click', function(){
  aud.src = 'another audio source';
})
  aud.ontimeupdate = function(){
    $('.progress').css('width', aud.currentTime / aud.duration * 100 + '%')
  }
})
