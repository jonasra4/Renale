jQuery(document).ready(function ($) {

  var controlNav = false;

  $(document).scroll(function (e) {

    var scrollTop = $(document).scrollTop();

    if (scrollTop > $('.navbar').height()) {
      if (controlNav == false) {
        $('.navbar').addClass('fixed-top efeito-navbar-in');
        $('.navbar').hide();
        $('.navbar').fadeIn();
        controlNav = true;
      }
    }
    else{
      if (controlNav == true) {
        $('.navbar').removeClass('fixed-top efeito-navbar-in').addClass('efeito-navbar-out');
        controlNav = false;
      }
    }
  });



});
