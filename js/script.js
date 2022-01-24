$(document).ready(function () {
  $("#menu").click(function () {
    $(this).toggleClass('fa-bars');
    $(this).toggleClass('fa-times');

    $(".navbar").toggleClass('nav-toggle');
  });
  $(".portfolio .button-container .btn").click(function () {
    let filter = $(this).attr("data-filter");
    if (filter == "all") {
      $(".portfolio .image-container .box").show('400')
    } else {
      $(".portfolio .image-container .box").not('.' + filter).hide('200');
      $(".portfolio .image-container .box").filter('.' + filter).show('400');
    }
  });
  $("#theme-toggle").click(function () {
    $(this).toggleClass('fa-moon');
    $(this).toggleClass('fa-sun');
    $("body").toggleClass("dark-theme");
    $("#dark-lay").toggleClass("dark-lay");
  });

  //smooth scroling

  $('a[href*="#"]').on('click', function (e) {

    e.preventDefault();

    $('html, body').animate({

      scrollTop: $($(this).attr('href')).offset().top,

    },
      500,
      'linear'
    );

  });

  $(window).on('scroll load', function () {
    $('#menu').addClass("fa-bars");
    $('#menu').removeClass('fa-times');
    $('.navbar').removeClass('nav-toggle');
  });

});