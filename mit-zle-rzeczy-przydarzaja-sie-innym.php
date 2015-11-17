<?php
//mit 10

require_once('libs/App.class.php');

Tpl::htmlHead(null, [
    'title' => 'Prudential | Mit | Złe rzeczy przydarzają się innym.',
    'desc' => 'Nie warto się skupiać na nieszczęściach na co dzień, ale warto być na nie przygotowanym, wykupując odpowiednie ubezpieczenie. Poważny wypadek czy choroba może znacznie utrudnić życie, również w wymiarze finansowym.'
]);
Tpl::nav();
?>


<div class="jumbotron border-top">
    <img src="img/mity/mit-zle-rzeczy-przydarzaja-sie-innym.jpg" alt="Mit. Złe rzeczy przydarzają się innym." class="img-responsive full-width hidden-xs hidden-sm">
    <img src="img/mity/mit-zle-rzeczy-przydarzaja-sie-innym-mobile.jpg" alt="Mit. Złe rzeczy przydarzają się innym." class="img-responsive full-width visible-xs visible-sm">

    <a href="mit-zawsze-bede-zdrowy-tak-jak-dzis" class="btn btn-left">
        <img src="img/icon-arrow-left.png" alt="">
        Poprzedni<br>mit
    </a>

    <a href="mit-panstwo-da-mi-dobra-emeryture" class="btn btn-right">
        <img src="img/icon-arrow-right.png" alt="">
        Następny<br>mit
    </a>
</div>

<div class="container-fluid">
    <div class="row row-flex row-centered row-margin">
        <div class="hidden-xs hidden-sm hidden-md col-lg-2 col-lg-offset-2">
            <img src="img/icon-plaster.png" alt="" class="headline-image img-responsive pull-right">
        </div>

        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-6">
            <div class="headline headline-left">
                <strong>A jak o tym nie pomyślisz, to się nie przydarzy?</strong>
                Rzeczywiście, nie warto skupiać się na nieszczęściach na co dzień. Ale na pewno warto być na nie
                przygotowanym. Bo nigdy nie wiadomo, kiedy mogą nas spotkać. A&nbsp;poważna choroba czy wypadek mogą
                bardzo utrudnić nam życie – również w wymiarze finansowym.
            </div>
        </div>
    </div>

    <header class="row border-top">
        <h1>Nie wszystko <strong>zależy od nas...</strong></h1>
    </header>

    <div class="row">
        <div class="row-height">
            <div class="hidden-xs hidden-sm col-md-2 col-md-height">&nbsp;</div>

            <div class="col-xs-12 col-md-3 col-md-height col-md-middle">
                <img src="img/ambulance.png" alt="" class="icon-ambulance img-responsive center-block">
            </div>

            <div class="col-md-5 col-md-height infotable">
                <div class="row">
                    <div class="row-height">
                        <div class="col-xs-4 col-xs-height col-xs-middle infotable-numbers">
                            35 tys.
                        </div>

                        <div class="col-xs-8 col-xs-height">
                            Tyle w Polsce wydarzyło się wypadków drogowych w 2014 r. – to blisko
                            <strong>100 wypadków każdego dnia</strong>. W&nbsp;tych wypadkach rany odniosło ponad 42 tys. osób<sup><a href="#przypisy">1</a></sup>.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-xs-4 col-xs-height col-xs-middle infotable-numbers">
                            67%
                        </div>

                        <div class="col-xs-8 col-xs-height">
                            Taki odsetek Polaków narażony jest na niebezpieczeństwo w pracy.
                            Niemal co dziesiąty jest narażony na bardzo poważne <strong>ryzyko utraty zdrowia lub życia</strong><sup><a href="#przypisy">2</a></sup>.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-xs-4 col-xs-height col-xs-middle infotable-numbers">
                            88 tys.
                        </div>

                        <div class="col-xs-8 col-xs-height">
                            Liczba <strong>wypadków przy pracy</strong> przekroczyła tę liczbę, w tym
                            262 zakończyło się śmiercią poszkodowanego<sup><a href="#przypisy">3</a></sup>.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-xs-4 col-xs-height col-xs-middle infotable-numbers">
                            17%
                        </div>

                        <div class="col-xs-8 col-xs-height">
                            Tyle wszystkich wypadków w Polsce stanowią <strong>wypadki domowe</strong><sup><a href="#przypisy">4</a></sup>.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-xs-4 col-xs-height col-xs-middle infotable-numbers">
                            6 mln
                        </div>

                        <div class="col-xs-8 col-xs-height">
                            <strong>Tylu Polaków jest hospitalizowanych</strong> co roku<sup><a href="#przypisy">5</a></sup>.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-xs-4 col-xs-height col-xs-middle infotable-numbers">
                            648 zł
                        </div>

                        <div class="col-xs-8 col-xs-height">
                            To od marca 2014 r. <strong>najniższe świadczenie</strong> z&nbsp;tytułu częściowej niezdolności do pracy<sup><a href="#przypisy">6</a></sup>.
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden-xs hidden-sm col-md-2 col-md-height">&nbsp;</div>
        </div>
    </div>

    <aside class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-6 disclaimer">
            <hr>

            <p>
                Na szczęście Polacy coraz częściej sięgają po ubezpieczenia, które pozwalają na spokojny sen ze
                świadomością, że w przypadku nieszczęśliwego wypadku czy poważnego zachorowania będą mieli zapewnione
                wsparcie finansowe, a gdyby ich zabrakło, najbliżsi będą mieli zapewnioną spokojną przyszłość.
            </p>
        </div>
    </aside>

    <div class="row row-filled-red">
        <div class="col-xs-12">
            <div class="text-center">
                <span class="btn-near-cta">Nie czekaj!</span>
                <p>
                    Umów się z nami na niezobowiązujące spotkanie w wybranym przez Ciebie miejscu i czasie.
                </p>
                <a href="https://formularz.prudential.pl/lead?lid=46929" class="btn btn-primary btn-white" target="_blank" data-trigger="versatag-click" data-url="<?php echo App::APP_URL; ?>versatag/46929">Zadbaj o ubezpieczenie <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>

    <?php
    Tpl::products();
    ?>

    <div class="row row-padded-vertical">
        <header>
            <h1>Zmierz się z <strong>innymi mitami</strong></h1>
        </header>
    </div>

    <div class="row myths-multibox">
        <div class="col-md-6">
            <figure>
                <a href="mit-zawsze-bede-zdrowy-tak-jak-dzis">
                    <img src="img/mity/mit-9-wide.jpg" alt="Mit. Zawsze będę zdrowy tak jak dziś" class="img-responsive full-width" />
                </a>
            </figure>
        </div>

        <div class="col-md-6">
            <figure>
                <a href="mit-panstwo-da-mi-dobra-emeryture">
                    <img src="img/mity/mit-1-wide.jpg" alt="Mit. Państwo da i dobrą emeryturę" class="img-responsive full-width" />
                </a>
            </figure>
        </div>
    </div>
