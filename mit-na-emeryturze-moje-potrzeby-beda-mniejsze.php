<?php
require_once('libs/App.class.php');

Tpl::htmlHead();
Tpl::nav();
?>


<div class="jumbotron border-top">
    <img src="img/mity/mit-na-emeryturze-moje-potrzeby-beda-mniejsze.jpg" alt="Mit #4. Na emeryturze moje potrzeby będą mniejsze." class="img-responsive full-width">

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
                <img src="img/icon-banknote.png" alt="" class="headline-image img-responsive">
            </div>

            <div class="col-xs-12 col-md-8 col-lg-6 col-md-height">
                <div class="headline headline-left">
                    <div>
                        <strong>Czyżby? Nawet jeśli przyszłość zweryfikuje nasze potrzeby, nie znaczy to,
                            że na emeryturze będziemy wydawać mniej.</strong>
                    </div>

                    <div>
                        Chyba nie planujesz przeprowadzki na emeryturze do lasu, żeby jeść to, co zerwiesz z&nbsp;drzewa? A do obecnych kosztów życia, takich jak dom czy mieszkanie, jedzenie, komunikacja, rachunki, wyjazdy itp.
                        dojdą wyższe koszty leków i leczenia, prezenty dla wnuczków...
                    </div>

                    <div>
                        A do dyspozycji będziemy mieć tylko 1/3 ostatniej pensji (lub nawet mniej), bo według prognoz tyle wyniesie nasza przyszła emerytura. Sprawdź poniżej, czy taka suma na wszystko wystarczy.
                    </div>
                </div>
            </div>

            <div class="hidden-xs hidden-sm col-md-1 col-lg-2 col-md-middle"></div>
        </div>
    </div>

    <header class="row border-top">
        <h1>Projekt: <strong>emerytura</strong></h1>
        <hr>
        <p>
            Pewna emerytura wymaga dobrego planowania.<br class="hidden-xs hidden-sm">
            Sprawdź, na co będzie Cię stać!
        </p>
    </header>

    <div id="rNCalc" class="cycle-slideshow" data-cycle-timeout="0" data-cycle-slides="> section" data-cycle-log="false" data-cycle-auto-height="container">
        <section class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 rNCalc-column">
                <div class="row">
                    <div class="row-height">
                        <div class="col-md-3 col-md-height calc-section-label">
                            1. Poziom życia:
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="700" data-selected="false" data-group="7">
                                Raczej skromny
                                <span>(z naciskiem na „raczej”)</span>
                            </button>
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="1200" data-selected="false" data-group="7">
                                Na spokojnie
                                <span>(bez luksusów, lecz stabilnie)</span>
                            </button>
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="2000" data-selected="false" data-group="7">
                                Na bogato
                                <span>(w tym czasem kawior na śniadanie)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-md-3 col-md-height calc-section-label">
                            2. Twoje lokum na emeryturze to:
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="750" data-selected="false" data-group="1">
                                Małe mieszkanie
                                <span>(a raczej... kawalerka)</span>
                            </button>
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="1200" data-selected="false" data-group="1">
                                Apartament
                                <span>(w wielkim mieście)</span>
                            </button>
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="2000" data-selected="false" data-group="1">
                                Willa z ogrodem
                                <span>(i basenem)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-md-3 col-md-height calc-section-label">
                            3. Wiadomo – opieka medyczna
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="200" data-selected="false" data-group="6">
                                Publiczna służba zdrowia
                                <span>(szacunek!)</span>
                            </button>
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="400" data-selected="false" data-group="6">
                                Mix: prywatny specjalista
                                <span>+ szpital państwowy</span>
                            </button>
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="800" data-selected="false" data-group="6">
                                Prywatna opieka medyczna
                                <span>(i klinika w Szwajcarii)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-md-3 col-md-height calc-section-label">
                            4. Zwyczajowo, w&nbsp;miesiącu, przemieszczasz się:
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="150" data-selected="false" data-group="4">
                                Autobusem, tramwajem, pociągiem
                                <span>(komunikacją publiczną)</span>
                            </button>
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="500" data-selected="false" data-group="4">
                                Autem z historią i&nbsp;przebiegiem
                                <span>(póki daje radę)</span>
                            </button>
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="1000" data-selected="false" data-group="4">
                                Lśniącym samochodem z&nbsp;salonu
                                <span>(po całym kraju)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-md-3 col-md-height calc-section-label">
                            5. Na prezenty dla wnuków wybierasz:
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="100" data-selected="false" data-group="2">
                                To, co aktualnie w promocji w najbliższym sklepie dyskontowym
                            </button>
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="200" data-selected="false" data-group="2">
                                Zdalnie sterowany samochodzik lub grę komputerową
                            </button>
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="500" data-selected="false" data-group="2">
                                Tablet
                                <span>(smartfon)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-md-3 col-md-height calc-section-label">
                            6. Na pewno masz jakieś hobby!
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="100" data-selected="false" data-group="5">
                                Wędkarstwo / szydełkowanie
                            </button>
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="600" data-selected="false" data-group="5">
                                Tenis / jazda konna
                            </button>
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="1000" data-selected="false" data-group="5">
                                Kolekcjonowanie młodej, polskiej sztuki
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-md-3 col-md-height calc-section-label">
                            7. Podróżujesz...
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="350" data-selected="false" data-group="3">
                                Po Polsce
                                <span>(piękny mamy kraj!)</span>
                            </button>
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="500" data-selected="false" data-group="3">
                                Po Europie
                                <span>(stary kontynent czeka)</span>
                            </button>
                        </div>

                        <div class="col-md-3 col-md-height">
                            <button class="btn btn-selector calc-2-element" data-value="1200" data-selected="false" data-group="3">
                                Daleko w świat
                                <span>(najlepiej dookoła)</span>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="row-height">
                        <form>
                            <div class="col-md-3 col-md-height calc-section-label">
                                Wpisz, ile zarabiasz
                                <span>(śmiało, nikt nie patrzy)</span>
                            </div>

                            <div class="col-md-2 col-md-height">
                                <input type="text" pattern="\d+" id="rNCalcEarnings" class="input-selector-red" placeholder="wpisz kwotę netto" autocomplete="off" maxlength="8">
                            </div>

                            <div class="col-md-3 col-md-height">
                                <button class="btn btn-selector btn-selector-submit">Sprawdź wyniki</button>
                            </div>

                            <div class="col-md-4 col-md-height"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="row rnCalc-results-page">
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
        </section>
    </div>

    <div class="row row-filled-red">
        <div class="col-xs-12">
            <div class="text-center">
                <span class="btn-near-cta">Czekamy czy działamy?</span>
                <a href="#" class="btn btn-primary btn-white">Zaplanuj swoją emeryturę</a>
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
