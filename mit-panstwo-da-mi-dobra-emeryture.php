<?php
// mit 1

require_once('libs/App.class.php');

Tpl::htmlHead(null, [
    'title' => 'Prudential | Mit | Państwo da mi dobrą emeryturę.',
    'desc' => 'Emerytura to 1/3 ostatniej pensji pod warunkiem odprowadzania składek na ubezpieczenie społeczne i zdrowotne. Warto zacząć oszczędzać na emeryturę.'
]);
Tpl::nav();
?>


<div class="jumbotron border-top">
    <img src="img/mity/mit-panstwo-da-mi-dobra-emeryture.jpg" alt="Mit. Państwo da mi dobrą emryturę." class="img-responsive full-width hidden-xs hidden-sm">
    <img src="img/mity/mit-panstwo-da-mi-dobra-emeryture-mobile.jpg" alt="Mit. Państwo da mi dobrą emryturę." class="img-responsive full-width visible-xs visible-sm">

    <a href="mit-zle-rzeczy-przydarzaja-sie-innym" class="btn btn-left">
        <img src="img/icon-arrow-left.png" alt="">
        Poprzedni<br>mit
    </a>

    <a href="mit-o-emeryturze-moge-pomyslec-pozniej" class="btn btn-right">
        <img src="img/icon-arrow-right.png" alt="">
        Następny<br>mit
    </a>
</div>

