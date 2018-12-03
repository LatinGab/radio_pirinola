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
