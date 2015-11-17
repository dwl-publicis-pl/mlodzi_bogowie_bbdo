<?php
//mit 9

require_once('libs/App.class.php');

Tpl::htmlHead(null, [
    'title' => 'Prudential | Mit | Zawsze będę zdrowy tak jak dziś',
    'desc' => 'Wiecznie młodym można być, ale niestety tylko duchem. Dbając o siebie i swoją kondycję zmniejszamy ryzyko pojawienia się problemów ze zdrowiem, ale nie mamy wpływu na wszystko. Warto byc przygotowanym, wykupić ubezpieczenie.'
]);
Tpl::nav();
?>


<div class="jumbotron border-top">
    <img src="img/mity/mit-zawsze-bede-zdrowy-tak-jak-dzis.jpg" alt="Mit. Zawsze będę zdrowy tak jak dziś." class="img-responsive full-width hidden-xs hidden-sm">
    <img src="img/mity/mit-zawsze-bede-zdrowy-tak-jak-dzis-mobile.jpg" alt="Mit. Zawsze będę zdrowy tak jak dziś." class="img-responsive full-width visible-xs visible-sm">

    <a href="mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo" class="btn btn-left">
        <img src="img/icon-arrow-left.png" alt="">
        Poprzedni<br>mit
    </a>

    <a href="mit-zle-rzeczy-przydarzaja-sie-innym" class="btn btn-right">
        <img src="img/icon-arrow-right.png" alt="">
        Następny<br>mit
    </a>
</div>

<div class="container-fluid">
    <div class="row row-flex row-centered row-margin">
        <div class="hidden-xs hidden-sm hidden-md col-lg-2 col-lg-offset-2">
            <img src="img/icon-rescue-bag.png" alt="" class="headline-image img-responsive pull-right">
        </div>

        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-6">
            <div class="headline headline-left">
                <div>
                    Wiecznie młodym można być... ale niestety tylko duchem. Dbając codziennie o&nbsp;nasze zdrowie
                    i&nbsp;kondycję, możemy oczywiście zmniejszać ryzyko pojawienia się problemów ze zdrowiem.
                    Ale na wszystko nie mamy wpływu, a życie potrafi zaskakiwać. Aż 40% z nas zna kogoś, kto jest
                    lub był poważnie chory<sup><a href="#przypisy">1</a></sup>.
                </div>

                <div>
                    Lepiej więc pomyśleć o tym i zabezpieczyć się, zanim  choroba się pojawi, żeby w&nbsp;takim
                    przypadku móc się skupić na leczeniu, a nie na tym, jak zdobyć potrzebne na to pieniądze.
                </div>
            </div>
        </div>
    </div>

    <div class="row border-top row-padded-vertical">
        <header>
            <h1>Co nam <strong>najczęściej zagraża?</strong></h1>
            <hr>
        </header>
    </div>

    <div class="row main-info-table main-info-table-mod-2">
        <div class="col-xs-12 col-md-10 col-md-offset-1">
            <div class="row">
                <div class="row-height">
                    <div class="col-xs-12 col-md-2 col-md-height col-md-middle">
                        <img src="img/icon-sad.png" alt="" class="img-responsive center-block">
                    </div>

                    <div class="col-xs-12 col-md-3 col-md-height">
                        <h2 class="h2-mod-1">Rak</h2>

                        <p>
                            Niestety, statystyki nie nastrajają optymistycznie. Wzrasta nie tylko liczba nowych zachorowań
                            spowodowanych nowotworami, ale także liczba zgonów. W 2013 r. nowotwory były
                            przyczyną ponad 24% zgonów<sup><a href="#przypisy">2</a></sup>. A według raportu Światowej Organizacji Zdrowia liczba chorych na
                            raka wzrośnie aż o 70% w&nbsp;ciągu najbliższych 20 lat<sup><a href="#przypisy">3</a></sup>. Pamiętaj, że zdrowy tryb życia i profilaktyka
                            pomagają w zwalczaniu przyczyn nowotworów.
                        </p>
                    </div>

                    <div class="col-xs-12 col-md-2 col-md-height col-md-middle">
                        <img src="img/icon-hearth-cardio-rotated.png" alt="" class="img-responsive center-block">
                    </div>

                    <div class="col-xs-12 col-md-3 col-md-height">
                        <h2 class="h2-mod-1">Serce</h2>

                        <p>
                            Choroby układu krążenia są najczęstszą przyczyną przedwczesnych zgonów w Polsce oraz
                            wiodącą przyczyną okresowej niezdolności do pracy. W 2011 r. z&nbsp;powodu chorób układu krążenia
                            zmarło ponad 90 tys. kobiet i blisko 80 tys. mężczyzn, co stanowi odpowiednio 40% i 51%
                            wszystkich przyczyn zgonów w Polsce<sup><a href="#przypisy">4</a></sup>.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row-height">
                    <div class="col-xs-12 col-md-2 col-md-height col-md-middle">
                        <img src="img/icon-burger-2.png" alt="" class="img-responsive center-block">
                    </div>

                    <div class="col-xs-12 col-md-3 col-md-height">
                        <h2 class="h2-mod-1">Otyłość</h2>

                        <p>
                            Siedzący tryb życia, brak czasu na aktywność fizyczną, stres i&nbsp;wszechobecna, przetworzona
                            przemysłowo żywność odpowiadają również za to, że coraz większej liczbie osób doskwiera
                            otyłość. Już ponad 20% dzieci w wieku szkolnym ma nadwagę. A wśród dorosłych statystyki
                            są jeszcze gorsze – problem ten dotyczy odpowiednio aż 64% mężczyzn i 49% kobiet<sup><a href="#przypisy">5</a></sup>. Otyłość
                            prowadzi z kolei do licznych powikłań, m.in. tych związanych z&nbsp;układem krążenia.
                        </p>
                    </div>

                    <div class="col-xs-12 col-md-2 col-md-height col-md-middle">
                        <img src="img/icon-virus.png" alt="" class="img-responsive center-block">
                    </div>

                    <div class="col-xs-12 col-md-3 col-md-height">
                        <h2 class="h2-mod-1">Groźne wirusy i&nbsp;bakterie</h2>

                        <p>
                            Wiele osób nie wie, że nawet po zwykłej grypie powikłania mogą okazać się groźne w skutkach.
                            Zapalenie płuc, zapalenie mięśnia sercowego, zapalenie mózgu i opon mózgowych – to najpoważniejsze z&nbsp;nich.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="row border-top">
        <h1><strong>Zasiłek?</strong></h1>
        <hr>
        <p>
            Od marca 2014 r. najniższe świadczenie z tytułu częściowej niezdolności do pracy wynosi zaledwie 648&nbsp;zł<sup><a href="#przypisy">6</a></sup>.
            Taka kwota z pewnością nie wystarczy na przeżycie, nie wspominając o pokryciu kosztów leczenia...
        </p>
    </header>

    <div class="row row-filled-red">
        <div class="col-xs-12">
            <div class="text-center">
                <span class="btn-near-cta">Nie czekaj!</span>
                <p>
                    Umów się z nami na niezobowiązujące spotkanie w wybranym przez Ciebie miejscu i czasie.
                </p>
                <a href="https://formularz.prudential.pl/lead?lid=46818" class="btn btn-primary btn-white" target="_blank" data-trigger="versatag-click" data-url="<?php echo App::APP_URL; ?>versatag/46818">Skontaktuj się z nami</a>
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
                <a href="mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo">
                    <img src="img/mity/mit-8-wide.jpg" alt="Mit. Dziecko jak dorośnie, od razu utrzyma się samo" class="img-responsive full-width" />
                </a>
            </figure>
        </div>

        <div class="col-md-6">
            <figure>
                <a href="mit-zle-rzeczy-przydarzaja-sie-innym">
                    <img src="img/mity/mit-10-wide.jpg" alt="Złe rzeczy przydarzają się innym" class="img-responsive full-width" />
                </a>
            </figure>
        </div>
    </div>
