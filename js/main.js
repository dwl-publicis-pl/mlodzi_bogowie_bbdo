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


$('[data-trigger]').on('click', function(e) {
    switch ($(this).data().trigger)
    {
        case 'startTopVideo':
            $('#intro-placeholder').addClass('intro-placeholder-hidden');
            $('#jumbotron-video').addClass('jumbotron-video-full');

            $('html,body').animate({
                scrollTop: $('#jumbotron-video').offset().top
            }, 600);

            var v = $('#jumbotron-video').find('video')[0];
            v.play();
            $('#jumbotron-video video').prop('controls', true);

            if (v.currentTime == 0) { // nie wysyłać zdarzenia po wznowieniu po pauzie
                //ga('send', 'event', 'video', 'Film na głównej');
            }

            v.onended = function(e) {
                $(this).load();
                $('#jumbotron-video video').prop('controls', false);
                $('#intro-placeholder').removeClass('intro-placeholder-hidden');
                $('#jumbotron-video').removeClass('jumbotron-video-full');
            };

            break;

        default:
            console.log('no action triggered');
            break;
    }
});


/**
 * Number.prototype.format(n, x, s, c)
 * http://stackoverflow.com/a/14428340/1453425
 *
 * @param integer n: length of decimal
 * @param integer x: length of whole part
 * @param mixed   s: sections delimiter
 * @param mixed   c: decimal delimiter
 */
Number.prototype.format = function(n, x, s, c) {
    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
        num = this.toFixed(Math.max(0, ~~n));

    return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
};


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


/**
 * kalkulator 2 (mit 4)
 */
