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
    var retirementAge = 67;
    var calcForm = '#mscCalc';
    var $calcElem = $(calcForm);
    var retirementLengthElement = $('select[name="retirement_length"]');
    var monthlySavingsElements = $('select[name="monthly_savings"]');
    var startSaveUpElement = $('input[name="start_save_up"]');
    var monthlySavingsElement = $('#retirement_saves_result');
    var faceImgElement = $('#retirements_saves_face');

    var retirementLengthValueElement = $('.retirement_length_value');
    var monthlySavingsValueElements = $('.monthly_savings_value');
    var startSaveUpValueElement = $('.start_save_up_value');

    var retirementLengthVal,
        monthlySavingsVal,
        startSaveUpVal,
        saveUpLength,
        monthlySaveUp = 0,
        saveUpRangeMin,
        saveUpRangeMax,
        faceElements = 7; // num of face alternatives

    var init = function() {
        if ($calcElem.length > 0) {
            initListeners();

            saveUpRangeMin = startSaveUpElement.attr('min');
            saveUpRangeMax = startSaveUpElement.attr('max');

            onRangeChange();
        }

        return true;
    };
    
    var initListeners = function() {
        $(calcForm + ' input, ' + calcForm + ' select').on('input, change', function() {
            onRangeChange();
        });
        
        return true;
    };
    
    var onRangeChange = function() {
        getValues();
        showValues();
        calculateMonthlySavings();
        
        return true;
    };
    
    var getValues = function() {
        retirementLengthVal = parseInt(retirementLengthElement.val());
        monthlySavingsVal = parseInt(monthlySavingsElements.val());
        startSaveUpVal = parseInt(startSaveUpElement.val());
        saveUpLength = retirementAge - startSaveUpVal;
        
        return true;
    };
    
    var showValues = function() {
        retirementLengthValueElement.html(retirementLengthVal);
        monthlySavingsValueElements.html(monthlySavingsVal);
        startSaveUpValueElement.html(startSaveUpVal);

        return true;
    };
    
    var calculateMonthlySavings = function() {
        //console.log(retirementLengthVal, monthlySavingsVal, startSaveUpVal);
        monthlySaveUp = Math.round((retirementLengthVal * monthlySavingsVal * 12) / (saveUpLength * 12));

        setFace();
        proceedMonthlySavings();
        
        return true;
    };

    var proceedMonthlySavings = function() {
        monthlySavingsElement.html(monthlySaveUp);
        
        return true;
    };

    var setFace = function() {
        var faceValue = Math.max(1, Math.round(((startSaveUpVal - saveUpRangeMin) / (saveUpRangeMax - saveUpRangeMin)) * faceElements));

        faceImgElement.attr('src', faceImgElement.data().srcPattern.replace('%', faceValue));

        return true;
    };

    return {
        init: init
    };
})();

monthlySavingsCalculator.init();
/**
 * kalkulator 1 END
 */
