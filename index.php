<?php
require_once('libs/App.class.php');

Tpl::htmlHead();
Tpl::nav();
?>

<div class="jumbotron border-bottom-rsg" id="jumbotron-video">
    <div id="intro-placeholder">
        <img src="img/txt-kim-sa-mlodzi-bogowie.png" alt="Kim są młodzi bogowie?" class="img-responsive">

        <button class="btn btn-link btn-video" data-trigger="startTopVideo"><img src="img/btn-play.png" alt="Start"></button>
    </div>

    <video poster="img/top-video-placeholder.jpg?v=2" preload>
        <source src="video/prudential-mlodzi-bogowie.mp4"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
        <source src="video/prudential-mlodzi-bogowie.webm" type='video/webm; codecs="vp8, vorbis"'>
        <source src="video/prudential-mlodzi-bogowie.ogv"  type='video/ogg; codecs="theora, vorbis"'>
    </video>
</div>

<div class="container-fluid">
    <header class="row">
        <h1>Poznaj <strong>mity</strong> młodych bogów</h1>
        <p>
            Czasami trzymamy się ich, bo tak jest nam wygodniej. Bo mamy inne, ważniejsze lub pilniejsze sprawy.
            A&nbsp;może warto na chwilę się zatrzymać i przemyśleć swoje przekonania, zanim zmusi nas do tego rzeczywistość?
        </p>
    </header>

    <div class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1 myths-rows">
            <div class="myths-rows-insider">
                <div class="myth-box myth-box-type-a">
                    <figure class="myth-1 hidden-xs hidden-sm">
                        <a href="mit-panstwo-da-mi-dobra-emeryture">
                            <img src="img/mity/mit-1.jpg?v=2" alt="Państwo da mi dobrą emeryturę" class="img-responsive">
                        </a>

                        <div class="mask">
                            <img src="img/mity/mit-1-clean.jpg?v=2" alt="Państwo da mi dobrą emeryturę" class="img-responsive onhover">
                            <h2><strong>MIT #1</strong></h2>
                            <div class="info">Zobacz <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                            <a href="mit-panstwo-da-mi-dobra-emeryture" class="alllink"></a>
                        </div>
                    </figure>

                    <figure class="visible-xs visible-sm">
                        <a href="mit-panstwo-da-mi-dobra-emeryture"><img src="img/mity/mit-1.jpg?v=2" alt="Państwo da mi dobrą emeryturę" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-b">
                    <figure class="myth-2 hidden-xs hidden-sm">
                        <a href="mit-o-emeryturze-moge-pomyslec-pozniej">
                            <img src="img/mity/mit-2.jpg?v=2" alt="O emeryturze mogę pomyśleć później" class="img-responsive">
                        </a>

                        <div class="mask">
                            <img src="img/mity/mit-2-clean.jpg?v=2" alt="O emeryturze mogę pomyśleć później" class="img-responsive onhover">
                            <h2><strong>MIT #2</strong></h2>
                            <div class="info">Zobacz <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                            <a href="mit-o-emeryturze-moge-pomyslec-pozniej" class="alllink"></a>
                        </div>
                    </figure>
                    <figure class="visible-xs visible-sm">
                        <a href="mit-o-emeryturze-moge-pomyslec-pozniej"><img src="img/mity/mit-2.jpg?v=2" alt="O emeryturze mogę pomyśleć później" class="img-responsive"></a>
                    </figure>

                    <figure class="myth-4 hidden-xs hidden-sm">
                        <a href="mit-na-emeryturze-moje-potrzeby-beda-mniejsze">
                            <img src="img/mity/mit-4.jpg?v=2" alt="Na emeryturze moje potrzeby będą mniejsze" class="img-responsive">
                        </a>

                        <div class="mask">
                            <img src="img/mity/mit-4-clean.jpg?v=2" alt="Na emeryturze moje potrzeby będą mniejsze" class="img-responsive onhover">
                            <h2><strong>MIT #4</strong></h2>
                            <div class="info">Zobacz <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                            <a href="mit-na-emeryturze-moje-potrzeby-beda-mniejsze" class="alllink"></a>
                        </div>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-c">
                    <figure class="myth-3 hidden-xs hidden-sm">
                        <a href="mit-emerytura-nie-potrwa-dlugo">
                            <img src="img/mity/mit-3.jpg?v=2" alt="Emerytura nie potrwa długo" class="img-responsive">
                        </a>

                        <div class="mask">
                            <img src="img/mity/mit-3-clean.jpg?v=2" alt="Emerytura nie potrwa długo" class="img-responsive onhover">
                            <h2><strong>MIT #3</strong></h2>
                            <div class="info">Zobacz <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                            <a href="mit-emerytura-nie-potrwa-dlugo" class="alllink"></a>
                        </div>
                    </figure>
                    <figure class="visible-xs visible-sm">
                        <a href="mit-emerytura-nie-potrwa-dlugo"><img src="img/mity/mit-3.jpg?v=2" alt="Emerytura nie potrwa długo" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-c visible-xs visible-sm">
                    <figure class="myth-4">
                        <a href="mit-na-emeryturze-moje-potrzeby-beda-mniejsze"><img src="img/mity/mit-4.jpg?v=2" alt="Na emeryturze moje potrzeby będą mniejsze" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="clearfix"></div>

                <div class="myth-box myth-box-type-a">
                    <figure class="myth-5 hidden-xs hidden-sm">
                        <a href="mit-nie-stac-mnie-na-oszczedzanie">
                            <img src="img/mity/mit-5.jpg?v=2" alt="Nie stać mnie na oszczędzanie" class="img-responsive">
                        </a>

                        <div class="mask">
                            <img src="img/mity/mit-5-clean.jpg?v=2" alt="Nie stać mnie na oszczędzanie" class="img-responsive onhover">
                            <h2><strong>MIT #5</strong></h2>
                            <div class="info">Zobacz <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                            <a href="mit-nie-stac-mnie-na-oszczedzanie" class="alllink"></a>
                        </div>
                    </figure>
                    <figure class="myth-5 visible-xs visible-sm">
                        <a href="mit-nie-stac-mnie-na-oszczedzanie"><img src="img/mity/mit-5.jpg?v=2" alt="Nie stać mnie na oszczędzanie" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-d">
                    <figure class="myth-6 hidden-xs hidden-sm">
                        <a href="mit-ubezpieczenie-na-zycie-to-strata-pieniedzy">
                            <img src="img/mity/mit-6.jpg?v=2" alt="Ubezpieczenie na życie to strata pieniędzy" class="img-responsive">
                        </a>

                        <div class="mask">
                            <img src="img/mity/mit-6-clean.jpg?v=2" alt="Ubezpieczenie na życie to strata pieniędzy" class="img-responsive onhover">
                            <h2><strong>MIT #6</strong></h2>
                            <div class="info">Zobacz <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                            <a href="mit-ubezpieczenie-na-zycie-to-strata-pieniedzy" class="alllink"></a>
                        </div>
                    </figure>
                    <figure class="visible-xs visible-sm">
                        <a href="mit-ubezpieczenie-na-zycie-to-strata-pieniedzy"><img src="img/mity/mit-6.jpg?v=2" alt="Ubezpieczenie na życie to strata pieniędzy" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-e">
                    <figure class="myth-7 hidden-xs hidden-sm">
                        <a href="mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo">
                            <img src="img/mity/mit-7.jpg?v=2" alt="Dziecko jak dorośnie, od razu utrzyma się samo" class="img-responsive">
                        </a>

                        <div class="mask">
                            <img src="img/mity/mit-7-clean.jpg?v=2" alt="Dziecko jak dorośnie, od razu utrzyma się samo" class="img-responsive onhover">
                            <h2><strong>MIT #7</strong></h2>
                            <div class="info">Zobacz <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                            <a href="mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo" class="alllink"></a>
                        </div>
                    </figure>
                    <figure class="visible-xs visible-sm">
                        <a href="mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo"><img src="img/mity/mit-7.jpg?v=2" alt="Dziecko jak dorośnie, od razu utrzyma się samo" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="clearfix"></div>

                <div class="myth-box myth-box-type-a">
                    <figure class="myth-8 hidden-xs hidden-sm">
                        <a href="mit-o-przyszlosci-dziecka-moge-pomyslec-jak-bedzie-wieksze">
                            <img src="img/mity/mit-8.jpg?v=2" alt="O przyszłości dziecka mogę pomyśleć jak będzie większe" class="img-responsive">
                        </a>

                        <div class="mask">
                            <img src="img/mity/mit-8-clean.jpg?v=2" alt="O przyszłości dziecka mogę pomyśleć jak będzie większe" class="img-responsive onhover">
                            <h2><strong>MIT #8</strong></h2>
                            <div class="info">Zobacz <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                            <a href="mit-o-przyszlosci-dziecka-moge-pomyslec-jak-bedzie-wieksze" class="alllink"></a>
                        </div>
                    </figure>
                    <figure class="visible-xs visible-sm">
                        <a href="mit-o-przyszlosci-dziecka-moge-pomyslec-jak-bedzie-wieksze"><img src="img/mity/mit-8.jpg?v=2" alt="mit-o-przyszlosci-dziecka-moge-pomyslec-jak-bedzie-wieksze" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-f">
                    <figure class="myth-9 hidden-xs hidden-sm">
                        <a href="mit-zawsze-bede-zdrowy-tak-jak-dzis">
                            <img src="img/mity/mit-9.jpg?v=2" alt="Zawsze będę zdrwoy tak jak dziś" class="img-responsive">
                        </a>

                        <div class="mask">
                            <img src="img/mity/mit-9-clean.jpg?v=2" alt="Zawsze będę zdrwoy tak jak dziś" class="img-responsive onhover">
                            <h2><strong>MIT #9</strong></h2>
                            <div class="info">Zobacz <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                            <a href="mit-zawsze-bede-zdrowy-tak-jak-dzis" class="alllink"></a>
                        </div>
                    </figure>
                    <figure class="visible-xs visible-sm">
                        <a href="mit-zawsze-bede-zdrowy-tak-jak-dzis"><img src="img/mity/mit-9.jpg?v=2" alt="Zawsze będę zdrwoy tak jak dziś" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-g">
                    <figure class="myth-10 hidden-xs hidden-sm">
                        <a href="mit-zle-rzeczy-przydarzaja-sie-innym">
                            <img src="img/mity/mit-10.jpg?v=2" alt="Złe rzeczy przydarzają się innym" class="img-responsive">
                        </a>

                        <div class="mask">
                            <img src="img/mity/mit-10-clean.jpg?v=2" alt="Złe rzeczy przydarzają się innym" class="img-responsive onhover">
                            <h2><strong>MIT #10</strong></h2>
                            <div class="info">Zobacz <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                            <a href="mit-zle-rzeczy-przydarzaja-sie-innym" class="alllink"></a>
                        </div>
                    </figure>
                    <figure class="visible-xs visible-sm">
                        <a href="mit-zle-rzeczy-przydarzaja-sie-innym"><img src="img/mity/mit-10.jpg?v=2" alt="Złe rzeczy przydarzają się innym" class="img-responsive"></a>
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <div class="row collapse in" id="js-blue-man">
        <div class="col-xs-12 bg-blue-man">
            <div class="row">
                <div class="col-md-5 col-md-offset-2 blue-man-content">
                    <img src="img/txt-czy-jestes-mlodym-bogiem.png" alt="Czy jesteś młodym bogiem?" class="img-responsive">
                    <button class="btn btn-primary btn-special" data-trigger="init-quiz">Zrób test <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                </div>
            </div>
        </div>
    </div>

    <div id="quiz-section"
         class="row cycle-slideshow"
         data-cycle-timeout="0"
         data-cycle-slides="> div"
         data-cycle-log="false"
         data-cycle-auto-height="calc"
    >
        <div class="col-xs-12 quiz-q quiz-q-1 full-height" data-anim="EDGE-3094357563" data-anim-q="q1">
            <div class="row row-flex-md full-height">
                <div class="col-xs-12 col-md-2 quiz-position">
                    1/10
                </div>

                <div class="col-xs-12 col-md-5">
                    <div class="row row-flex row-centered full-height">
                        <div class="col-xs-12">
                            <img src="img/quiz/icon-coin-bag.png" alt="" class="img-responsive center-block">

                            <p>
                                Dostałeś premię w&nbsp;pracy. Brawo!
                                Co&nbsp;zrobisz z&nbsp;tymi pieniędzmi?
                            </p>

                            <div class="row"><!-- row-flex -->
                                <button class="btn btn-quiz" data-question="1" data-value="3">&raquo; Wreszcie zmienię samochód</button>
                                <button class="btn btn-quiz" data-question="1" data-value="4">&raquo; Wyjadę na wakacje</button>
                            </div>

                            <div class="row"><!-- row-flex -->
                                <button class="btn btn-quiz" data-question="1" data-value="2">&raquo; Kupię coś dzieciom</button>
                                <button class="btn btn-quiz" data-question="1" data-value="1">&raquo; Odłożę na konto</button>
                            </div>

                            <div class="col-xs-12">
                                <button class="btn btn-quiz-select-answer" disabled data-question-validate="1">
                                    <img src="img/quiz/icon-arrows-up.png" alt="" class="icon-arrows-up animation-pulse">
                                        <span>
                                            Zaznacz<br>
                                            odpowiedź
                                        </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="quiz-animation">
                    <div class="EDGE-3094357563"></div>
