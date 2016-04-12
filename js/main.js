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


// IE nie wspiera Number.isInteger, więc rozwiązanie zastępcze
// usage: (1).isInteger();
Number.prototype.isInteger = function() {
    return (this ^ 0) === +this;
};


$('video').click(function(e) {
    e.preventDefault();

    this.paused ? this.play() : this.pause();
});


$('[data-trigger]').on('click', function(e) {
    switch ($(this).data().trigger)
    {
        case 'startTopVideo':
            $('#intro-placeholder').addClass('intro-placeholder-hidden');
            $('#jumbotron-video').addClass('jumbotron-video-full');

            /*$('html,body').animate({
             scrollTop: $('#jumbotron-video').offset().top
             }, 600);*/

            var v = $('#jumbotron-video').find('video')[0];

            v.play();
            $('#jumbotron-video video').prop('controls', true);

            if (v.currentTime == 0) { // nie wysyłać zdarzenia po wznowieniu po pauzie
                ga('send', 'event', 'video', 'Film na głównej');
            }

            v.onended = function(e) {
                $(this).load();
                $('#jumbotron-video video').prop('controls', false);
                $('#intro-placeholder').removeClass('intro-placeholder-hidden');
                $('#jumbotron-video').removeClass('jumbotron-video-full');
            };

            break;

        case 'init-quiz':
            quiz.init($(this));
            break;

        case 'quiz-restart':
            quiz.restart();
            break;

        case 'run-conversion':
            e.preventDefault();
            runConversion($(this).data().id, this, $(this).attr('href'));
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
 * quiz
 */
var quiz = (function() {
    var numOfQuestions = 10,
        initBtnElement,
        rootSelector = '#quiz-section',
        btnAnswerSelector = '.btn-quiz',
        btnNextSelector = '.btn-quiz-select-answer',
        triggerBoxElement = '#js-blue-man',// element do ukrycia przy rozpoczęciu quizu
        questionsAndAnswers = {}, // question : points
        pointsSum = 0,
        calculatedResultSlide,
        currentQuestion,
        errorMsg = [],
        errorMsgs = [
            'Nieprawidłowy wybór pytania.',
            'Nie wybrano odpowiedzi w tym pytaniu.'
        ],
        currentWidth;


    var init = function(initButton) {
        initBtnElement = initButton;
        initRootElement();
        initFirstAnimation();
        listenCycleProceed();
        currentWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        onWindowResize();

        $(btnNextSelector).prop('disabled', true);


        $(btnAnswerSelector).on('click', function(e) {
            e.preventDefault();
            proceedAnswer(this);
        });


        $(btnNextSelector).on('click', function(e) {
            e.preventDefault();

            var t = $(this).data('question-validate');

            if (typeof questionsAndAnswers[t] === "undefined") {
                addError(errorMsgs[1]);
            } else {
                $(this).prop('disabled', true);
                nextQuestionTrigger(this);
            }

            if (isError()) {
                printErrors();
            }
        });
    };


    var initFirstAnimation = function() {
        $('.cycle-sentinel .quiz-animation').remove(); // fix, ponieważ sentinel duplikuje obiekt animacji
        loadAdobeComposition('EDGE-3094357563', 'q1');
    };


    var listenCycleProceed = function() {
        $(rootSelector).on('cycle-before', function(e, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag) {
            var adobeName = $(incomingSlideEl).data().anim;
            var adobePName = $(incomingSlideEl).data().animQ;

            if (adobeName && adobePName) {
                loadAdobeComposition(adobeName, adobePName);
            }
        });
    };


    var loadAdobeComposition = function(name, projectname) {
        //console.log(name, projectname);

        AdobeEdge.loadComposition(projectname, name, {
            scaleToFit: "none",
            centerStage: "none",
            minW: "0px",
            maxW: "undefined",
            width: "100%",
            height: "720px"
        }, {"dom":{}}, {"dom":{}});
    };


    var proceedAnswer = function(answerElement) {
        answerElement = $(answerElement);

        var value = parseInt(answerElement.data('value'));
        var question = parseInt(answerElement.data('question'));

        if (question < 1) {
            addError(errorMsgs[0]); // shouldn't happen

            return false;
        }

        currentQuestion = question;

        clearQuestionSelect();

        questionsAndAnswers[currentQuestion] = value;
        answerElement.addClass('active');

        enableNextQuestionBtn(currentQuestion);

        return true;
    };


    var clearQuestionSelect = function() {
        var search = $(rootSelector).find('.active[data-question="' + currentQuestion + '"]');

        if (search) {
            $.each(search, function(i, found) {
                $(found).removeClass('active');
            });
        }

        delete questionsAndAnswers[currentQuestion];

        return true;
    };


    var enableNextQuestionBtn = function(number) {
        $(btnNextSelector + '[data-question-validate="' + number + '"]').prop('disabled', false);
    };


    var nextQuestionTrigger = function(clickedElement) {
        if ($(clickedElement).data('is-final')) {
            calculatePoints();
            $(rootSelector).cycle('goto', calculatedResultSlide);
        } else {
            $(rootSelector).cycle('next');
        }
    };


    var calculatePoints = function() {
        for (var index in questionsAndAnswers) {
            pointsSum = pointsSum + questionsAndAnswers[index];
        }

        if (pointsSum < 11) {
            calculatedResultSlide = 10;
        } else if (pointsSum < 16) {
            calculatedResultSlide = 11;
        } else if (pointsSum < 26) {
            calculatedResultSlide = 12;
        } else if (pointsSum < 36) {
            calculatedResultSlide = 13;
        } else {
            calculatedResultSlide = 14;
        }

        // GA event
        ga('send', 'event', 'Quiz', 'Koniec', 'wynik', pointsSum);

        return true;
    };


    var initRootElement = function() {
        //var currentHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
        $(triggerBoxElement).collapse('hide');

        $(triggerBoxElement).on('hidden.bs.collapse', function() {
            if (currentWidth > 992) {
                TweenLite.set(rootSelector, {
                    className:'+=row-flex-md'
                });

                var wHeight = 720;

                TweenLite.to(rootSelector, .6, {
                    height: wHeight,
                    ease: Power2.easeOut
                });
            } else {
                TweenLite.set(rootSelector, {
                    display: 'block'
                });
            }

            //var tempCurrSlide = $(rootSelector).data('cycle.opts').currSlide;
            //loadAdobeComposition(tempCurrSlide.data().anim, tempCurrSlide.data().animQ);

            $('html,body').animate({
                scrollTop: ($(rootSelector).offset().top),
                easing: 'easeOutCubic'
            }, 600, function() {

            });
        });

        // GA event
        ga('send', 'event', 'Quiz', 'Start');
    };

    var onWindowResize = function() {
        $(window).on('resize', function(){
            var win = $(this);

            if (win.width() > 992 && $(rootSelector).innerHeight != 720) {
                TweenLite.set(rootSelector, {
                    className:'+=row-flex-md'
                });

                TweenLite.to(rootSelector, .6, {
                    height: 720,
                    ease: Power2.easeOut
                });
            } else if (win.width() <= 992 && $(rootSelector).innerHeight == 720) {
                $(rootSelector).css({height : 'auto', display : 'block'}).removeClass('row-flex-md');
            }
        });
    };

    var addError = function(msg) {
        errorMsg.push(msg);

        //removing potential duplicates
        var uniq = [];
        errorMsg.forEach(function(item) {
            if (uniq.indexOf(item) < 0) {
                uniq.push(item);
            }
        });

        errorMsg = uniq;

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

    var restart = function() {
        errorMsg = [];
        pointsSum = 0;
        $(btnNextSelector).prop('disabled', false);

        $(rootSelector).cycle('goto', 0);
    };

    return {
        init: init,
        isError: isError,
        restart: restart
    };
})();
/**
 * quiz END
 */


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

    var annualReturnRate = 0.02, // roczna stopa zwrotu
        monthlyReturnRate;

    var calculateMonthlyReturnRate = function() {
        monthlyReturnRate = Math.pow(1 + annualReturnRate, 1 / 12) - 1;

        return true;
    };

    var init = function() {
        if ($calcElem.length > 0) {
            initListeners();

            saveUpRangeMin = startSaveUpElement.attr('min');
            saveUpRangeMax = startSaveUpElement.attr('max');

            calculateMonthlyReturnRate();
            onRangeChange();
        }

        return true;
    };

    var initListeners = function() {
        $(calcForm + ' input, ' + calcForm + ' select').on('input change', function() {
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
        //console.log(retirementLengthVal, monthlySavingsVal, startSaveUpVal, saveUpLength);

        monthlySaveUp = (monthlySavingsVal * 12 * retirementLengthVal) / (((Math.pow(1 + monthlyReturnRate, 12 * saveUpLength) - 1) / monthlyReturnRate) * (1 + monthlyReturnRate));
        monthlySaveUp = Math.round(monthlySaveUp);

        // wersja bez rocznej stopy zwrotu
        // monthlySaveUp = Math.round((retirementLengthVal * monthlySavingsVal * 12) / (saveUpLength * 12));

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
 * kalkulator 1.5 (nowy mit 7)
 */
var monthlyOutcomeCalculator = (function() {
    var calcForm = '#mscCalc7';
    var $calcElem = $(calcForm);
    var retirementLengthElement = $('select[name="retirement_length"]');
    var monthlySavingsElements = $('select[name="monthly_savings"]');
    var startSaveUpElement = $('input[name="start_save_up"]');

    var startSaveUpElementValue = $('input[name="start_save_up"]').val();

    var monthlySavingsElement = $('#retirement_saves_result');
    var faceImgElement = $('#retirements_saves_face');

    var retirementLengthValueElement = $('.retirement_length_value');
    var monthlySavingsValueElements = $('.monthly_savings_value');
    var startSaveUpValueElement = $('.start_save_up_value');
    var startSaveUpLabel = $('.Start_save_up_label');

        if(window.location.hash) {
            hash = window.location.hash;
            money_to_input = hash.replace(/[#_]/g,'');
            console.log(money_to_input);

            $('select#f-msc-ms').append($('<option>', {
                value: money_to_input,
                text: money_to_input + ' zł'
            }).prop('selected', true));
        }

    var retirementLengthVal,
        monthlySavingsVal,
        startSaveUpVal,
        saveUpLength,
        monthlySaveUp = 0,
        saveUpRangeMin,
        saveUpRangeMax,
        faceElements = 7; // num of face alternatives

    var annualReturnRate = 0.02; // roczna stopa zwrotu



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
        $(calcForm + ' input, ' + calcForm + ' select').on('input change', function() {
            onRangeChange();
        });

        return true;
    };

    var onRangeChange = function() {
        getValues();
        showValues();
        calculateMonthlyOutcome();

        return true;
    };

    var getValues = function() {
        retirementLengthVal = parseInt(retirementLengthElement.val());
        monthlySavingsVal = parseInt(monthlySavingsElements.val());
        startSaveUpVal = parseInt(startSaveUpElement.val());

        return true;
    };

    var polishLanguageVariety = function() {
        // polski to trudna jezyk ver. odmiana lat wg. liczby 
        var rangeValues =
        {
            "0": "miesiące",
            "1": "rok",
            "2": "lata",
            '3': "lata",
            "4": "lata",
            "5": "lat"
        };
        if ($('input#f-msc-ss').val() == '0'){
            $('span.start_save_up_value').text('3');
        }
        $('span.Start_save_up_label').text(rangeValues[$('input#f-msc-ss').val()]);
        $('input#f-msc-ss').on('input change', function () {
            $('span.Start_save_up_label').text(rangeValues[$(this).val()]);
        });

        return true;
    };

    var showValues = function() {
        retirementLengthValueElement.html(retirementLengthVal);
        monthlySavingsValueElements.html(monthlySavingsVal);
        startSaveUpValueElement.html(startSaveUpVal);
        polishLanguageVariety();

        return true;
    };


    var calculateMonthlyOutcome = function() {
        //wartości pól z formularza
        monthlySavingsElementsVal = monthlySavingsElements.val();
        retirementLengthElementVal = retirementLengthElement.val();

        monthlySaveUp = (monthlySavingsElementsVal) / ((retirementLengthElementVal - startSaveUpVal) * 12);
        monthlySaveUp = Math.round(monthlySaveUp);
        //console.log('musisz odkladac' + monthlySaveUp)
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

monthlyOutcomeCalculator.init();
/**
 * kalkulator 1.5 END
 */






























/**
 * kalkulator 2 (mit 1, 4)
 */
var retirementNecessitiesCalculator = (function() {
    var rootElement = '#rNCalc';
    var necessitiesSum = 0;
    var btnSelector = '.calc-2-element';
    var clickedElement,
        clickedGroup,
        errorMsg = [],
        errorMsgs = [
            'Zarobki muszą być większe od zera.',
            'Wybierz po jednej pozycji dla każdego wiersza.'
        ],
        maxEarningsLength = 8,
        moneySufix = ' PLN',
        doNotInsertCoinsBelow = 992, // poniżej tej szerokości nie będą dodawane monety (mobile z założenia)
        enableChartAnimation = true;
    var htmlSumElement = $('#calc-2-sum'),
        htmlRetirementSumElement = $('#calc-2-retirement-value'),
        dataTxtResultSelectorName = 'data-rNCalc-result',
        chartUpperContainer = '#rnCalc-chart-img',
        chartImgSelector = '#js-rnCalc-chart-img',
        selectedFinalTextElement,
        backBtnSelector = '.rnCalc-results-page button',
        btnResetSelector = '[data-calc-trigger="reset-calc"]',
        isRetirementLiveElement = false,
        retirementLiveValueContainerSelector = '.calc-3-retirement-value-container',
        retirementLiveValueSelector = '.js-retirement-live-value',
        windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
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
        minCoinTranslate = -14,
        maxCoinTranslate = 14,
        coinsSpeed = 0.821, // [s]
        coinEdgeHeight = 16,
        chartLabelsVisible = false,
        chartUpperContainerHeight = 0;
    var coinsAmountExpenses = 0;
    var coinsAmountEarnings = 0;
    var resetOnBack = false; // resetuje cały kalkulator przy wciśnięciu "oblicz ponownie", czyli usuwa aktualnie wybrane pozycje
    var previousOrientation = window.orientation;
    var chartColors = ['#bed0e0', '#dae4ed', '#d8d8d8', '#e8e8e8', '#eb9f9e', '#f4cccc', '#fae6e6'];
    var groupsNames = ['Lokum na emeryturze', 'Codzienne wydatki', 'Opieka medyczna', 'Transport', 'Prezenty dla wnuków', 'Podróże', 'Hobby'];


    var init = function() {
        if ($(rootElement).length == 0) {
            return false;
        }

        collectListOfGroups();
        initEarningsValidatorAndUpdater();
        findRetirementLiveElement();

        window.addEventListener("resize", checkOrientation, false);
        window.addEventListener("orientationchange", checkOrientation, false);

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

    var checkOrientation = function(){
        if (window.orientation !== previousOrientation){
            previousOrientation = window.orientation;

            if (chartLabelsVisible) {
                // ponowne umiejscowienie labeli wyników
                showChartLabels();
            }
        }
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
            $(window).resize(); // fix dla cycle2 (resize kontenera)
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
        if (resetOnBack) {
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
        }

        toggleBackBtn();
        sectionTransition('prev');

        $(nRCalcExpensesElement + ' > img').remove();
        $(nRCalcRetirementValueElement + ' > img').remove();
        $('.js-img-chart-block').remove();

        if (resetOnBack) {
            clickedElement = null;
            clickedGroup = null;
            necessitiesSum = 0;
            earningsValue = 0;
            retirementValue = 0;
            checkedGroupsList = [];
        }

        errorMsg = [];
        percentRetirementToNecessities = 0;
        chartLabelsVisible = false;


        $('[' + dataTxtResultSelectorName + ']').removeClass('active activeOpacity');
        $(rnCalcSumTxtElement).removeClass('active').removeAttr('style');
        $(rnCalcRetirementSumTxtElement).removeClass('active').removeAttr('style');
        $(chartImgSelector).css({visibility: ''});

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

        if (percentRetirementToNecessities >= 99) {
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

        if (!(earningsInput).isInteger() || earningsInput < 1) {
            addError(errorMsgs[0]);

            return false;
        } else {
            //cleaning previous error
            var key = errorMsg.indexOf(errorMsgs[0]);

            if (key > -1) {
                errorMsg.splice(key, 1);
            }

            earningsValue = earningsInput;

            return true;
        }
    };

    var isValidGroupsList = function() {
        if (groupsList.length != checkedGroupsList.length) {
            addError(errorMsgs[1]);

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

        $('html, body').animate({
            scrollTop: $(rootElement).offset().top - 100
        }, 1000);

        htmlSumElement.html(necessitiesSum.format(0, 3, ' '));
        htmlRetirementSumElement.html(retirementValue.format(0, 3, ' '));

        //if (windowWidth >= doNotInsertCoinsBelow) { // całkowite wyłączenie rysowania monet
        if (percentRetirementToNecessities > 95 && percentRetirementToNecessities < 104) {
            coinsAmountExpenses = coinsInContainer;
            coinsAmountEarnings = coinsInContainer;
        } else if (percentRetirementToNecessities >= 104) {
            coinsAmountExpenses = Math.round((coinsInContainer * 100) / percentRetirementToNecessities);
            coinsAmountEarnings = coinsInContainer;
        } else if (percentRetirementToNecessities <= 95) {
            coinsAmountExpenses = coinsInContainer;
            coinsAmountEarnings = Math.round(coinsInContainer * percentRetirementToNecessities / 100);
        }

        coinsAmountEarnings = Math.max(1, coinsAmountEarnings);
        coinsAmountExpenses = Math.max(1, coinsAmountExpenses);

        //console.log(Math.floor(percentRetirementToNecessities) + '%', retirementValue, necessitiesSum, coinsAmountExpenses, coinsAmountEarnings);

        // jeśli emerytura wynosi mniej niż N% wydatków, wtedy jest animacja linii i poszczególnych grup wydatków,
        // w przeciwnym wypadku jest zbyt ciasno
        if (enableChartAnimation && percentRetirementToNecessities < 170) {
            var search = $(rootElement).find('[data-selected="true"]');
            var groups = {};
            var spaceUsed = 0;
            var g, dValue, perc, pos, i;
            var elementsDiffHeight = 0;
            var minChartBarHeight = 30;
            var overHeightSum = 0;
            var maxGroupIterator;
            var maxGroupHeight = 0;

            if (coinsAmountExpenses < coinsAmountEarnings) {
                elementsDiffHeight = $(chartUpperContainer).height() - $(nRCalcRetirementValueElement).height();
            } else {
                elementsDiffHeight = $(chartUpperContainer).height() - $(nRCalcExpensesElement).height();
            }

            spaceUsed = elementsDiffHeight;

            elementsDiffHeight = elementsDiffHeight - 126; //poprawka na kontener wewnętrzny

            if (search) {
                var t = 0;
                var containerHeight = coinsAmountExpenses * 17.45; //wys monety

                if (coinsAmountExpenses < coinsAmountEarnings) {
                    containerHeight += 17; // kind of magic
                }

                $.each(search, function(i, found) {
                    g = $(found).attr('data-group');
                    dValue = $(found).attr('data-value');
                    perc = dValue / necessitiesSum;
                    pos =  containerHeight * perc;
                    i = pos;

                    if (i > maxGroupHeight) {
                        maxGroupIterator = t;
                        maxGroupHeight = i;
                    }

                    if (i < minChartBarHeight) {
                        var h = minChartBarHeight - i;
                        i = minChartBarHeight;
                        overHeightSum += h;
                        //console.log(t, h, overHeightSum);
                    }

                    pos = elementsDiffHeight + spaceUsed;

                    groups[t] = {
                        group: g,
                        value: dValue,
                        percent: perc,
                        position: pos,
                        height: i
                    };

                    spaceUsed = spaceUsed + i;
                    t++;
                });
            }

            if (overHeightSum > 0) {
                var x = false;

                $.each(groups, function(n, groupChartData) {
                    if (n == maxGroupIterator) {
                        groups[n]['height'] -= overHeightSum;
                        x = true;
                    } else if (x == true) {
                        groups[n]['position'] -= overHeightSum;
                    }
                });
            }

            //console.table(groups);

            $.each(groups, function(n, groupChartData) {
                $(chartUpperContainer).prepend('<div class="js-img-chart-block chart-block" style="background-color: ' + chartColors[n] + '; position: absolute; bottom: ' + (groupChartData.position) + 'px; line-height: ' + groupChartData.height + 'px; width: 100%; height: ' + groupChartData.height + 'px">' + groupsNames[n] + '</div>');
            })

        } else {
            $(chartImgSelector).css({visibility: 'visible'});
        }

        var randomHorzTransform;
        var i = 0;

        for (i = 0; i < coinsAmountExpenses; i++) {
            randomHorzTransform = Math.floor(Math.random() * (maxCoinTranslate - minCoinTranslate + 1)) + minCoinTranslate;
            $(nRCalcExpensesElement).append('<img src="' + coinImgSrc + '" alt="" style="opacity: 0; bottom: ' + Math.pow(i * 4, 2) + 'px; -webkit-transform: translateX(' + randomHorzTransform + 'px); -moz-transform: translateX(' + randomHorzTransform + 'px); -ms-transform: translateX(' + randomHorzTransform + 'px); -o-transform: translateX(' + randomHorzTransform + 'px); transform: translateX(' + randomHorzTransform + 'px);">');
        }

        var n = 0;
        var coinDelay;
        var isFinalCoin = function (c) {
            if (c + 1 == coinsAmountExpenses) {
                showChartLabels();
            }
        };

        $(nRCalcExpensesElement).children('img').each(function() {
            if (windowWidth >= doNotInsertCoinsBelow) {
                coinDelay = 0.1 * n;
            } else {
                coinDelay = 0;
            }

            TweenLite.to(this, coinsSpeed, {
                delay: coinDelay,
                opacity: 1,
                bottom: (n * 15),
                ease: Power2.easeOut,
                onComplete: isFinalCoin,
                onCompleteParams: [n]
            });
            n++;
        });

        for (i = 0; i < coinsAmountEarnings; i++) {
            randomHorzTransform = Math.floor(Math.random() * (maxCoinTranslate - minCoinTranslate + 1)) + minCoinTranslate;
            $(nRCalcRetirementValueElement).append('<img src="' + coinImgSrc + '" alt="" style="opacity: 0; bottom: ' + Math.pow(i * 4, 2) + 'px; -webkit-transform: translateX(' + randomHorzTransform + 'px); -moz-transform: translateX(' + randomHorzTransform + 'px); -ms-transform: translateX(' + randomHorzTransform + 'px); -o-transform: translateX(' + randomHorzTransform + 'px); transform: translateX(' + randomHorzTransform + 'px);">');
        }

        n = 0;

        $(nRCalcRetirementValueElement).children('img').each(function () {
            if (windowWidth >= doNotInsertCoinsBelow) {
                coinDelay = 0.1 * n;
            } else {
                coinDelay = 0;
            }

            TweenLite.to(this, coinsSpeed, {delay: coinDelay, opacity: 1, bottom: (n * 15), ease: Power2.easeOut});
            n++;
        });
        /*} else {
         showChartLabels();
         }*/

        selectedFinalTextElement.addClass('activeOpacity');

        return true;
    };

    var showChartLabels = function() {
        var contenerHeight = $('#nRCalcExpenses').height();
        if (percentRetirementToNecessities > 95 && percentRetirementToNecessities < 104) {
            $(rnCalcSumTxtElement).addClass('active');
            $(rnCalcRetirementSumTxtElement).addClass('active');
        } else if (percentRetirementToNecessities >= 104) {
            $(rnCalcSumTxtElement).addClass('active').css({
                    transform: 'translateY(' + (contenerHeight - (coinsAmountExpenses * coinEdgeHeight) - 200) + 'px)'
                }
            );
            $(rnCalcRetirementSumTxtElement).addClass('active');
        } else if (percentRetirementToNecessities <= 95) {
            $(rnCalcSumTxtElement).addClass('active');
            $(rnCalcRetirementSumTxtElement).addClass('active').css({
                    transform: 'translateY(' + (contenerHeight - (coinsAmountEarnings * coinEdgeHeight) - 200) + 'px)'
                }
            );
        }

        chartLabelsVisible = true;

        return true;
    };

    var addError = function(msg) {
        errorMsg.push(msg);

        //removing potential duplicates
        var uniq = [];
        errorMsg.forEach(function(item) {
            if(uniq.indexOf(item) < 0) {
                uniq.push(item);
            }
        });

        errorMsg = uniq;

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
 * kalkulator 4 (mit 7) // będzie do usunięcia po zrobieniu kalkulatora #mit8 
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


/**
 * kalkulator 5 (mit 8)
 */
var necessitiesCalculator = (function() {
    var rootElement = '#nCalc7';
    var necessitiesSum = 0;
    var btnSelector = '.calc-2-element';
    var clickedElement,
        clickedGroup,
        errorMsg = [];
    var htmlSumElement = $('#calc-5-sum');
    var groupsList = [];
    var checkedGroupsList = [];
    var coinsInContainer = 4, // max and full stack of coins
        coinImgSrc = 'img/coin.png',
        minCoinTranslate = 0, //was -17
        maxCoinTranslate = 0, //was 17
        coinsSpeed = 0.821, // [s]
        coinEdgeHeight = 10,
        coinsElement = $('#calc-5-coins');
    var coinsAmount = 0;

    var init = function() {

        if ($(rootElement).length == 0) {
            return false;
        }

        collectListOfGroups();

        $( ".btn-cloud" ).click(function(event) {
            event.preventDefault();
            return false;
            $(this).remove();
        });
        $( ".btn-cloud" ).click(function(event) {
            $(this).parent().parent().parent().parent().parent().parent().hide().next().show();
            if ($('.cloud7-step').is(':visible')) {
                $('.cloud-result-col, .coins-stack').addClass('active-step-7');
                var link_saving = $('.btn-cta').attr('href');
                $('.btn-cta').attr('href', link_saving + "#" + money_sum_for_another_calc );

            } 
        });



        $(btnSelector).on('click', function(event) {

            

            clickedElement = $(this).not(".btn-cloud");
            clickedElement.toggleClass('active');
            clickedElement.parent().parent().parent().find('div[data-selected="true"]').removeClass('active');
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
        money_sum_for_another_calc = necessitiesSum;

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
 * kalkulator 5 END
 */


/**
 * kalkulator 5-mobile (mit 8)
 */

var necessitiesCalculator = (function() {
    var rootElement = '#nCalcmobile';
    var necessitiesSum = 0;
    var btnSelector = '.calc-2-element-mobile';
    var clickedElement,
        clickedGroup,
        errorMsg = [];
    var htmlSumElement2 = $('#calc-5-sum-mobile');
    var groupsList = [];
    var checkedGroupsList = [];
    var coinsInContainer = 4, // max and full stack of coins
        coinImgSrc = 'img/coin.png',
        minCoinTranslate = 0, //was -17
        maxCoinTranslate = 0, //was 17
        coinsSpeed = 0.821, // [s]
        coinEdgeHeight = 10,
        coinsElement = $('#calc-5-coins-mobile');
    var coinsAmount = 0;

    var init = function() {

        if ($(rootElement).length == 0) {
            return false;
        }

        collectListOfGroups();

        $( ".calc-2-element-mobile" ).click(function(event) {
            event.preventDefault();
            return false;
            $(this).remove();
        });
        $( "button.next-step" ).click(function(event) {
            $('button.next-step').prop('disabled', true);
            $(this).parent().parent().parent().hide().next().show();
            if ($('.cloud7-step').is(':visible')) {
                var link_saving = $('.btn-cta').attr('href');
                $('.btn-cta').attr('href', link_saving + "#" + money_sum_for_another_calc );

                $('#nCalcmobile .guy-container').css('background','#7AA8B5');
                $('.cloud-result-col, .coins-stack').addClass('active-step-7');
            } 
        });

        $(btnSelector).on('click', function(event) {

            clickedElement = $(this).not(".btn-cloud");
            clickedElement.toggleClass('active');
            clickedElement.parent().parent().parent().find('div[data-selected="true"]').removeClass('active');
            clickedGroup = parseInt(clickedElement.data().group);

            if (clickedElement.attr('data-selected') == 'true') {
                clearGroupSelect();
                $('button.next-step').prop('disabled', true);


            } else {
                clearGroupSelect();
                addToSum();
                setAsSelected();$('button.next-step').prop('disabled', false);
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
        money_sum_for_another_calc = necessitiesSum;

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

        htmlSumElement2.stop().animateNumber(
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
 * kalkulator 5 END
 */


/*
 * Skrypt wyświetlający okienko z informacją o wykorzystaniu ciasteczek (cookies)
 * 
 * Więcej informacji: http://webhelp.pl/artykuly/okienko-z-informacja-o-ciasteczkach-cookies/
 * 
 */

function WHCreateCookie(name, value, days) {
    var date = new Date();
    date.setTime(date.getTime() + (days*24*60*60*1000));
    var expires = "; expires=" + date.toGMTString();
    document.cookie = name+"="+value+expires+"; path=/";
}
function WHReadCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

window.onload = WHCheckCookies;

function WHCheckCookies() {
    if(WHReadCookie('cookies_accepted') != 'T') {
        var message_container = document.createElement('div');
        message_container.id = 'cookies-message-container';
        var html_code = '<div id="cookies-message" style="padding: 10px 0px; font-size: 13px; line-height: 18px; text-align: left; position: fixed; bottom: 0px; background-color: #dadada; width: 100%; z-index: 999;"><div class="container"><div class="row"><div class="col-sm-11"><span style="color: #d03a3a">Niniejsza strona internetowa wykorzystuje pliki cookie</span><br>Jeśli nie wyrażasz zgody aby były zapisywane na Twoim komputerze, zmień ustawienia swojej przeglądarki internetowej. Szczegółowe informacje znajdziesz w zakładce <a href="pdf/Prudential_zastrzezenia_prawne_i_polityka_cookies.pdf" target="_blank">zastrzeżenia prawne</a>.</div><div class="col-sm-1"><a href="javascript:WHCloseCookiesWindow();" id="accept-cookies-checkbox" name="accept-cookies" style="color: #000; display: inline-block; margin-left: 5px; text-decoration: none; cursor: pointer; float: right">zamknij <img src="img/icon-close.png"></a></div></div></div></div>';
        message_container.innerHTML = html_code;
        document.body.appendChild(message_container);
    }
}

function WHCloseCookiesWindow() {

    $('#cookies-message-container').remove();
    WHCreateCookie('cookies_accepted', 'T', 365);

}
var rolloverImageCloud = 'img/cloud-red.png';
var origImageCloud = 'img/cloud.png';
$(".cloud-container").hover(function() {
    $(this).find("img.cloud").attr("src", rolloverImageCloud);
    var icon_attr = $(this).find("img:not(.cloud)").attr('src').slice(0,-4);
    $(this).find("img:not(.cloud, .cloud-result)").attr("src", icon_attr + '-white.png');
}, function() {
    $(this).find("img.cloud").attr("src", origImageCloud);
    var icon_attr = $(this).find("img:not(.cloud)").attr('src').slice(0,-10);
    $(this).find("img:not(.cloud, .cloud-result)").attr("src", icon_attr + '.png');
});


function runConversion(id, obj, redirectURL) {
    mmConversionTag(id, obj, 'self', redirectURL);
}
