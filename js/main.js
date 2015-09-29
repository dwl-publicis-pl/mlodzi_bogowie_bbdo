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

    var initBeersSlider = function() {
        $sliderElem.cycle();

        return true;
    };

    var destroyBeersSlider = function() {
        $sliderElem.cycle('destroy');

        return true;
    };

    var manageBreakPointEvents = function() {
        $(window).bind('enterBreakpoint992', function() { // >= 992
            destroyBeersSlider();
        });

        $(window).bind('exitBreakpoint992', function() { // < 992
            initBeersSlider();
        });

        // init slider if starting window is < 992
        if (window.innerWidth < 992) {
            initBeersSlider();
        }

        return true;
    };

    return {
        init: init
    };
})();
/**
 * kalkulator 1 END
 */
 