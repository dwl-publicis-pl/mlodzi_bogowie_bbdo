$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
    });
});

/**
 * kalkulator 1
 */
var ourBeersSlider = (function() {
    var sliderElemClass = '.nasze-piwa-tabs';
    var $sliderElem = $(sliderElemClass);

    var init = function() {
        if ($sliderElem.length > 0) {
            manageBreakPointEvents();
        }

        return true;
    };

    var manageBreakPointEvents = function() {


        return true;
    };

    return {
        init: init
    };
})();
/**
 * kalkulator 1 END
 */
 