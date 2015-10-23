<?php
require_once('libs/App.class.php');

Tpl::htmlHead();
Tpl::nav();
?>


<div class="jumbotron border-top">
    <img src="img/mity/mit-przyszlosc-dziecka.jpg" alt="Mit. O przyszłości dziecka mogę pomyśleć w przyszłości." class="img-responsive full-width">

    <a href="#" class="btn btn-left">
        <img src="img/icon-arrow-left.png" alt="">
        Następny<br>mit
    </a>

    <a href="#" class="btn btn-right">
        <img src="img/icon-arrow-right.png" alt="">
        Następny<br>mit
    </a>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="row-height">
            <div class="hidden-xs hidden-sm col-md-1 col-lg-2 col-md-middle">&nbsp;</div>

            <div class="col-xs-12 col-md-2 col-lg-2 col-md-height col-md-middle">
                <img src="img/icon-clock-2.png" alt="" class="headline-image img-responsive">
            </div>

            <div class="col-xs-12 col-md-8 col-lg-6 col-md-height">
                <div class="headline headline-left">
                    <div>
                        Start w dorosłość to szok nie tylko dla dziecka, ale i dla rodziców.
                        Często w szoku jest też domowy budżet. Utrzymanie na studiach, pierwszy samochód czy własne mieszkanie to ogromne wydatki dla młodego człowieka.
                        <strong>Zacznij oszczędzać już teraz,</strong> jeśli chcesz pomóc dziecku się usamodzielnić.
                    </div>
                </div>
            </div>

            <div class="hidden-xs hidden-sm col-md-1 col-lg-2 col-md-middle"></div>
        </div>
    </div>

    <header class="row border-top">
        <h1>Kosztowna <strong>dorosłość</strong></h1>
        <hr>
        <p>
            Zabezpieczenie przyszłości dziecka to duże wyzwanie. Policz ile potrzebujesz by ułatwić mu start w dorosłe życie*.
        </p>
    </header>

    <div id="nCalc" class="calc-selectors">
        <section class="row">
            <div class="row-height">
                <div class="hidden-xs hidden-sm col-md-2"></div>
                <div class="col-xs-12 col-md-5 col-md-height col-md-top nCalc-column">
                    <div class="row">
                        <div class="col-xs-12 calc-section-label">
                            1. Studia
                        </div>
                    </div>

                    <div class="row">
                        <div class="row-height">
                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="12000" data-selected="false" data-group="7">
                                    Dzienne
                                    <span>(państwowe)</span>
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="36000" data-selected="false" data-group="7">
                                    Na prywatnej uczelni
                                    <span>(w Polsce)</span>
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="150000" data-selected="false" data-group="7">
                                    Prestiżowy kierunek
                                    <span>(za granicą)</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 calc-section-label">
                            2. Lokum w czasie studiów
                        </div>
                    </div>

                    <div class="row">
                        <div class="row-height">
                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="15000" data-selected="false" data-group="1">
                                    Akademik
                                    <span>(przytulny ;) )</span>
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="30000" data-selected="false" data-group="1">
                                    Wynajęte mieszkanie
                                    <span>(albo chociaż pokój)</span>
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
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
                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="500" data-selected="false" data-group="6">
                                    Wspólny wypad na sushi
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="1500" data-selected="false" data-group="6">
                                    Eleganckie pióro
                                    <span>(z grawerem)</span>
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
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
                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="20000" data-selected="false" data-group="4">
                                    Tani, (nie)zawodny
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="50000" data-selected="false" data-group="4">
                                    Miejski i&nbsp;sportowy
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
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
                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="10000" data-selected="false" data-group="2">
                                    Uroczysty obiad z lampką szampana
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="30000" data-selected="false" data-group="2">
                                    Tradycyjnie, w domu panny młodej
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="60000" data-selected="false" data-group="2">
                                    Wystawne przyjęcie w oranżerii
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 calc-section-label">
                            Wkład we własne mieszkanie
                        </div>
                    </div>

                    <div class="row">
                        <div class="row-height">
                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="250000" data-selected="false" data-group="5">
                                    Skromne M1
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="450000" data-selected="false" data-group="5">
                                    Optymalne M2
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="650000" data-selected="false" data-group="5">
                                    Poważne M3
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4 col-md-height col-md-middle calc-result-col">
                    <img src="img/txt-suma-przyszlych-potrzeb-twojego-dziecka.png" alt="Suma przyszłych potrzeb Twojego dziecka" class="center-block">
                    <div class="calc-2-sum-container"><span id="calc-4-sum">0</span> zł</div>

                    <div class="coins-stack" id="calc-4-coins"></div>
                </div>

                <div class="hidden-xs hidden-sm col-md-1"></div>
            </div>
        </section>
    </div>

    <div class="row row-filled-red">
        <div class="col-xs-12">
            <div class="text-center">
                <p class="btn-near-cta">Chcesz ułatwić swojemu dziecku start w dorosłość?</p>
                <a href="przyszlosc-dziecka" class="btn btn-primary btn-white" target="_blank">Zaplanuj dziecku przyszłość</a>
            </div>
        </div>
    </div>

    <div class="row row-padded-vertical">
        <header>
            <h1>Zmierz się z <strong>innymi mitami</strong></h1>
        </header>
    </div>

    <div class="row myths-multibox">
        <div class="col-md-6">
            <figure>
                <img src="img/mity/mit-3-wide.jpg" alt="" class="img-responsive full-width" />
                <!--<figcaption class="myth-number">
                    #3 mit
                </figcaption>
                <figcaption class="myth-title">
                    <a href="#">
                        <span class="myth-title-style-1">Przecież</span><br>
                        <span class="myth-title-style-2">mogę pracować</span><br>
                        <span class="myth-title-style-3">do śmierci</span>
                    </a>
                </figcaption>-->
            </figure>
        </div>

        <div class="col-md-6">
            <figure>
                <img src="img/mity/mit-2-wide.jpg" alt="" class="img-responsive full-width" />
                <!--<figcaption class="myth-number">
                    #3 mit
                </figcaption>
                <figcaption class="myth-title">
                    <a href="#">
                        <span class="myth-title-style-1">Przecież</span><br>
                        <span class="myth-title-style-2">mogę pracować</span><br>
                        <span class="myth-title-style-3">do śmierci</span>
                    </a>
                </figcaption>-->
            </figure>
        </div>
    </div>
</div>

<?php
Tpl::bottom();
Tpl::htmlFooter();
?>