var retirementNecessitiesCalculator = (function() {
    var rootElement = '#rNCalc';
    var necessitiesSum = 0;
    var btnSelector = '.calc-2-element';
    var clickedElement,
        clickedGroup,
        errorMsg = [],
        maxEarningsLength = 8,
        moneySufix = ' PLN';
    var htmlSumElement = $('#calc-2-sum'),
        htmlRetirementSumElement = $('#calc-2-retirement-value'),
        dataTxtResultSelectorName = 'data-rNCalc-result',
        selectedFinalTextElement,
        backBtnSelector = '.rnCalc-results-page button',
        btnResetSelector = '[data-calc-trigger="reset-calc"]',
        isRetirementLiveElement = false,
        retirementLiveValueContainerSelector = '.calc-3-retirement-value-container';
        retirementLiveValueSelector = '.js-retirement-live-value';
    var earningsElement = $('#rNCalcEarnings');
    var earningsValue = 0,
        retirementValue = 0,
        earningsDivisor = 3;
    var doCalculationsTrigger = $('.btn-selector-submit');
    var groupsList = [];
    var checkedGroupsList = [];
    var percentRetirementToNecessities;
    var coinsInContainer = 26, // max and full stack of coins
        coinImgSrc = 'img/coin.png',
        nRCalcExpensesElement = '#nRCalcExpenses',
        nRCalcRetirementValueElement = '#nRCalcRetirementValue',
        rnCalcSumTxtElement = '.rnCalcSumTxt',
        rnCalcRetirementSumTxtElement = '.rnCalcRetirementSumTxt',
        minCoinTranslate = -17,
        maxCoinTranslate = 17,
        coinsSpeed = 0.821, // [s]
        coinEdgeHeight = 16;
    var coinsAmountExpenses = 0;
    var coinsAmountEarnings = 0;


    var init = function() {
        if ($(rootElement).length == 0) {
            return false;
        }

        collectListOfGroups();
        initEarningsValidatorAndUpdater();
        findRetirementLiveElement();

        $(btnResetSelector).on('click', function(event) {
            event.preventDefault();

            resetCalc();
        });


        $(btnSelector).on('click', function(event) {
            event.preventDefault();

            clickedElement = $(this);

            if (clickedElement.data().selected == 'true') {
                return false;
            }

            clickedGroup = parseInt(clickedElement.data().group);

            clearGroupSelect();
            addToSum();
            setAsSelected();
        });

        doCalculationsTrigger.on('click', function(event) {
            event.preventDefault();

            if (!doFinalCalculations()) {
                printErrors();

                return false;
            } else {
                sectionTransition('next');
                toggleBackBtn();
                setTimeout(renderHTML, 780);

                return true;
            }
        });
    };


    var findRetirementLiveElement = function() {
        if ($(retirementLiveValueSelector).length > 0) {
            isRetirementLiveElement = true;
        }

        return true;
    };


    var numberStep = function(now, tween) {
        var target = $(tween.elem),
            rounded_now = Math.round(now);

        target.prop('number', rounded_now).text(rounded_now.format(0, 3, ' ') + moneySufix);
    };


    var updateRetirementLiveValue = function() {
        if (!isRetirementLiveElement) {
            return true;
        }

        if (!$(retirementLiveValueContainerSelector).hasClass('active')) {
            $(retirementLiveValueContainerSelector).addClass('active');
        }

        getEarnings();
        calculateRetirementValue();


        $(retirementLiveValueSelector).stop().animateNumber(
            {
                number: retirementValue,
                easing: 'easeInQuad',
                numberStep: numberStep
            },
            800
        );
    };


    var resetCalc = function() {
        var search = $(rootElement).find('[data-selected="true"]');

        if (search) {
            $.each(search, function(i, found) {
                $(found).attr('data-selected', 'false');
            });
        }

        earningsElement.val('');

        if (isRetirementLiveElement) {
            $(retirementLiveValueContainerSelector).removeClass('active');
            $(retirementLiveValueSelector).text('');
        }

        toggleBackBtn();
        sectionTransition('prev');

        $(nRCalcExpensesElement + ' > img').remove();
        $(nRCalcRetirementValueElement + ' > img').remove();

        clickedElement = null;
        clickedGroup = null;
        errorMsg = [];
        necessitiesSum = 0;
        earningsValue = 0;
        retirementValue = 0;
        percentRetirementToNecessities = 0;
        checkedGroupsList = [];

        $('[' + dataTxtResultSelectorName + ']').removeClass('active activeOpacity');
        $(rnCalcSumTxtElement).removeClass('active').removeAttr('style');
        $(rnCalcRetirementSumTxtElement).removeClass('active').removeAttr('style');

        return true;
    };

    var toggleBackBtn = function() {
        $(backBtnSelector).collapse('toggle');
    };

    var sectionTransition = function(direction) {
        // przejście do slajdu, używa jQuery Cycle2
        $('.cycle-slideshow').cycle(direction);

        return true;
    };

    var collectListOfGroups = function() {
        var group;

        $(rootElement + ' [data-group]').each(function() {
            group = parseInt($(this).data().group);

            if (groupsList.indexOf(group) === -1) {
                groupsList.push(group);
            }
        });

        return true;
    };

    var initEarningsValidatorAndUpdater = function() {
        earningsElement.on('keyup', function(e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));

            if ($(this).val().length > maxEarningsLength) {
                $(this).val($(this).val().substr(0, maxEarningsLength));
            }

            updateRetirementLiveValue();
        });
    };

    var clearGroupSelect = function() {
        var search = $(rootElement).find('[data-group="' + clickedGroup + '"][data-selected="true"]');

        if (search) {
            $.each(search, function(i, found) {
                $(found).attr('data-selected', 'false');

                necessitiesSum = necessitiesSum - Math.max(0, parseInt($(found).data().value));
            });
        }

        var toRemove = checkedGroupsList.indexOf(clickedGroup);

        if (toRemove > -1) {
            checkedGroupsList.splice(toRemove, 1);
        }

        return true;
    };

    var setAsSelected = function() {
        clickedElement.attr('data-selected', 'true');
        checkedGroupsList.push(clickedGroup);

        return true;
    };

    var addToSum = function() {
        var value = clickedElement.data().value;
        value = Math.max(0, parseInt(value));
        necessitiesSum = necessitiesSum + value;

        return true;
    };

    var doFinalCalculations = function() {
        isValidGroupsList();
        getEarnings();
        calculateRetirementValue();
        solveFinalTxt();

        if (isError()) {
            return false;
        } else {
            return true;
        }
    };

    var solveFinalTxt = function() {
        percentRetirementToNecessities = retirementValue / necessitiesSum * 100;

        var select;

        if (percentRetirementToNecessities >= 100) {
            select = 3;
        } else if (percentRetirementToNecessities > 66) {
            select = 2;
        } else {
            select = 1;
        }

        selectedFinalTextElement = $('[' + dataTxtResultSelectorName + '=' + select + ']');
        selectedFinalTextElement.addClass('active');

        return true;
    };

    var getEarnings = function() {
        var earningsInput = parseInt(earningsElement.val());

        if (!Number.isInteger(earningsInput) || earningsInput < 1) {
            addError('Zarobki muszą być większe od zera.');

            return false;
        } else {
            earningsValue = earningsInput;

            return true;
        }
    };

    var isValidGroupsList = function() {
        if (groupsList.length != checkedGroupsList.length) {
            addError('Wybierz po jednej pozycji dla każdego wiersza.');

            return false;
        } else {
            return true;
        }
    };

    var calculateRetirementValue = function() {
        if (isError()) {
            return false;
        }

        retirementValue = Math.round(earningsValue / earningsDivisor);

        return true;
    };

    var renderHTML = function() {
        if (isError()) {
            return false;
        }

        htmlSumElement.html(necessitiesSum.format(0, 3, ' '));
        htmlRetirementSumElement.html(retirementValue.format(0, 3, ' '));


        if (percentRetirementToNecessities > 95 && percentRetirementToNecessities < 104) {
            coinsAmountExpenses = coinsInContainer;
            coinsAmountEarnings = coinsInContainer;
        } else if (percentRetirementToNecessities >= 104) {
            coinsAmountExpenses = Math.floor((coinsInContainer * 100) / percentRetirementToNecessities);
            coinsAmountEarnings = coinsInContainer;
        } else if (percentRetirementToNecessities <= 95) {
            coinsAmountExpenses = coinsInContainer;
            coinsAmountEarnings = Math.floor(coinsInContainer * percentRetirementToNecessities / 100);
        }

        coinsAmountEarnings = Math.max(1, coinsAmountEarnings);
        coinsAmountExpenses = Math.max(1, coinsAmountExpenses);

        console.log(Math.floor(percentRetirementToNecessities) + '%', coinsAmountExpenses, coinsAmountEarnings);

        var randomHorzTransform;
        var i = 0;

        for (i = 0; i < coinsAmountExpenses; i++) {
            randomHorzTransform = Math.floor(Math.random() * (maxCoinTranslate - minCoinTranslate + 1)) + minCoinTranslate;
            $(nRCalcExpensesElement).append('<img src="' + coinImgSrc + '" alt="" style="opacity: 0; bottom: ' + Math.pow(i * 4, 2) + 'px; -webkit-transform: translateX(' + randomHorzTransform + 'px); -moz-transform: translateX(' + randomHorzTransform + 'px); -ms-transform: translateX(' + randomHorzTransform + 'px); -o-transform: translateX(' + randomHorzTransform + 'px); transform: translateX(' + randomHorzTransform + 'px);">');
        }

        var n = 0;
        var isFinalCoin = function(c) {
            if (c + 1 == coinsAmountExpenses) {
                showChartLabels();
            }
        };

        $(nRCalcExpensesElement).children('img').each(function () {
            TweenLite.to(this, coinsSpeed, {delay: (0.1 * n), opacity: 1, bottom: (n * 15), ease: Power2.easeOut, onComplete: isFinalCoin, onCompleteParams: [n]});
            n++;
        });

        for (i = 0; i < coinsAmountEarnings; i++) {
            randomHorzTransform = Math.floor(Math.random() * (maxCoinTranslate - minCoinTranslate + 1)) + minCoinTranslate;
            $(nRCalcRetirementValueElement).append('<img src="' + coinImgSrc + '" alt="" style="opacity: 0; bottom: ' + Math.pow(i * 4, 2) + 'px; -webkit-transform: translateX(' + randomHorzTransform + 'px); -moz-transform: translateX(' + randomHorzTransform + 'px); -ms-transform: translateX(' + randomHorzTransform + 'px); -o-transform: translateX(' + randomHorzTransform + 'px); transform: translateX(' + randomHorzTransform + 'px);">');
        }

        n = 0;

        $(nRCalcRetirementValueElement).children('img').each(function () {
            TweenLite.to(this, coinsSpeed, {delay: (0.1 * n), opacity: 1, bottom: (n * 15), ease: Power2.easeOut});
            n++;
        });

        selectedFinalTextElement.addClass('activeOpacity');

        return true;
    };

    var showChartLabels = function() {
        if (percentRetirementToNecessities > 95 && percentRetirementToNecessities < 104) {
            $(rnCalcSumTxtElement).addClass('active');
            $(rnCalcRetirementSumTxtElement).addClass('active');
        } else if (percentRetirementToNecessities >= 104) {
            $(rnCalcSumTxtElement).addClass('active').css({
                    transform: 'translateY(' + (coinsAmountExpenses * coinEdgeHeight + 100) + 'px)'
                }
            );
            $(rnCalcRetirementSumTxtElement).addClass('active');
        } else if (percentRetirementToNecessities <= 95) {
            $(rnCalcSumTxtElement).addClass('active');
            $(rnCalcRetirementSumTxtElement).addClass('active').css({
                    transform: 'translateY(' + (coinsAmountEarnings * coinEdgeHeight + 100) + 'px)'
                }
            );
        }

        return true;
    };

    var addError = function(msg) {
        errorMsg.push(msg);

        return true;
    };

    var isError = function() {
        if (errorMsg.length > 0) {
            return true;
        } else {
            return false;
        }
    };

    var printErrors = function() {
        alert(errorMsg.join("\n"));
        errorMsg = []; //cleaning

        return true;
    };

    return {
        init: init,
        isError: isError
    };
})();