<!--                     <img src="img/quiz/q1-static.png" alt=""> -->
                </div>
            </div>
        </div>

        <div class="col-xs-12 quiz-q quiz-q-2 full-height" data-anim="EDGE-3105854034" data-anim-q="q2">
            <div class="row row-flex-md full-height">
                <div class="col-xs-12 col-md-2 quiz-position">
                    2/10
                </div>

                <div class="col-xs-12 col-md-5">
                    <div class="row row-flex-md row-centered full-height">
                        <div class="col-xs-12">
                            <img src="img/quiz/icon-envelope.png" alt="" class="img-responsive center-block">

                            <p>
                                Jesteś u swojej babci i&nbsp;listonosz właśnie przynosi jej emeryturę. 1300&nbsp;złotych.
                                Myślisz sobie:
                            </p>

                            <div class="row">
                                <button class="btn btn-quiz" data-question="2" data-value="3">&raquo; W sumie na emeryturze niewiele potrzeba</button>
                                <button class="btn btn-quiz" data-question="2" data-value="1">&raquo; Muszę zadbać o&nbsp;oszczędności na swoją emeryturę</button>
                            </div>

                            <div class="row">
                                <button class="btn btn-quiz" data-question="2" data-value="4">&raquo; O! Może babcia pożyczy 100&nbsp;zł</button>
                                <button class="btn btn-quiz" data-question="2" data-value="2">&raquo; Jak ta babcia daje radę?</button>
                            </div>

                            <div class="col-xs-12">
                                <button class="btn btn-quiz-select-answer" disabled data-question-validate="2">
                                    <img src="img/quiz/icon-arrows-up.png" alt="" class="icon-arrows-up animation-pulse">
                                        <span>
                                            Zaznacz<br>
                                            odpowiedź
                                        </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="quiz-animation">
                    <div class="EDGE-3105854034"></div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 quiz-q quiz-q-3 full-height" data-anim="EDGE-3109339741" data-anim-q="q3">
            <div class="row row-flex-md full-height">
                <div class="col-xs-12 col-md-2 quiz-position">
                    3/10
                </div>

                <div class="col-xs-12 col-md-5">
                    <div class="row row-flex row-centered full-height">
                        <div class="col-xs-12">
                            <img src="img/quiz/icon-basket.png" alt="" class="img-responsive center-block">

                            <p>
                                Jesteś na zakupach. Szukasz spodni, ale zaczęły się przeceny i&nbsp;jest świetna koszula.
                            </p>

                            <div class="row">
                                <button class="btn btn-quiz" data-question="3" data-value="3">&raquo; Biorę, za tyle grzech nie kupić</button>
                                <button class="btn btn-quiz" data-question="3" data-value="2">&raquo; Eee, po co mi kolejna koszula</button>
                            </div>

                            <div class="row">
                                <button class="btn btn-quiz" data-question="3" data-value="4">&raquo; Wpadam w szał zakupów i&nbsp;kupuję jeszcze kurtkę, buty i&nbsp;narty</button>
                                <button class="btn btn-quiz" data-question="3" data-value="1">&raquo; Odkładam spodnie, które wybrałem, ale sprawdzam jeszcze, czy nie ma podobnych i&nbsp;tańszych</button>
                            </div>

                            <div class="col-xs-12">
                                <button class="btn btn-quiz-select-answer" disabled data-question-validate="3">
                                    <img src="img/quiz/icon-arrows-up.png" alt="" class="icon-arrows-up animation-pulse">
                                        <span>
                                            Zaznacz<br>
                                            odpowiedź
                                        </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="quiz-animation">
                    <div class="EDGE-3109339741"></div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 quiz-q quiz-q-4 full-height" data-anim="EDGE-3110479232" data-anim-q="q4">
            <div class="row row-flex-md full-height">
                <div class="col-xs-12 col-md-2 quiz-position">
                    4/10
                </div>

                <div class="col-xs-12 col-md-5">
                    <div class="row row-flex row-centered full-height">
                        <div class="col-xs-12">
                            <img src="img/quiz/icon-signpost.png" alt="" class="img-responsive center-block">

                            <p>
                                Co robisz w&nbsp;weekend?
                            </p>

                            <div class="row">
                                <button class="btn btn-quiz" data-question="4" data-value="1">&raquo; Planuję bliższą i&nbsp;dalszą przyszłość</button>
                                <button class="btn btn-quiz" data-question="4" data-value="3">&raquo; Jeżdżę po Polsce, a&nbsp;czasem i&nbsp;dalej</button>
                            </div>

                            <div class="row ">
                                <button class="btn btn-quiz" data-question="4" data-value="4">&raquo; Po to w&nbsp;tygodniu zarabiam, żeby w&nbsp;weekend wydawać!</button>
                                <button class="btn btn-quiz" data-question="4" data-value="2">&raquo; Spotkania ze znajomymi, książka, film, spacer, sport</button>
                            </div>

                            <div class="col-xs-12">
                                <button class="btn btn-quiz-select-answer" disabled data-question-validate="4">
                                    <img src="img/quiz/icon-arrows-up.png" alt="" class="icon-arrows-up animation-pulse">
                                        <span>
                                            Zaznacz<br>
                                            odpowiedź
                                        </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="quiz-animation">
                    <div class="EDGE-3110479232"></div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 quiz-q quiz-q-5 full-height" data-anim="EDGE-3111705464" data-anim-q="q5">
            <div class="row row-flex-md full-height">
                <div class="col-xs-12 col-md-2 quiz-position">
                    5/10
                </div>

                <div class="col-xs-12 col-md-5">
                    <div class="row row-flex row-centered full-height">
                        <div class="col-xs-12">
                            <img src="img/quiz/icon-hat.png" alt="" class="img-responsive center-block">

                            <p>
                                Jakim będziesz emerytem?
                            </p>

                            <div class="row">
                                <button class="btn btn-quiz" data-question="5" data-value="2">&raquo; Rozrywkowym, wiecznie na wakacjach</button>
                                <button class="btn btn-quiz" data-question="5" data-value="1">&raquo; Rodzinny mentor – wspierający dzieci i&nbsp;wnuki wiedzą i&nbsp;doświadczeniem</button>
                            </div>

                            <div class="row">
                                <button class="btn btn-quiz" data-question="5" data-value="3">&raquo; Ja? Nie dożyję!</button>
                                <button class="btn btn-quiz" data-question="5" data-value="4">&raquo; Zamierzam się nie zestarzeć!</button>
                            </div>

                            <div class="col-xs-12">
                                <button class="btn btn-quiz-select-answer" disabled data-question-validate="5">
                                    <img src="img/quiz/icon-arrows-up.png" alt="" class="icon-arrows-up animation-pulse">
                                        <span>
                                            Zaznacz<br>
                                            odpowiedź
                                        </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="quiz-animation">
                    <div class="EDGE-3111705464"></div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 quiz-q quiz-q-6 full-height" data-anim="EDGE-3183171165" data-anim-q="q6">
            <div class="row row-flex-md full-height">
                <div class="col-xs-12 col-md-2 quiz-position">
                    6/10
                </div>

                <div class="col-xs-12 col-md-5">
                    <div class="row row-flex row-centered full-height">
                        <div class="col-xs-12">
                            <img src="img/quiz/icon-kid.png" alt="" class="img-responsive center-block">

                            <p>
                                Jak zamierzasz wspierać swoje dzieci, kiedy będą wchodzić w&nbsp;dorosłość?
                            </p>

                            <div class="row">
                                <button class="btn btn-quiz" data-question="6" data-value="3">&raquo; Przecież wejście w dorosłość dużo nie kosztuje</button>
                                <button class="btn btn-quiz" data-question="6" data-value="1">&raquo; Oszczędzam dla nich pieniądze</button>
                            </div>

                            <div class="row">
                                <button class="btn btn-quiz" data-question="6" data-value="2">&raquo; Znajdę sposób na to, żeby miały dobry start</button>
                                <button class="btn btn-quiz" data-question="6" data-value="4">&raquo; Mam nadzieję, że to one będą mnie wspierać</button>
                            </div>

                            <div class="col-xs-12">
                                <button class="btn btn-quiz-select-answer" disabled data-question-validate="6">
                                    <img src="img/quiz/icon-arrows-up.png" alt="" class="icon-arrows-up animation-pulse">
                                        <span>
                                            Zaznacz<br>
                                            odpowiedź
                                        </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="quiz-animation">
                    <div class="EDGE-3183171165"></div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 quiz-q quiz-q-7 full-height" data-anim="EDGE-3184706548" data-anim-q="q7">
            <div class="row row-flex-md full-height">
                <div class="col-xs-12 col-md-2 quiz-position">
                    7/10
                </div>

                <div class="col-xs-12 col-md-5">
                    <div class="row row-flex row-centered full-height">
                        <div class="col-xs-12">
                            <img src="img/quiz/icon-doctor.png" alt="" class="img-responsive center-block">

                            <p>
                                Kiedy ostatnio robiłeś sobie badania kontrolne?
                            </p>

                            <div class="row">
                                <button class="btn btn-quiz" data-question="7" data-value="4">&raquo; Po co? Na coś trzeba przecież umrzeć</button>
                                <button class="btn btn-quiz" data-question="7" data-value="3">&raquo; Na komisji wojskowej</button>
                            </div>

                            <div class="row">
                                <button class="btn btn-quiz" data-question="7" data-value="1">&raquo; Niedawno / mam już umówioną wizytę</button>
                                <button class="btn btn-quiz" data-question="7" data-value="2">&raquo; Jakiś czas temu</button>
                            </div>

                            <div class="col-xs-12">
                                <button class="btn btn-quiz-select-answer" disabled data-question-validate="7">
                                    <img src="img/quiz/icon-arrows-up.png" alt="" class="icon-arrows-up animation-pulse">
                                        <span>
                                            Zaznacz<br>
                                            odpowiedź
                                        </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="quiz-animation">
                    <div class="EDGE-3184706548"></div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 quiz-q quiz-q-8 full-height" data-anim="EDGE-3185708298" data-anim-q="q8">
            <div class="row row-flex-md full-height">
                <div class="col-xs-12 col-md-2 quiz-position">
                    8/10
                </div>

                <div class="col-xs-12 col-md-5">
                    <div class="row row-flex row-centered full-height">
                        <div class="col-xs-12">
                            <img src="img/quiz/icon-bulb.png" alt="" class="img-responsive center-block">

                            <p>
                                Twój plan na przyszłość to:
                            </p>

                            <div class="row">
                                <button class="btn btn-quiz" data-question="8" data-value="4">&raquo; Wygram w totka – jestem w czepku urodzony</button>
                                <button class="btn btn-quiz" data-question="8" data-value="2">&raquo; Zainwestuję na giełdzie – zwróci się trzykrotnie!</button>
                            </div>

                            <div class="row">
                                <button class="btn btn-quiz" data-question="8" data-value="1">&raquo; „Nie wszystkie jajka do jednego koszyka” zgodnie z&nbsp;powiedzeniem dziadka – oszczędzam na kilka sposobów</button>
                                <button class="btn btn-quiz" data-question="8" data-value="3">&raquo; Awansuję jeszcze z dwa, trzy razy i zacznę odkładać</button>
                            </div>

                            <div class="col-xs-12">
                                <button class="btn btn-quiz-select-answer" disabled data-question-validate="8">
                                    <img src="img/quiz/icon-arrows-up.png" alt="" class="icon-arrows-up animation-pulse">
                                        <span>
                                            Zaznacz<br>
                                            odpowiedź
                                        </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="quiz-animation">
                    <div class="EDGE-3185708298"></div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 quiz-q quiz-q-9 full-height" data-anim="EDGE-3187922298" data-anim-q="q9">
            <div class="row row-flex-md-md full-height">
                <div class="col-xs-12 col-md-2 quiz-position">
                    9/10
                </div>

                <div class="col-xs-12 col-md-5">
                    <div class="row row-flex row-centered full-height">
                        <div class="col-xs-12">
                            <img src="img/quiz/icon-earth.png" alt="" class="img-responsive center-block">

                            <p>
                                W jaki sposób podchodzisz do życia?
                            </p>

                            <div class="row">
                                <button class="btn btn-quiz" data-question="9" data-value="4">&raquo; Raz się żyje / Carpe diem i&nbsp;do przodu!</button>
                                <button class="btn btn-quiz" data-question="9" data-value="2">&raquo; Tylko wakacje i większe wydatki planuję z&nbsp;wyprzedzeniem</button>
                            </div>

                            <div class="row">
                                <button class="btn btn-quiz" data-question="9" data-value="1">&raquo; Ważne, by mieć plan na każdą ewentualność</button>
                                <button class="btn btn-quiz" data-question="9" data-value="3">&raquo; Jakoś zawsze udaje mi się wyjść na prostą</button>
                            </div>

                            <div class="col-xs-12">
                                <button class="btn btn-quiz-select-answer" disabled data-question-validate="9">
                                    <img src="img/quiz/icon-arrows-up.png" alt="" class="icon-arrows-up animation-pulse">
                                        <span>
                                            Zaznacz<br>
                                            odpowiedź
                                        </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="quiz-animation">
                    <div class="EDGE-3187922298"></div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 quiz-q quiz-q-10 full-height" data-anim="EDGE-3188618048" data-anim-q="q10">
            <div class="row row-flex-md full-height">
                <div class="col-xs-12 col-md-2 quiz-position">
                    10/10
                </div>

                <div class="col-xs-12 col-md-5">
                    <div class="row row-flex row-centered full-height">
                        <div class="col-xs-12">
                            <img src="img/quiz/icon-speaker.png" alt="" class="img-responsive center-block">

                            <p>
                                Oglądasz wiadomości i&nbsp;słyszysz, że powódź zalała komuś dom. Twoja pierwsza myśl to:
                            </p>

                            <div class="row">
                                <button class="btn btn-quiz" data-question="10" data-value="4">&raquo; Takie rzeczy NIGDY mi się nie przydarzą</button>
                                <button class="btn btn-quiz" data-question="10" data-value="2">&raquo; Gdyby to był mój dom, to bez kolejnego kredytu nie dam rady</button>
                            </div>

                            <div class="row">
                                <button class="btn btn-quiz" data-question="10" data-value="3">&raquo; Przecież państwo powinno mu pomóc</button>
                                <button class="btn btn-quiz" data-question="10" data-value="1">&raquo; Dobrze, że ja mam ubezpieczenie</button>
                            </div>

                            <div class="col-xs-12">
                                <button class="btn btn-quiz-select-answer" disabled data-question-validate="10" data-is-final="1">
                                    <img src="img/quiz/icon-arrows-up.png" alt="" class="icon-arrows-up animation-pulse">
                                        <span>
                                            Zaznacz<br>
                                            odpowiedź
                                        </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="quiz-animation">
                    <div class="EDGE-3188618048"></div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 quiz-q quiz-result quiz-result-1 border-top full-height">
            <div class="row">
                <button type="button" class="btn btn-left hidden-xs hidden-sm" data-trigger="quiz-restart">
                    <img src="img/icon-arrow-left-red.png" alt="">
                    Jeszcze raz
                </button>

                <div class="col-xs-12 col-md-1">
                    <img src="img/quiz/txt-twoj-wynik-1.png" alt="Twój wynik" class="img-responsive quiz-txt-your-result">
                </div>


                <div class="col-xs-12 col-md-7 quiz-result-content">
                    <img src="img/quiz/icon-piggybank.png" alt="" class="img-responsive center-block">

                    <p class="quiz-result-pre-title">
                        Jest w Tobie ekstremalnie mało młodego&nbsp;boga.
                    </p>

                    <div class="quiz-result-title">Człowiek rozsądek</div>

                    <p>
                        Chodzący rozsądek. Młody bóg lubi wydawać, żyć teraz. A&nbsp;o&nbsp;Tobie można by zrobić
                        komiks i&nbsp;nazwać go „Człowiek Rozsądek”. Sądząc po Twojej postawie, pracujesz w jakiejś instytucji finansowej.
                        Albo finanse to Twoje hobby.
                    </p>

                    <p>
                        Dobrze wiesz, o&nbsp;co chodzi
                        w oszczędzaniu i jak ważne jest, by być zabezpieczonym na przyszłość.
                    </p>

                    <p>
                        Pewnie już jesteś nawet przygotowany i masz wykupione jakieś produkty oszczędnościowe. Może chciałbyś je porównać z&nbsp;naszymi.
                        Ktoś, kto podchodzi do wydatków tak ostrożnie jak Ty, na pewno lubi też porównywać różne opcje.
                    </p>

                    <button type="button" class="btn btn-left visible-xs visible-sm" data-trigger="quiz-restart">
                        <img src="img/icon-arrow-left-red.png" alt="">
                        Jeszcze raz?
                    </button>
                </div>
            </div>

            <div class="row quiz-result-red">
                <div class="col-xs-12 col-md-7 col-md-offset-1">
                    Może to dobry moment, żeby umówić się z naszym doradcą!<br class="hidden-xs">
                    On Ci o wszystkim opowie, a Ty zdecydujesz.

                    <div class="cta-button-container">
                        <a href="https://formularz.prudential.pl/lead?lid=45649" class="btn btn-primary btn-white">Skontaktuj się z nami <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                    </div>
                </div>
            </div>

            <div class="quiz-animation">
                <img src="img/quiz/result-1.png" alt="" class="img-responsive static-image">
            </div>
        </div>

        <div class="col-xs-12 quiz-q quiz-result quiz-result-2 border-top full-height">
            <div class="row">
                <button type="button" class="btn btn-left hidden-xs hidden-sm" data-trigger="quiz-restart">
                    <img src="img/icon-arrow-left-red.png" alt="">
                    Jeszcze raz?
                </button>

                <div class="col-xs-12 col-md-2">
                    <img src="img/quiz/txt-twoj-wynik-1.png" alt="Twój wynik" class="img-responsive quiz-txt-your-result">
                </div>

                <div class="col-xs-12 col-md-6 col-lg-5 quiz-result-content">
                    <img src="img/quiz/icon-zoom.png" alt="" class="img-responsive center-block">

                    <p class="quiz-result-pre-title">
                        Jest w Tobie 20% młodego boga.
                    </p>

                    <div class="quiz-result-title">Permanentny Inwigilator</div>

                    <p>
                        Podchodzisz do wydatków bardzo ostrożnie. Lubisz mieć nad wszystkim kontrolę.
                        Nie lubisz sytuacji, w których nie wiesz, co się wydarzy.
                    </p>

                    <p>
                        Starasz się nie ryzykować
                        i być zawsze przygotowanym. Krótko mówiąc, wiesz, jak ważne jest, żeby przezornie
                        myśleć o&nbsp;przyszłości.
                    </p>

                    <p>
                        Zupełnie odwrotnie niż robią to młodzi bogowie.
                        Ale czy poza myśleniem o przyszłości podjąłeś już działania potrzebne
                        do jej zabezpieczenia?
                    </p>

                    <button type="button" class="btn btn-left visible-xs visible-sm" data-trigger="quiz-restart">
                        <img src="img/icon-arrow-left-red.png" alt="">
                        Jeszcze raz?
                    </button>
                </div>
            </div>

            <div class="row quiz-result-red">
                <div class="col-xs-12 col-md-8 col-md-offset-1 col-lg-5 col-lg-offset-2">
                    Wskaż, co jest dla Ciebie ważne:

                    <div class="cta-button-container">
                        <a href="emerytura-bez-obaw" class="btn btn-link btn-white">Emerytura bez obaw <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                        <a href="ochrona-zdrowia" class="btn btn-link btn-white">Ochrona zdrowia <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                        <a href="przyszlosc-dziecka" class="btn btn-link btn-white">Przyszłość dziecka <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                    </div>
                </div>
            </div>

            <div class="quiz-animation">
                <img src="img/quiz/result-2.png" alt="" class="img-responsive static-image">
            </div>
        </div>

        <div class="col-xs-12 quiz-q quiz-result quiz-result-3 border-top full-height">
            <div class="row">
                <button type="button" class="btn btn-left hidden-xs hidden-sm" data-trigger="quiz-restart">
                    <img src="img/icon-arrow-left-red.png" alt="">
                    Jeszcze raz
                </button>

                <div class="col-xs-12 col-md-2">
                    <img src="img/quiz/txt-twoj-wynik-3.png" alt="Twój wynik" class="img-responsive quiz-txt-your-result">
                </div>

                <div class="col-xs-12 col-md-6 col-lg-5 quiz-result-content">
                    <img src="img/quiz/icon-sun.png" alt="" class="img-responsive center-block">

                    <p class="quiz-result-pre-title">
                        Jest w Tobie 50% młodego boga.
                    </p>

                    <div class="quiz-result-title">Trochę bóg, trochę niebóg</div>

                    <p>
                        W niektórych sytuacjach racjonalny, w innych puszczasz wodze fantazji.
                        Być może jesteś właśnie w fazie przejściowej?
                        Do tej pory żyłeś jak prawdziwy młody bóg, ale zacząłeś sobie zdawać sprawę z&nbsp;powagi
                        sytuacji i&nbsp;się trochę hamować?
                    </p>

                    <p>
                        A może odwrotnie. Do tej pory żyłeś według bardzo ostrożnych zasad finansowych,
                        ale zaczęło Ci się trochę lepiej powodzić i&nbsp;postanowiłeś trochę popuścić pasa?
                    </p>

                    <button type="button" class="btn btn-left visible-xs visible-sm" data-trigger="quiz-restart">
                        <img src="img/icon-arrow-left-red.png" alt="">
                        Jeszcze raz?
                    </button>
                </div>
            </div>

            <div class="row quiz-result-red">
                <div class="col-xs-12 col-md-8 col-md-offset-1 col-lg-5 col-lg-offset-2">
                    Skorzystaj z kalkulatorów na tej stronie i przekonaj się, którą drogę wybrać.

                    <div class="cta-button-container">
                        <a href="mit-panstwo-da-mi-dobra-emeryture#kalkulator" class="btn btn-link btn-white">Chwila prawdy <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                        <a href="mit-o-emeryturze-moge-pomyslec-pozniej#kalkulator" class="btn btn-link btn-white">Im wcześniej, tym lepiej <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                        <a href="mit-na-emeryturze-moje-potrzeby-beda-mniejsze#kalkulator" class="btn btn-link btn-white">Projekt emerytura <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                    </div>
                </div>
            </div>

            <div class="quiz-animation">
                <img src="img/quiz/result-3.png" alt="" class="img-responsive static-image">
            </div>
        </div>

        <div class="col-xs-12 quiz-q quiz-result quiz-result-4 border-top full-height">
            <div class="row">
                <button type="button" class="btn btn-left hidden-xs hidden-sm" data-trigger="quiz-restart">
                    <img src="img/icon-arrow-left-red.png" alt="">
                    Jeszcze raz
                </button>

                <div class="col-xs-12 col-md-2">
                    <img src="img/quiz/txt-twoj-wynik-3.png" alt="Twój wynik" class="img-responsive quiz-txt-your-result">
                </div>

                <div class="col-xs-12 col-md-6 col-lg-5 quiz-result-content">
                    <img src="img/quiz/icon-bonus.png" alt="" class="img-responsive center-block">

                    <p class="quiz-result-pre-title">
                        Jest w Tobie 70% młodego boga.
                    </p>

                    <div class="quiz-result-title">Prokrastynator Amator</div>

                    <p>
                        Musisz uważać. Młody bóg jest w Tobie dość silny. Nie jesteś może przewodniczącym ogólnopolskiego klubu hedonistów, ale widać, że czasami zapominasz, że trzeba się zabezpieczyć na przyszłość. Albo nawet nie zapominasz, lecz oddalasz tę myśl od siebie.
                        Jest tak, prawda? Wiesz, że powinieneś oszczędzać, ale codziennie myślisz sobie,
                        że zaczniesz jutro. Bo ciągle wypadają jakieś wydatki, bo fajnie byłoby jeszcze gdzieś
                        wyjechać, po następnej podwyżce, po świętach.
                    </p>

                    <p>
                        Oszczędzanie naprawdę nie jest takie trudne, jak Ci się wydaje. I to wcale nie kosztem
                        wielkich wyrzeczeń. Pieniądze zaoszczędzone dzisiaj mogą zarabiać na Twoją przyszłość
                        i wyznaczone długoterminowe cele, jak edukacja dzieci, budowa domu czy też zabezpieczenie emerytalne.
                        Im szybciej zaczniesz systematycznie i&nbsp;konsekwentnie inwestować określoną kwotę, tym większy będzie zgromadzony kapitał po latach.
                    </p>

                    <button type="button" class="btn btn-left visible-xs visible-sm" data-trigger="quiz-restart">
                        <img src="img/icon-arrow-left-red.png" alt="">
                        Jeszcze raz?
                    </button>
                </div>
            </div>

            <div class="row quiz-result-red">
                <div class="col-xs-12 col-md-8 col-md-offset-1 col-lg-5 col-lg-offset-2">
                    <div class="cta-button-container">
                        <a href="emerytura-bez-obaw" class="btn btn-link btn-white">Emerytura bez obaw <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                        <a href="ochrona-zdrowia" class="btn btn-link btn-white">Ochrona zdrowia <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                        <a href="przyszlosc-dziecka" class="btn btn-link btn-white">Przyszłość dziecka <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                    </div>
                </div>
            </div>

            <div class="quiz-animation">
                <img src="img/quiz/result-4.png" alt="" class="img-responsive static-image">
            </div>
        </div>

        <div class="col-xs-12 quiz-q quiz-result quiz-result-5 border-top full-height">
            <div class="row">
                <button type="button" class="btn btn-left hidden-xs hidden-sm" data-trigger="quiz-restart">
                    <img src="img/icon-arrow-left-red.png" alt="">
                    Jeszcze raz
                </button>

                <div class="col-xs-12 col-md-1">
                    <img src="img/quiz/txt-twoj-wynik-5.png" alt="Twój wynik" class="img-responsive quiz-txt-your-result">
                </div>

                <div class="col-xs-12 col-md-6 col-lg-5 quiz-result-content">
                    <img src="img/quiz/icon-rocket.png" alt="" class="img-responsive center-block">

                    <p class="quiz-result-pre-title">
                        Jest w Tobie 100% młodego boga.
                    </p>

                    <div class="quiz-result-title">Bóg Młodych Bogów</div>

                    <p>
                        Proszę usiąść. Mamy złe wieści. Diagnoza jest jednoznaczna. Jesteś młodym bogiem.
                        Nie da się tego dłużej ukrywać. Żyjesz tu i teraz, lubisz zarabiać i lubisz wydawać.
                    </p>

                    <p>
                        Zapewne nie lubisz, kiedy inni mówią Ci, że powinieneś trochę ostrożniej podchodzić do swoich
                        finansów? Ale pomyśl o tym w ten sposób: doszedłeś tam, gdzie jesteś, bo dobrze wiedziałeś,
                        czego chcesz, dotarłeś do pewnego celu, więc teraz możesz żyć jak młody bóg.
                    </p>

                    <p>
                        Może kolejnym celem mogłoby być zabezpieczenie tego stanu?
                        Upewnienie się, że na emeryturze też będziesz żyć jak młody bóg.
                        Że Twoje dzieci będą miały start w dorosłość, jak młodzi bogowie.
                        Że w razie wypadku nadal będziesz mógł być młodym bogiem dla swojej rodziny?
                    </p>

                    <button type="button" class="btn btn-left visible-xs visible-sm" data-trigger="quiz-restart">
                        <img src="img/icon-arrow-left-red.png" alt="">
                        Jeszcze raz?
                    </button>
                </div>
            </div>

            <div class="row quiz-result-red">
                <div class="col-xs-12 col-md-8 col-lg-5 col-lg-offset-1">
                    <div class="cta-button-container">
                        <a href="emerytura-bez-obaw" class="btn btn-link btn-white">Emerytura bez obaw <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                        <a href="ochrona-zdrowia" class="btn btn-link btn-white">Ochrona zdrowia <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                        <a href="przyszlosc-dziecka" class="btn btn-link btn-white">Przyszłość dziecka <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                    </div>
                </div>
            </div>

            <div class="quiz-animation">
                <img src="img/quiz/result-5.png" alt="" class="img-responsive static-image">
            </div>
        </div>
    </div>

    <?php
    Tpl::products();
    ?>

    <div class="row row-filled-red">
        <div class="col-xs-12">
            <div class="text-center">
                <span class="btn-near-cta">Zrób pierwszy krok!</span>
                <p>Umów się z naszym Konsultantem. Pomożemy Ci wybrać rozwiązanie dopasowane do Twoich potrzeb i celów.</p>
                <a href="https://formularz.prudential.pl/lead?lid=45397" class="btn btn-primary btn-white" target="_blank" data-trigger="run-conversion" data-id="798548">Skontaktuj się z nami <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
</div>

<?php
Tpl::bottom();
Tpl::htmlFooter();
?>
