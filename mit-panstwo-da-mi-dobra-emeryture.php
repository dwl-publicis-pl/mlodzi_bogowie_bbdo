<?php
require_once('libs/App.class.php');

Tpl::htmlHead();
Tpl::nav();
?>


<div class="jumbotron border-top">
    <img src="img/mity/mit-panstwo-da-mi-dobra-emeryture.jpg" alt="Mit. Państwo da mi dobrą emryturę." class="img-responsive full-width">

    <a href="#" class="btn btn-left">
        <img src="img/icon-arrow-left.png" alt="">
        Poprzedni<br>mit
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
                <img src="img/icon-one-third-coin.png" alt="" class="headline-image img-responsive">
            </div>

            <div class="col-xs-12 col-md-8 col-lg-6 col-md-height">
                <div class="headline headline-left">
                    <div>
                        <strong>Niestety nie jest tak dobrze.</strong> Według obecnych prognoz nasze emerytury w przyszłości wyniosą ok. 1/3 ostatniej pensji (nie tej najwyższej w karierze, tylko ostatniej przed przejściem
                        na emeryturę). I to pod warunkiem, że wcześniej pracowaliśmy na podstawie umów, od których były odprowadzane składki na ubezpieczenie społeczne i zdrowotne.
                    </div>

                    <div>
                        Dziś średnia emerytura to ok. 1500 zł netto, a według prognoz w przyszłości emerytury będą coraz niższe, nie wyższe.
                    </div>
                </div>
            </div>

            <div class="hidden-xs hidden-sm col-md-1 col-lg-2 col-md-middle"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <div class="row main-info-table">
                <div class="row-height">
                    <div class="col-xs-12 col-md-2 col-md-height col-md-middle">
                        <img src="img/icon-basket.png" alt="" class="img-responsive center-block">
                    </div>

                    <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                        <p><strong>Emerytura = 1/3 ostatniej pensji</strong></p>

                        <p>
                            Nieważne, ile zarabiamy, zawsze będzie nam mało. Bo wakacje, zachcianki, prezenty, bo coś się zepsuje i trzeba wymienić na nowe.  Każdy lubi żyć na w miarę dobrym poziomie, a do tego trzeba
                            środków, czyż nie? Zatem podziel swoją pensję na trzy i pomyśl,
                            że za tyle będziesz funkcjonować nawet przez 20 lat!
                        </p>
                    </div>

                    <div class="col-xs-12 col-md-2 col-md-height col-md-middle">
                        <img src="img/icon-people.png" alt="" class="img-responsive center-block">
                    </div>

                    <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                        <p><strong>Tylko 2 pracujących na jednego emeryta</strong></p>

                        <p>
                            Według danych GUS dziś na każdego emeryta przypadają
                            3 osoby pracujące, a i tak ich składki emerytalne nie wystarczają na wypłacane emerytury. A za 35 lat osoby po
                            65. roku życia mają stanowić ponad 30% społeczeństwa! I na każdą taką osobę nie będą przypadać nawet dwie osoby pracujące...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="row border-top">
        <h1>Chwila <strong>prawdy</strong></h1>
        <hr>
        <p>
            Wpisz, ile zarabiasz, aby oblicz swoją przyszłą szacunkową emeryturę.
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
                                <button class="btn btn-selector calc-2-element" data-value="700" data-selected="false" data-group="7">
                                    Dzienne
                                    <span>(państwowe)</span>
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="1200" data-selected="false" data-group="7">
                                    Na prywatnej uczelni
                                    <span>(w Polsce)</span>
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="2000" data-selected="false" data-group="7">
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
                                <button class="btn btn-selector calc-2-element" data-value="750" data-selected="false" data-group="1">
                                    Akademik
                                    <span>(przytulny ;) )</span>
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="1200" data-selected="false" data-group="1">
                                    Wynajęte mieszkanie
                                    <span>(albo chociaż pokój)</span>
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="2000" data-selected="false" data-group="1">
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
                                <button class="btn btn-selector calc-2-element" data-value="200" data-selected="false" data-group="6">
                                    Wspólny wypad na sushi
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="400" data-selected="false" data-group="6">
                                    Eleganckie pióro
                                    <span>(z grawerem)</span>
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="800" data-selected="false" data-group="6">
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
                                <button class="btn btn-selector calc-2-element" data-value="150" data-selected="false" data-group="4">
                                    Tani, (nie)zawodny
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="500" data-selected="false" data-group="4">
                                    Miejski i sportowy
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="1000" data-selected="false" data-group="4">
                                    Lśniący i komfortowy
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
                                <button class="btn btn-selector calc-2-element" data-value="100" data-selected="false" data-group="2">
                                    Uroczysty obiad z lampką szampana
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="200" data-selected="false" data-group="2">
                                    Tradycyjnie, w domu panny młodej
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="500" data-selected="false" data-group="2">
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
                                <button class="btn btn-selector calc-2-element" data-value="100" data-selected="false" data-group="5">
                                    Skromne M1
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="600" data-selected="false" data-group="5">
                                    Optymalne M2
                                </button>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector calc-2-element" data-value="1000" data-selected="false" data-group="5">
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

        <!--<section class="row rnCalc-results-page">
            <div class="col-xs-12">
                <button class="btn btn-left btn-red collapse" data-calc-trigger="reset-calc">
                    <img src="img/icon-arrow-left-red.png" alt="">
                    oblicz<br> jeszcze raz
                </button>

                <div id="rNCalc-chart">
                    <div id="rnCalc-chart-img">
                        <img src="img/calc-chart.png" alt="" class="img-responsive">

                        <div id="nRCalc-results">
                            <div id="nRCalcExpenses" class="coins-stack">
                                <div class="rnCalcSumTxt">
                                    <img src="img/txt-suma-twoich-miesiecznych-wydatkow.png" alt="Suma Twoich miesięcznych wydatków" class="img-responsive">
                                    <div class="calc-2-sum-container"><span id="calc-2-sum">3000</span> zł</div>
                                </div>
                            </div>

                            <div id="nRCalcRetirementValue" class="coins-stack">
                                <div class="rnCalcRetirementSumTxt">
                                    <img src="img/txt-twoja-szacunkowa-miesieczna-emerytura.png" alt="Twoja szacunkowa miesięczna emerytura" class="img-responsive">
                                    <div class="calc-2-sum-container"><span id="calc-2-retirement-value">1000</span> zł</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-3">
                        <div class="list-unstyled rNCalc-text-info">
                            <div data-rNCalc-result="1">
                                <div class="calc-headline">
                                    <div class="calc-headline-header">
                                        Twoja przyszłość <span>rysuje się raczej marnie</span>.
                                    </div>

                                    <p>
                                        Dbaj o przyjaciół, bo możliwe, że okażą się jedynym ratunkiem na emerytalne dni. Pewnie wspomogą
                                        Cię biletem na tramwaj, żebyś do szpitala nie jechał na gapę, ale czy podzielą się śniadaniem? Obiadem? Może już lepiej teraz zrobić plan oszczędzania na emeryturę?
                                    </p>
                                </div>
                            </div>

                            <div data-rNCalc-result="2">
                                <div class="calc-headline">
                                    <div class="calc-headline-header">
                                        Twoja przyszłość <span>rysuje się nieźle</span>.
                                    </div>

                                    <p>
                                        Dbaj o przyjaciół, bo możliwe, że okażą się jedynym ratunkiem na emerytalne dni. Pewnie wspomogą
                                        Cię biletem na tramwaj, żebyś do szpitala nie jechał na gapę, ale czy podzielą się śniadaniem? Obiadem? Może już lepiej teraz zrobić plan oszczędzania na emeryturę?
                                    </p>
                                </div>
                            </div>

                            <div data-rNCalc-result="3">
                                <div class="calc-headline">
                                    <div class="calc-headline-header">
                                        Twoja przyszłość <span>rysuje się całkiem solidnie</span>.
                                    </div>

                                    <p>
                                        Dbaj o przyjaciół, bo możliwe, że okażą się jedynym ratunkiem na emerytalne dni. Pewnie wspomogą
                                        Cię biletem na tramwaj, żebyś do szpitala nie jechał na gapę, ale czy podzielą się śniadaniem? Obiadem? Może już lepiej teraz zrobić plan oszczędzania na emeryturę?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
    </div>

    <div class="row row-filled-red">
        <div class="col-xs-12">
            <div class="text-center">
                <span class="btn-near-cta">Chcesz ułatwić swojemu dziecku start w dorosłość?</span>
                <a href="https://formularz.prudential.pl/lead?lid=46630" class="btn btn-primary btn-white" target="_blank">Zaplanuj dziecku przyszłość</a>
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