</div>
    
<?php
Tpl::bottom();
Tpl::annotations([
    1 => '<a href="http://statystyka.policja.pl/st/ruch-drogowy/76562,Wypadki-drogowe-raporty-roczne.html" target="_blank">Wypadki Drogowe – Raporty roczne Policji, Wypadki drogowe w 2014 roku</a>, str. 6.',
    2 => '<a href="http://bezpieczniwpracy.pl/bezpieczenstwo-pracy-w-polsce/" target="_blank">Koalicja Bezpieczni w Pracy, Bezpieczeństwo Pracy w Polsce 2014</a>, lipiec 2014, str. 5.',
    3 => 'Główny Urząd Statystyczny, <a href="http://stat.gov.pl/obszary-tematyczne/rynek-pracy/warunki-pracy-wypadki-przy-pracy/wypadki-przy-pracy-w-2014-r-,3,18.html" target="_blank">Wypadki przy pracy w 2014 r.</a>, str. 1.',
    4 => 'Wielka Encyklopedia Medyczna, wyd. Agora.',
    5 => 'Główny Urząd Statystyczny, <a href="http://stat.gov.pl/obszary-tematyczne/zdrowie/zdrowie/zdrowie-i-ochrona-zdrowia-w-2013-r-,1,4.html" target="_blank">Zdrowie i ochrona zdrowia w 2013 r.</a>, str. 76.',
    6 => 'Zakład Ubezpieczeń Społecznych, <a href="http://www.zus.pl/default.asp?p=1&amp;id=52" target="_blank">Kwoty najniższych gwarantowanych świadczeń emerytalno-rentowych od 1 marca 2015 r.</a>, 25.08.2015 r.'
]);

Tpl::htmlFooter();
?>
