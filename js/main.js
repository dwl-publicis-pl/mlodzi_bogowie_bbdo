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
 * kalkulator 1 s
 */
var monthlySavingsCalculator = (function() {
    var calcForm = '#mscCalc';
    var $calcElem = $(calcForm);

    var init = function() {
        if ($calcElem.length > 0) {
            console.log('x');
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
 