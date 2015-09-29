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
var monthlySavingsCalculator = (function() {
    var calcForm = '#mscCalc';
    var $calcElem = $(calcForm);
    var retirementLength = 20,
        savings = 1500,
        startSaveUp = 20,
        monthlySaveUp = 0;

    var init = function() {
        if ($calcElem.length > 0) {
            initListeners();
        }

        return true;
    };
    
    var initListeners = function() {
        var retirementLengthValue = $('input[name="retirementLength"]');
        /*var range = $('.input-range'),
            value = $('.range-value');
            
        value.html(range.attr('value'));
        
        range.on('input', function(){
            value.html(this.value);
        });*/ 
    };

    return {
        init: init
    };
})();
/**
 * kalkulator 1 END
 */
 