<?php
// mit 4

require_once('libs/App.class.php');

Tpl::htmlHead(null, [
    'title' => 'Prudential | Mit | Na emeryturze moje potrzeby będą mniejsze.',
    'desc' => 'Nawet jeśli przyszłość zweryfikuje nasze potrzeby, nie znaczy to, że na emeryturze będziemy potrzebować mniej środków do życia.'
]);
Tpl::nav();
?>


<div class="jumbotron border-top">
    <img src="img/mity/mit-na-emeryturze-moje-potrzeby-beda-mniejsze.jpg" alt="Mit. Na emeryturze moje potrzeby będą mniejsze." class="img-responsive full-width hidden-xs hidden-sm">
    <img src="img/mity/mit-na-emeryturze-moje-potrzeby-beda-mniejsze-mobile.jpg" alt="Mit. Na emeryturze moje potrzeby będą mniejsze." class="img-responsive full-width visible-xs visible-sm">

    <a href="mit-emerytura-nie-potrwa-dlugo" class="btn btn-left">
        <img src="img/icon-arrow-left.png" alt="">
        Poprzedni<br>mit
    </a>

    <a href="mit-nie-stac-mnie-na-oszczedzanie" class="btn btn-right">
        <img src="img/icon-arrow-right.png" alt="">
        Następny<br>mit
    </a>
</div>

