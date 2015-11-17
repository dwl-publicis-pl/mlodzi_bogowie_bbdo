<?php
// mit 7

require_once('libs/App.class.php');

Tpl::htmlHead(null, [
    'title' => 'Prudential | Mit | O przyszłości dziecka mogę pomyśleć jak będzie większe.',
    'desc' => 'Start w dorosłość to szok dla dziecka, rodziców i domowego budżetu.'
]);
Tpl::nav();
?>

<div class="jumbotron border-top">
    <img src="img/mity/mit-przyszlosc-dziecka.jpg" alt="Mit. O przyszłości dziecka mogę pomyśleć jak będzie większe." class="img-responsive full-width hidden-xs hidden-sm">
    <img src="img/mity/mit-przyszlosc-dziecka-mobile.jpg" alt="Mit. O przyszłości dziecka mogę pomyśleć jak będzie większe." class="img-responsive full-width visible-xs visible-sm">

    <a href="mit-ubezpieczenie-na-zycie-to-strata-pieniedzy" class="btn btn-left">
        <img src="img/icon-arrow-left.png" alt="">
        Poprzedni<br>mit
    </a>

    <a href="mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo" class="btn btn-right">
        <img src="img/icon-arrow-right.png" alt="">
        Następny<br>mit
    </a>
</div>

<div class="container-fluid">
    <div class="row row-flex row-centered row-margin">
        <div class="hidden-xs hidden-sm hidden-md col-lg-2 col-lg-offset-2">
            <img src="img/icon-clock-2.png" alt="" class="headline-image img-responsive pull-right">
        </div>

        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-6">
            <div class="headline headline-left">
                <div>
                    Start w dorosłość to szok nie tylko dla dziecka, ale i dla rodziców.
                    Często w szoku jest też domowy budżet. Utrzymanie na studiach, pierwszy samochód czy własne mieszkanie to ogromne wydatki dla młodego człowieka.
                    <strong>Zacznij oszczędzać już teraz,</strong> jeśli chcesz pomóc dziecku się usamodzielnić.
                </div>
            </div>
        </div>
    </div>

    <header class="row border-top" id="kalkulator">
        <h1>Kosztowna <strong>dorosłość</strong></h1>
        <hr>
        <p>
            Zabezpieczenie przyszłości dziecka to duże wyzwanie. Policz, ile potrzebujesz, by ułatwić mu start w dorosłe życie<sup><a href="#przypisy">1</a></sup>.
        </p>
    </header>

    <div id="nCalc" class="calc-selectors">
        <section class="row row-flex-sm">
            <div class="col-xs-12 col-md-6 col-md-offset-1 nCalc-column">
                <div class="row">
                    <div class="col-xs-12 calc-section-label">
                        1. 5-letnie studia
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="12000" data-selected="false" data-group="7">
                                Dzienne
                                <span>(państwowe)</span>
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="36000" data-selected="false" data-group="7">
                                Na prywatnej uczelni
                                <span>(w Polsce)</span>
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="150000" data-selected="false" data-group="7">
                                Prestiżowy kierunek
                                <span>(za granicą)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 calc-section-label">
                        2. Lokum w czasie 5-letnich studiów
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="15000" data-selected="false" data-group="1">
                                Akademik
                                <span>(przytulny ;) )</span>
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="30000" data-selected="false" data-group="1">
                                Wynajęte mieszkanie
                                <span>(albo chociaż pokój)</span>
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="120000" data-selected="false" data-group="1">
                                Kawalerka
                                <span>(ciasna, ale własna)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 calc-section-label">
                        3. Nagroda za obronę dyplomu
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="500" data-selected="false" data-group="6">
                                Wspólny wypad na sushi
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="1500" data-selected="false" data-group="6">
                                Eleganckie pióro
                                <span>(z grawerem)</span>
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="5000" data-selected="false" data-group="6">
                                Zasłużone wakacje
                                <span>(zagraniczne!)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 calc-section-label">
                        4. Pierwszy samochód
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="20000" data-selected="false" data-group="4">
                                Tani, (nie)zawodny
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="50000" data-selected="false" data-group="4">
                                Miejski i&nbsp;sportowy
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="80000" data-selected="false" data-group="4">
                                Lśniący i&nbsp;komfortowy
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 calc-section-label">
                        5. Ślub!
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="10000" data-selected="false" data-group="2">
                                Uroczysty obiad z lampką szampana
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="30000" data-selected="false" data-group="2">
                                Tradycyjnie, w domu panny młodej
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="60000" data-selected="false" data-group="2">
                                Wystawne przyjęcie w oranżerii
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 calc-section-label">
                        6. Rodzicielski wkład we własne mieszkanie
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="25000" data-selected="false" data-group="5">
                                Skromne M1
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="45000" data-selected="false" data-group="5">
                                Optymalne M2
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="65000" data-selected="false" data-group="5">
                                Poważne M3
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-4 calc-result-col">
                <img src="img/txt-suma-przyszlych-potrzeb-twojego-dziecka.png" alt="Suma przyszłych potrzeb Twojego dziecka" class="img-responsive center-block">
                <div class="calc-2-sum-container"><span id="calc-4-sum">0</span> zł</div>

                <div class="coins-stack hidden-xs" id="calc-4-coins"></div>
            </div>
        </section>
    </div>

    <div class="row row-filled-red">
        <div class="col-xs-12">
            <div class="text-center">
                <p class="btn-near-cta">Chcesz ułatwić swojemu dziecku start w&nbsp;dorosłość?</p>
                <a href="https://formularz.prudential.pl/lead?lid=46630" class="btn btn-primary btn-white" target="_blank" data-trigger="versatag-click" data-url="<?php echo App::APP_URL; ?>versatag/46630">Zaplanuj dziecku przyszłość <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
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
                <a href="mit-ubezpieczenie-na-zycie-to-strata-pieniedzy">
                    <img src="img/mity/mit-6-wide.jpg" alt="Mit. Ubezpieczenie na życie to strata pieniędzy" class="img-responsive full-width" />
                </a>
            </figure>
        </div>

        <div class="col-md-6">
            <figure>
                <a href="mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo">
                    <img src="img/mity/mit-8-wide.jpg" alt="Mit. Dziecko jak dorośnie, od razu utrzyma się samo" class="img-responsive full-width" />
                </a>
            </figure>
        </div>
    </div>
</div>

<?php
Tpl::bottom();
Tpl::annotations([
    1 => 'Przedstawione koszty mają charakter jedynie szacunkowy i zostały opracowane na podstawie analiz własnych Prudential.'
]);
Tpl::htmlFooter();
?>