</div>
    
<?php
Tpl::bottom();
Tpl::annotations([
    1 => 'Prudential Family Index, badania zrealizowane przez IQS Polska dla Prudential, październik 2015.',
    2 => 'Główny Urząd Statystyczny, <a href="http://stat.gov.pl/obszary-tematyczne/ludnosc/ludnosc/podstawowe-informacje-o-rozwoju-demograficznym-polski-do-2014-roku,12,5.html" target="_blank">Podstawowe informacje o rozwoju demograficznym Polski do 2014 roku</a>, Warszawa 27.01.2015, str. 11.',
    3 => '<a href="http://www.who.int/mediacentre/factsheets/fs297/en/" target="_blank">Nota informacyjna nt. chorób nowotworowych nr 297</a>, World Health Organisation, luty 2015.',
    4 => 'Ministerstwo Zdrowia, Narodowy Program Wyrównania Dostępności do Profilaktyki i Leczenia Chorób Układu Sercowo-Naczyniowego POLKARD na lata 2013-2016, 25.02.2014.',
    5 => 'Instytut Żywności i Żywienia, informacja prasowa <a href="http://www.izz.waw.pl/pl/strona-gowna/3-aktualnoci/aktualnoci/541-musimy-zatrzymac-epidemie-otylosci" target="_blank">Musimy zatrzymać epidemię otyłości</a>, Warszawa 22.05.2015, str. 2.',
    6 => 'Zakład Ubezpieczeń Społecznych, <a href="http://www.zus.pl/default.asp?p=1&amp;id=52" target="_blank">Kwoty najniższych gwarantowanych świadczeń emerytalno-rentowych od 1 marca 2015 r.</a>, 25.08.2015 r.'
]);
Tpl::htmlFooter();
?>
