// MODAL JS

// Get the modal
var modal_0 = document.getElementById('Modal_0');
var modal_1 = document.getElementById('Modal_1');
var modal_2 = document.getElementById('Modal_2');

// Get the button that opens the modal
var btn_0 = document.getElementById("Btn_0");
var btn_1 = document.getElementById("Btn_1");
var btn_2 = document.getElementById("Btn_2");

// Get the <span> element that closes the modal
var span_0 = document.getElementsByClassName("close_0")[0];
var span_1 = document.getElementsByClassName("close_1")[0];
var span_2 = document.getElementsByClassName("close_2")[0];

// When the user clicks on the button, open the modal 
btn_0.onclick = function() {
  modal_0.style.display = "block";
}

btn_1.onclick = function() {
  modal_1.style.display = "block";
}

btn_2.onclick = function() {
  modal_2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span_0.onclick = function() {
  Modal_0.style.display = "none";
}

span_1.onclick = function() {
  Modal_1.style.display = "none";
}

span_2.onclick = function() {
  Modal_2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal_0 || event.target == modal_1 || event.target == modal_2) {
    modal_0.style.display = "none";
    modal_1.style.display = "none";
    modal_2.style.display = "none";
  }
}

//EFEITO NAVBAR
jQuery(document).ready(function ($) {

  //EFEITO DE FADE DAS PAGINAS
  $("#inicio"  ).fadeIn(1000).delay(3000);
  $("#quemSomos"  ).fadeIn(1000).delay(3000);
  $("#tratamentos" ).fadeIn(1000).delay(3000);

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


  // $( "div" ).children( ".selected" ).css( "color", "blue" );
  $( ".perfil-med" ).hide();
  $(".medico").mouseover(function(){
     // $(this).css("background-color", "yellow");
     $( this ).children( ".foto-med" ).hide();
     $( this ).children( ".perfil-med" ).show();

   });

   $(".medico").mouseout(function(){
     // $(this).css("background-color", "lightgray");
     $( this ).children( ".perfil-med" ).hide();
     $( this ).children( ".foto-med" ).show();



   });

});




//GALERIA DE FOTOS
let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });
