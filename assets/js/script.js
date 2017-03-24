// Lazy load JQuery plugin
$(function() {
    $('#lazy-container .lazy').lazy({
        appendScroll: $('#lazy-container')
    });
});

$(function() {
    $('.lazy').lazy({
        placeholder: "../images/loading.gif",
        effect: "fadeIn",
        effectTime: 1000,
        threshold: 0
    });
});

// Panel divs: Smooth scrolling
$(function(){
  $('.panel').css({'height':($(window).height()-$('nav').height()-70)});
    // Now bind the event to the desired element
    $('.panel').on('mousewheel', function(e){
        e.preventDefault();
        if(e.originalEvent.wheelDelta < 0) {
           if (!$(this).is(':last-child'))
            //$('body').scrollTop($(this).next().offset().top);
            $('body').animate({scrollTop:($(this).next().offset().top)-($('nav').height()+40)}, '2000');
        } else {
            if (!$(this).is(':first-child'))
              $('body').animate({scrollTop:($(this).prev().offset().top)-($('nav').height()+40)},'3000');
        }
    });
  $(window).resize(function(){ // On resize
    $('.panel').css({'height':(($(window).height())-($('nav').height()-70))});
  });

  $(document).ready(function(){
    resizeDiv();
  });

  window.onresize = function(event) {
    resizeDiv();
  }

  function resizeDiv(){
    vpw = $(window).width();
    vph = $(window).height()-$('nav').height()-70;
    $('.panelContainer').css({'top': $('nav').height()+50});
    $('.panel').css({'height': vph});
  }
});