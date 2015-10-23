<?php
require_once('libs/App.class.php');

Tpl::htmlHead();
Tpl::nav();
?>


<div class="jumbotron border-top">
    <img src="img/mity/mit-panstwo-da-mi-dobra-emeryture.jpg" alt="Mit. Państwo da mi dobrą emryturę." class="img-responsive full-width">

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
                <img src="img/icon-one-third-coin.png" alt="" class="headline-image img-responsive">
            </div>

            <div class="col-xs-12 col-md-8 col-lg-6 col-md-height">
                <div class="headline headline-left">
                    <div>
                        <strong>Niestety nie jest tak dobrze.</strong> Według obecnych prognoz* nasze emerytury w przyszłości wyniosą ok. 1/3 ostatniej pensji (nie tej najwyższej w karierze, tylko ostatniej przed przejściem
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
                            Nieważne, ile zarabiamy, zawsze będzie nam mało. Bo wakacje, zachcianki, prezenty,
                            bo coś się zepsuje i trzeba wymienić na nowe. Każdy lubi żyć na w miarę dobrym poziomie, a do tego trzeba
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
                            3 osoby pracujące, a i tak ich składki emerytalne nie wystarczają na wypłacane
                            emerytury. A za 35 lat osoby po 65. roku życia mają stanowić ponad 30% społeczeństwa!
                            I na każdą taką osobę nie będą przypadać nawet dwie osoby pracujące...
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
            Wpisz, ile zarabiasz, aby obliczyć swoją przyszłą szacunkową emeryturę.
        </p>
    </header>

    <div id="rNCalc" class="calc-selectors cycle-slideshow" data-cycle-timeout="0" data-cycle-slides="> section" data-cycle-log="false" data-cycle-auto-height="container">
        <section class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 rNCalc-column">
                <form>
                    <div class="row">
                        <div class="row-height">
                            <div class="col-md-3 col-md-height calc-section-label">
                                Twoja aktualna pensja
                                <span>(śmiało, nikt nie patrzy)</span>
                            </div>

                            <div class="col-md-3 col-md-height">
                                <input type="text" pattern="\d+" id="rNCalcEarnings" class="input-selector-red full-width" placeholder="wpisz kwotę netto" autocomplete="off" maxlength="8">
                            </div>

                            <div class="col-md-1 col-md-height">&nbsp;</div>

                            <div class="col-md-2 col-md-height calc-section-label calc-3-retirement-value-container">
                                Twoja przyszła emerytura
                            </div>

                            <div class="col-md-3 col-md-height calc-3-retirement-value-container">
                                <button class="js-retirement-live-value btn btn-selector calc-3-retirement-value" disabled></button>
                            </div>
                        </div>
                    </div>

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
                                    <span>(bez luksusów lecz stabilnie)</span>
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
                        <div class="col-md-12 text-center">
                            <p><strong>Czy kwota Twojej emerytury wystarczy na wszystkie potrzeby?</strong></p>
                            <button class="btn btn-selector btn-selector-submit center-block">Sprawdź</button>
                        </div>
                    </div>
                </form>
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
                                        Twoja przyszłość <span>rysuje się nieciekawie</span>.
                                    </div>

                                    <p>
                                        Dbaj o przyjaciół i o dobre wychowanie dzieci, bo możliwe, że okażą się jedynym ratunkiem na emerytalne dni.
                                        Oczywiście możesz także zrezygnować z życia, jakie planujesz wieść na emeryturze, i znacznie ograniczyć wydatki – może
                                        wtedy jakoś uda się związać koniec z końcem... Ale może lepiej już teraz zrobić plan i zadbać o swoją przyszłość?...
                                    </p>
                                </div>
                            </div>

                            <div data-rNCalc-result="2">
                                <div class="calc-headline">
                                    <div class="calc-headline-header">
                                        Ciężkie czasy nadchodzą, a Ty jesteś <span>średnio gotowy</span>.
                                    </div>

                                    <p>
                                        Może będzie Cię stać na prywatną wizytę u specjalisty, ale marzenia o podróży dookoła świata lepiej sobie odpuścić.
                                        Jeśli nie chcesz z niczego rezygnować – zaplanuj emeryturę już teraz. Im wcześniej zaczniesz oszczędzać,
                                        tym większą kwotę zgromadzisz. I może uda się spędzić jesień życia bez ograniczania się tylko do najpotrzebniejszych rzeczy.
                                    </p>
                                </div>
                            </div>

                            <div data-rNCalc-result="3">
                                <div class="calc-headline">
                                    <div class="calc-headline-header">
                                        Wygląda na to, że należysz do tej grupki osób, których <span>przyszłość nie rysuje się w bardzo ciemnych barwach</span>.
                                    </div>

                                    <p>
                                        Trzymamy kciuki, żebyś nigdy nie musiał sobie niczego odmawiać. Ale co będzie, jeśli coś pójdzie nie tak? Czy masz
                                        pewność, że zawsze będziesz dobrze zarabiać? A co, jeśli w przyszłości politycy postanowią przeorganizować
                                        system emerytalny na Twoją niekorzyść? Zawsze warto być przygotowanym. Lepiej zadbaj z nami o lepszą przyszłość dla siebie i bliskich.
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
                <p class="btn-near-cta">Jeśli nie chcesz żyć za 1/3 pensji, to...</p>
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