retirementNecessitiesCalculator.init();
/**
 * kalkulator 2 END
 */


/**
 * kalkulator 4 (mit 7)
 */
var necessitiesCalculator = (function() {
    var rootElement = '#nCalc';
    var necessitiesSum = 0;
    var btnSelector = '.calc-2-element';
    var clickedElement,
        clickedGroup,
        errorMsg = [];
    var htmlSumElement = $('#calc-4-sum');
    var groupsList = [];
    var checkedGroupsList = [];
    var coinsInContainer = 13, // max and full stack of coins
        coinImgSrc = 'img/coin.png',
        minCoinTranslate = -17,
        maxCoinTranslate = 17,
        coinsSpeed = 0.821, // [s]
        coinEdgeHeight = 16,
        coinsElement = $('#calc-4-coins');
    var coinsAmount = 0;


    var init = function() {
        if ($(rootElement).length == 0) {
            return false;
        }

        collectListOfGroups();

        $(btnSelector).on('click', function(event) {
            clickedElement = $(this);
            clickedGroup = parseInt(clickedElement.data().group);

            if (clickedElement.attr('data-selected') == 'true') {
                clearGroupSelect();
            } else {
                clearGroupSelect();
                addToSum();
                setAsSelected();
            }

            renderHTML();
        });

        return true;
    };

    var collectListOfGroups = function() {
        var group;

        $(rootElement + ' [data-group]').each(function() {
            group = parseInt($(this).data().group);

            if (groupsList.indexOf(group) === -1) {
                groupsList.push(group);
            }
        });

        return true;
    };


    var clearGroupSelect = function() {
        var search = $(rootElement).find('[data-group="' + clickedGroup + '"][data-selected="true"]');

        if (search) {
            $.each(search, function(i, found) {
                $(found).attr('data-selected', 'false');

                necessitiesSum = necessitiesSum - Math.max(0, parseInt($(found).data().value));
            });
        }

        var toRemove = checkedGroupsList.indexOf(clickedGroup);

        if (toRemove > -1) {
            checkedGroupsList.splice(toRemove, 1);
        }

        return true;
    };

    var setAsSelected = function() {
        clickedElement.attr('data-selected', 'true');
        checkedGroupsList.push(clickedGroup);

        return true;
    };

    var addToSum = function() {
        var value = clickedElement.data().value;
        value = Math.max(0, parseInt(value));
        necessitiesSum = necessitiesSum + value;

        return true;
    };

    var numberStep = function(now, tween) {
        var target = $(tween.elem),
            rounded_now = Math.round(now);

        target.prop('number', rounded_now).text(rounded_now.format(0, 3, ' '));
    };

    var renderHTML = function() {
        if (isError()) {
            return false;
        }

        htmlSumElement.stop().animateNumber(
            {
                number: necessitiesSum,
                easing: 'easeInQuad',
                numberStep: numberStep
            },
            800
        );

        var coinsNum = coinsElement.find('> img');

        if (coinsNum.length == 0) {
            coinsElement.animate({height: (coinEdgeHeight * coinsInContainer * 2.01) + 'px'}, 500);

            var randomHorzTransform;
            var i = 0;

            for (i = 0; i < coinsInContainer; i++) {
                randomHorzTransform = Math.floor(Math.random() * (maxCoinTranslate - minCoinTranslate + 1)) + minCoinTranslate;
                $(coinsElement).append('<img src="' + coinImgSrc + '" alt="" style="opacity: 0; bottom: ' + Math.pow(i * 4, 2) + 'px; -webkit-transform: translateX(calc(' + randomHorzTransform + 'px - 50%)); -moz-transform: translateX(calc(' + randomHorzTransform + 'px - 50%)); -ms-transform: translateX(calc(' + randomHorzTransform + 'px - 50%)); -o-transform: translateX(calc(' + randomHorzTransform + 'px - 50%)); transform: translateX(calc(' + randomHorzTransform + 'px - 50%));">');
            }

            var n = 0;

            $(coinsElement).children('img').each(function () {
                TweenLite.to(this, coinsSpeed, {
                    delay: (0.1 * n),
                    opacity: 1,
                    bottom: (n * coinEdgeHeight),
                    ease: Power2.easeOut
                });
                n++;
            });
        }

        return true;
    };

    var addError = function(msg) {
        errorMsg.push(msg);

        return true;
    };

    var isError = function() {
        if (errorMsg.length > 0) {
            return true;
        } else {
            return false;
        }
    };

    var printErrors = function() {
        alert(errorMsg.join("\n"));
        errorMsg = []; //cleaning

        return true;
    };

    return {
        init: init,
        isError: isError
    };
})();

necessitiesCalculator.init();
/**
 * kalkulator 4 END
 */