<div class="container-fluid">
    <div class="row row-flex row-centered row-margin">
        <div class="hidden-xs hidden-sm hidden-md col-lg-2 col-lg-offset-2">
            <img src="img/icon-one-third-coin.png" alt="" class="headline-image img-responsive pull-right">
        </div>

        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-6">
            <div class="headline headline-left">
                <div>
                    <strong>Niestety, nie jest tak dobrze.</strong> Według obecnych prognoz<sup><a href="#przypisy">1</a></sup> nasze emerytury w przyszłości wyniosą ok. 1/3 ostatniej pensji (nie tej najwyższej w karierze, tylko ostatniej przed przejściem
                    na emeryturę). I&nbsp;to pod warunkiem, że wcześniej pracowaliśmy na podstawie umów, od których były odprowadzane składki na ubezpieczenie społeczne i&nbsp;zdrowotne.
                </div>

                <div>
                    Dziś średnia emerytura to ok. 1500 zł netto<sup><a href="#przypisy">2</a></sup>, a według prognoz w przyszłości emerytury będą coraz niższe, nie wyższe.
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="row main-info-table">
                <div class="row-height">
                    <div class="col-xs-12 col-md-2 col-md-height col-md-middle">
                        <img src="img/icon-basket.png" alt="" class="img-responsive center-block">
                    </div>

                    <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                        <h2 class="h2-mod-1">Emerytura = 1/3 ostatniej pensji</h2>

                        <p>
                            Nieważne, ile zarabiamy, zawsze będzie nam mało. Bo wakacje, zachcianki, prezenty,
                            bo coś się zepsuje i trzeba wymienić na nowe. Każdy lubi żyć na w&nbsp;miarę dobrym poziomie, a do tego trzeba
                            środków, czyż nie? Zatem podziel swoją pensję na trzy i pomyśl,
                            że za tyle będziesz funkcjonować nawet przez 20 lat! 
                        </p>
                    </div>

                    <div class="col-xs-12 col-md-2 col-md-height col-md-middle">
                        <img src="img/icon-people.png" alt="" class="img-responsive center-block">
                    </div>

                    <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                        <h2 class="h2-mod-1">Tylko 2&nbsp;pracujących na jednego emeryta</h2>

                        <p>
                            Według danych GUS dziś na każdego emeryta przypadają
                            3 osoby pracujące, a&nbsp;i&nbsp;tak ich składki emerytalne nie wystarczają na wypłacane
                            emerytury. A&nbsp;za 35 lat osoby po 65. roku życia mają stanowić ponad 30% społeczeństwa!
                            I na każdą taką osobę nie będą przypadać nawet dwie osoby pracujące...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="row border-top" id="kalkulator">
        <h1>Chwila <strong>prawdy</strong></h1>
        <hr>
        <p>Wpisz, ile zarabiasz, aby obliczyć swoją przyszłą szacunkową emeryturę:</p>
    </header>

    <div id="rNCalc" class="row calc-selectors cycle-slideshow" data-cycle-timeout="0" data-cycle-slides="> div > section" data-cycle-log="false" data-cycle-auto-height="container">
        <div class="col-xs-12">
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
                                    Twoja przyszła emerytura<sup><a href="#przypisy">3</a></sup>
                                </div>

                                <div class="col-md-3 col-md-height calc-3-retirement-value-container">
                                    <button class="js-retirement-live-value btn btn-selector calc-3-retirement-value" disabled></button>
                                </div>
                            </div>
                        </div>

                        <header class="row">
                            <div class="col-xs-12">
                                <p class="row-no-margins">Wyobraź sobie swoje życie na emeryturze i zaznacz związane z&nbsp;nim potrzeby:</p>
                            </div>
                        </header>

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
                                    3. Wiadomo – opieka medyczna:
                                </div>

                                <div class="col-md-3 col-md-height">
                                    <button class="btn btn-selector calc-2-element" data-value="200" data-selected="false" data-group="6">
                                        Publiczna służba zdrowia
                                        <span>(szacunek!)</span>
                                    </button>
                                </div>

                                <div class="col-md-3 col-md-height">
                                    <button class="btn btn-selector calc-2-element" data-value="400" data-selected="false" data-group="6">
                                        Miks: prywatny specjalista
                                        + szpital państwowy
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
                                    4. Zwyczajowo w&nbsp;miesiącu przemieszczasz się:
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
                                        Kolekcjonowanie młodej polskiej sztuki
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
                                        <span>(Stary Kontynent czeka)</span>
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

                        <div class="row">
                            <div class="col-xs-12 col-md-8 col-md-offset-2">
                                <aside class="annotation">
                                    Przedstawione koszty mają charakter jedynie szacunkowy i zostały opracowane na podstawie analiz własnych Prudential.
                                </aside>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <section class="row rnCalc-results-page">
                <div class="col-xs-12">
                    <button class="btn btn-left btn-red collapse hidden-xs hidden-sm" data-calc-trigger="reset-calc">
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
                                            Ciężkie czasy nadchodzą, a&nbsp;Ty jesteś <span>średnio gotowy</span>.
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
                                            Wygląda na to, że należysz do tej grupki osób, których <span>przyszłość nie rysuje się w&nbsp;bardzo ciemnych barwach</span>.
                                        </div>

                                        <p>
                                            Trzymamy kciuki, żebyś nigdy nie musiał sobie niczego odmawiać. Ale co będzie, jeśli coś pójdzie nie tak? Czy masz
                                            pewność, że zawsze będziesz dobrze zarabiać? A&nbsp;co, jeśli w przyszłości politycy postanowią przeorganizować
                                            system emerytalny na Twoją niekorzyść? Zawsze warto być przygotowanym. Lepiej zadbaj z nami o&nbsp;lepszą przyszłość dla siebie i&nbsp;bliskich.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <button class="btn btn-left btn-red collapse visible-xs visible-sm" data-calc-trigger="reset-calc">
                                <img src="img/icon-arrow-left-red.png" alt="">
                                oblicz<br> jeszcze raz
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="row row-filled-red">
        <div class="col-xs-12">
            <div class="text-center">
                <p class="btn-near-cta">Jeśli nie chcesz żyć za 1/3 pensji, to...</p>
                <a href="emerytura-bez-obaw" class="btn btn-primary btn-white">Zaplanuj swoją emeryturę <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
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
                <a href="mit-zle-rzeczy-przydarzaja-sie-innym">
                    <img src="img/mity/mit-10-wide.jpg" alt="Mit. Złe rzeczy przydarzają się innym" class="img-responsive full-width" />
                </a>
            </figure>
        </div>

        <div class="col-md-6">
            <figure>
                <a href="mit-o-emeryturze-moge-pomyslec-pozniej">
                    <img src="img/mity/mit-2-wide.jpg" alt="Mit. O emeryturze mogę pomyśleć później" class="img-responsive full-width" />
                </a>
            </figure>
        </div>
    </div>
</div>

<?php
Tpl::bottom();
Tpl::annotations([
    1 => 'Wywiad z prezesem ZUS, Z. Derdziukiem, Gazeta Wyborcza, 19 marca 2012 r.',
    2 => 'GUS, Opracowanie „Emerytury i renty w 2013 r.”',
    3 => 'Wartość wysokości świadczenia emerytalnego została obliczona w sposób uproszczony przy założeniu, że przewidywana emerytura wyniesie
            1/3 obecnej miesięcznej pensji netto podanej przez osobę zainteresowaną obliczeniami. Założenie bazuje na prognozach podawanych przez
            Zakład Ubezpieczeń Społecznych dotyczących relacji emerytury do ostatniej pensji. <a href="http://www.zus.pl/default.asp?id=1&amp;p=1&amp;idk=1916" target="_blank">Źródło</a>.'
]);
Tpl::htmlFooter();
?>