<div class="container-fluid">
    <div class="row row-flex row-centered row-margin">
        <div class="hidden-xs hidden-sm hidden-md col-lg-2 col-lg-offset-2">
            <img src="img/icon-banknote.png" alt="" class="headline-image img-responsive">
        </div>

        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-6">
            <div class="headline headline-left">
                <div>
                    <strong>Czyżby? Nawet jeśli przyszłość zweryfikuje nasze potrzeby, nie znaczy to,
                        że na emeryturze będziemy wydawać mniej.</strong>
                </div>

                <div>
                    Chyba nie planujesz przeprowadzki na emeryturze do lasu, żeby jeść to, co zerwiesz z drzewa? A&nbsp;do obecnych kosztów życia, takich
                    jak dom czy mieszkanie, jedzenie, komunikacja, rachunki, wyjazdy itp., dojdą wyższe koszty leków i&nbsp;leczenia, prezenty dla wnuczków...
                </div>

                <div>
                    A do dyspozycji możemy mieć tylko 1/3 ostatniej pensji (lub nawet mniej), bo według
                    prognoz<sup><a href="#przypisy">1</a></sup> tyle wyniesie nasza przyszła emerytura. Sprawdź poniżej, czy taka suma na wszystko wystarczy.
                </div>
            </div>
        </div>
    </div>

    <header class="row border-top" id="kalkulator">
        <h1>Projekt: <strong>emerytura</strong></h1>
        <hr>
        <p>
            Pewna emerytura wymaga dobrego planowania.
            Sprawdź, na co będzie Cię stać<sup><a href="#przypisy">2</a></sup>!
        </p>
    </header>

    <div id="rNCalc" class="calc-selectors cycle-slideshow" data-cycle-timeout="0" data-cycle-slides="> section" data-cycle-log="false" data-cycle-auto-height="container">
        <section class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 rNCalc-column">
                <div class="row">
                    <div class="row-height">
                        <div class="col-sm-3 col-sm-height calc-section-label">
                            1. Poziom życia:
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="700" data-selected="false" data-group="7">
                                Raczej skromny
                                <span>(z naciskiem na „raczej”)</span>
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="1200" data-selected="false" data-group="7">
                                Na spokojnie
                                <span>(bez luksusów, lecz stabilnie)</span>
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="2000" data-selected="false" data-group="7">
                                Na bogato
                                <span>(w tym czasem kawior na śniadanie)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-sm-3 col-sm-height calc-section-label">
                            2. Twoje lokum na emeryturze to:
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="750" data-selected="false" data-group="1">
                                Małe mieszkanie
                                <span>(a raczej... kawalerka)</span>
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="1200" data-selected="false" data-group="1">
                                Apartament
                                <span>(w wielkim mieście)</span>
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="2000" data-selected="false" data-group="1">
                                Willa z ogrodem
                                <span>(i basenem)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-sm-3 col-sm-height calc-section-label">
                            3. Wiadomo – opieka medyczna:
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="200" data-selected="false" data-group="6">
                                Publiczna służba zdrowia
                                <span>(szacunek!)</span>
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="400" data-selected="false" data-group="6">
                                Miks: prywatny specjalista
                                + szpital państwowy
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="800" data-selected="false" data-group="6">
                                Prywatna opieka medyczna
                                <span>(i klinika w Szwajcarii)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-sm-3 col-sm-height calc-section-label">
                            4. Zwyczajowo w&nbsp;miesiącu przemieszczasz się:
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="150" data-selected="false" data-group="4">
                                Autobusem, tramwajem, pociągiem
                                <span>(komunikacją publiczną)</span>
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="500" data-selected="false" data-group="4">
                                Autem z historią i&nbsp;przebiegiem
                                <span>(póki daje radę)</span>
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="1000" data-selected="false" data-group="4">
                                Lśniącym samochodem z&nbsp;salonu
                                <span>(po całym kraju)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-sm-3 col-sm-height calc-section-label">
                            5. Na prezenty dla wnuków wybierasz:
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="100" data-selected="false" data-group="2">
                                To, co aktualnie w promocji w&nbsp;najbliższym sklepie dyskontowym
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="200" data-selected="false" data-group="2">
                                Zdalnie sterowany samochodzik lub grę komputerową
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="500" data-selected="false" data-group="2">
                                Tablet
                                <span>(smartfon)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-sm-3 col-sm-height calc-section-label">
                            6. Na pewno masz jakieś hobby!
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="100" data-selected="false" data-group="5">
                                Wędkarstwo / szydełkowanie
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="600" data-selected="false" data-group="5">
                                Tenis / jazda konna
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="1000" data-selected="false" data-group="5">
                                Kolekcjonowanie młodej polskiej sztuki
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">
                        <div class="col-sm-3 col-sm-height calc-section-label">
                            7. Podróżujesz...
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="350" data-selected="false" data-group="3">
                                Po Polsce
                                <span>(piękny mamy kraj!)</span>
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="500" data-selected="false" data-group="3">
                                Po Europie
                                <span>(Stary Kontynent czeka)</span>
                            </button>
                        </div>

                        <div class="col-sm-3 col-sm-height">
                            <button class="btn btn-selector calc-2-element" data-value="1200" data-selected="false" data-group="3">
                                Daleko w świat
                                <span>(najlepiej dookoła)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row-height">

                            <div class="col-sm-3 col-sm-height calc-section-label">
                                Wpisz, ile zarabiasz
                                <span>(śmiało, nikt nie patrzy)</span>
                            </div>

                            <div class="col-sm-3 col-sm-height">
                                <input type="text" pattern="\d+" id="rNCalcEarnings" class="input-selector-red" placeholder="wpisz kwotę netto" autocomplete="off" maxlength="8" form="f-selector-form">
                            </div>

                            <div class="col-sm-3 col-sm-height">
                                <form id="f-selector-form">
                                    <button class="btn btn-selector btn-selector-submit">Sprawdź wyniki</button>
                                </form>
                            </div>

                            <div class="col-sm-3 col-sm-height">&nbsp;</div>
                       
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
                                    <div class="inline-block">
                                        <sup class="pull-right"><a href="#przypisy">3</a></sup>
                                        <img src="img/txt-twoja-szacunkowa-miesieczna-emerytura.png" alt="Twoja szacunkowa miesięczna emerytura" class="img-responsive">
                                    </div>
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
                                        system emerytalny na Twoją niekorzyść? Zawsze warto być przygotowanym. Lepiej zadbaj z&nbsp;nami o&nbsp;lepszą przyszłość dla siebie i&nbsp;bliskich.
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
                <div class="btn-near-cta">Zacznij działać!</div>
                <a href="https://formularz.prudential.pl/lead?lid=46388" class="btn btn-primary btn-white" target="_blank">Zaplanuj swoją emeryturę <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
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
                <a href="mit-emerytura-nie-potrwa-dlugo">
                    <img src="img/mity/mit-3-wide.jpg" alt="Mit. Emerytura nie potrwa długo" class="img-responsive full-width" />
                </a>
            </figure>
        </div>

        <div class="col-md-6">
            <figure>
                <a href="mit-nie-stac-mnie-na-oszczedzanie">
                    <img src="img/mity/mit-5-wide.jpg" alt="Mit. Nie stać nie na oszczędzanie" class="img-responsive full-width" />
                </a>
            </figure>
        </div>
    </div>
</div>
    
<?php
Tpl::bottom();
Tpl::annotations([
    1 => 'Wywiad z prezesem ZUS, Z. Derdziukiem, Gazeta Wyborcza, 19 marca 2012 r.',
    2 => 'Przedstawione koszty mają charakter jedynie szacunkowy i zostały opracowane na podstawie analiz własnych Prudential.',
    3 => 'Wartość wysokości świadczenia emerytalnego została obliczona w sposób uproszczony przy założeniu, że przewidywana emerytura wyniesie
            1/3 obecnej miesięcznej pensji netto podanej przez osobę zainteresowaną obliczeniami. Założenie bazuje na prognozach podawanych przez
            Zakład Ubezpieczeń Społecznych dotyczących relacji emerytury do ostatniej pensji. <a href="http://www.zus.pl/default.asp?id=1&amp;p=1&amp;idk=1916" target="_blank">Źródło</a>.'
]);
Tpl::htmlFooter();
?>
