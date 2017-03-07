<?php
require_once('libs/App.class.php');

Tpl::htmlHead(null, [
    'title' => 'Prudential | Dzieci młodych bogów',
    'desc' => 'Ubezpieczenie oszczędnościowe Start w Życie to gwarancja, że niezależnie od tego, co przyniesie przyszłość, Twoje dziecko otrzyma wsparcie finansowe.'
]);
Tpl::nav();
?>

<div class="jumbotron border-top">
    <script>
       AdobeEdge.loadComposition('p1', 'EDGE-2147585985', {
        scaleToFit: "width",
        centerStage: "horizontal",
        minW: "0px",
        maxW: "undefined",
        width: "1800px",
        height: "576px"
    }, {"dom":{}}, {"dom":{}});
    </script>
    <div id="Stage" class="EDGE-2147585985 full-width hidden-xs hidden-sm"></div>
    
    <img src="img/produkty/przyszlosc-dziecka.jpg" alt="Przyszłość dziecka" class="img-responsive full-width visible-xs visible-sm">

    <a href="emerytura-bez-obaw" class="btn btn-right"<?php echo Tpl::getGTMLinkData('emerytura-bez-obaw', 'kafelki', 'rozwiazania'); ?>>
        <img src="img/icon-arrow-right.png" alt="">
        Poprzedni<br>produkt
    </a>

    <a href="ochrona-zdrowia" class="btn btn-left"<?php echo Tpl::getGTMLinkData('ochrona-zdrowia', 'kafelki', 'rozwiazania'); ?>>
        <img src="img/icon-arrow-left.png" alt="">
        Następny<br>produkt
    </a>
</div>

<div class="container-fluid">
    <header class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <h1 class="h1-mod-1">
                Ubezpieczenie oszczędnościowe <strong>Start w Życie</strong> to gwarancja, że niezależnie od tego, co przyniesie przyszłość,
                Twoje dziecko otrzyma wsparcie finansowe. Pieniądze na studia, pierwszy samochód czy wkład
                na mieszkanie – potrzeb z pewnością nie zabraknie.<br>
                <br><br>
                Czym jest ubezpieczenie oszczędnościowe?
            </h1>
        </div>

        <hr>

        <p class="no-bottom-margin">
            To innowacyjne rozwiązanie, zapewniające:
        </p>
    </header>

    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <div class="row main-info-table">
                <div class="row-height">
                    <div class="col-xs-12 col-md-2 col-md-height col-md-middle">
                        <img src="img/icon-child.png" alt="" class="img-responsive center-block">
                    </div>

                    <div class="col-xs-12 col-md-4 col-md-height col-md-middle main-info-desc">
                        możliwość długoterminowego, systematycznego
                        oszczędzania na przyszłość Twojego dziecka
                    </div>

                    <div class="col-xs-12 col-md-2 col-md-height col-md-middle">
                        <img src="img/icon-shield.png" alt="" class="img-responsive center-block">
                    </div>

                    <div class="col-xs-12 col-md-4 col-md-height col-md-middle main-info-desc">
                        ochronę ubezpieczeniową dla Twojej pociechy przez cały czas trwania umowy
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="row border-top">
        <h1>
            Co zyskam z ubezpieczeniem oszczędnościowym <strong>Start w Życie?</strong>
        </h1>

        <hr>
    </header>

    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <div class="row std-info-table">
                <div class="row-height">
                    <div class="col-xs-12 col-md-2 col-md-height">
                        <img src="img/icon-money-bag-2.png" alt="" class="img-responsive center-block">
                    </div>

                    <div class="col-xs-12 col-md-4 col-md-height col-md-top">
                        <h3>Gwarantowana kwota wypłaty</h3>

                        <p>
                            Zawierając umowę, umawiasz się z nami na minimalną kwotę, jaką Twoje dziecko otrzyma w&nbsp;określonym przez Ciebie momencie.
                            Dzięki temu wiesz, że bez względu na to, co przyniesie przyszłość, Twoje dziecko będzie mogło zrealizować swoje plany w&nbsp;przyszłości.
                        </p>
                    </div>

                    <div class="col-xs-12 col-md-2 col-md-height col-md-top">
                        <img src="img/icon-graph-2.png" alt="" class="img-responsive center-block">
                    </div>

                    <div class="col-xs-12 col-md-4 col-md-height col-md-top">
                        <h3>Premie roczne i&nbsp;końcowa</h3>

                        <p>
                            Co roku oraz na zakończenie umowy możesz otrzymać premie
                            – dodatkowe kwoty, które powiększą oszczędności na przyszłość
                            Twojego dziecka.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row std-info-table">
                <div class="row-height">
                    <div class="col-xs-12 col-md-2 col-md-height">
                        <img src="img/icon-vault.png" alt="" class="img-responsive center-block">
                    </div>

                    <div class="col-xs-12 col-md-4 col-md-height col-md-top">
                        <h3>Bezpieczeństwo</h3>

                        <p>
                            Twoje życie i zdrowie też może zostać objęte ubezpieczeniem – w razie poważnej choroby, niezdolności do
                            pracy, poważnego uszczerbku lub gdyby Ciebie zabrakło – Prudential przejmie obowiązek regularnego
                            opłacania składek za ubezpieczenie Twojego dziecka aż do końca trwania umowy.
                        </p>
                    </div>

                    <div class="col-xs-12 col-md-2 col-md-height">
                        <img src="img/icon-pig.png" alt="" class="img-responsive center-block">
                    </div>

                    <div class="col-xs-12 col-md-4 col-md-height col-md-top">
                        <h3>Brak podatku</h3>

                        <p>
                            Pieniądze, które dziecko otrzyma na koniec okresu ubezpieczenia,
                            nie podlegają opodatkowaniu 19-procentowym podatkiem od zysków
                            kapitałowych (zgodnie z aktualnie obowiązującymi przepisami prawa
                            na dzień 21.10.2015 r.).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-filled-red">
        <div class="col-xs-12">
            <div class="text-center">
                <div class="btn-near-cta"><strong>Chcesz ułatwić swojemu dziecku start w&nbsp;dorosłość?</strong></div>
                <p>
                    Umów się na niezobowiązujące spotkanie z nami w wybranym przez Ciebie miejscu i czasie. Nasz konsultant pomoże Ci przygotować dokładny plan
                    oszczędnościowy i zadbać o bezpieczną przyszłość Twojej pociechy.
                </p>

                <a href="https://formularz.prudential.pl/lead?lid=45827" class="btn btn-primary btn-white" target="_blank" data-trigger="run-conversion" data-id="798548">Skontaktuj się z nami <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>

    <header class="row border-top">
        <h1>
            Nie czujesz się przekonany?
        </h1>

        <hr>
    </header>

    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <div class="row std-info-table">
                <div class="row-height">
                    <div class="hidden-xs hidden-sm col-md-3 col-md-height"></div>
                    <div class="col-xs-12 col-md-2 col-md-height">
                        <img src="img/icon-childbulb.png" alt="" class="img-responsive center-block">
                    </div>

                    <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                        <p class="text-center"><strong>Policz, ile potrzebujesz, by ułatwić dziecku start w&nbsp;dorosłe życie</strong></p>

                        <a href="mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo#kalkulator"<?php echo Tpl::getGTMLinkData('mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo', 'kafelki', 'rozwiazania'); ?> class="btn btn-primary btn-gray center-block">Kosztowna dorosłość</a>
                    </div>
                    <div class="hidden-xs hidden-sm col-md-3 col-md-height"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-future row-margins">
        <header>
            <h1>Zadbaj o przyszłość</h1>
            <hr>
            <p>
                Wskaż, co jest dla Ciebie ważne, a&nbsp;my pomożemy Ci zadbać o&nbsp;przyszłość Twoją i&nbsp;Twoich bliskich.
            </p>
        </header>
        
        <div class="container-fluid">
            <div class="row row-padded row-products no-column-border">
                <div class="col-md-6 bg-border-top"></div>
                <div class="col-md-6 bg-border-top bg-border-top-2"></div>
                <div class="col-md-6">
                    <figure>
                        <a href="emerytura-bez-obaw"<?php echo Tpl::getGTMLinkData('emerytura-bez-obaw', 'kafelki', 'rozwiazania'); ?>><img src="img/produkty/produkt-emerytura-bez-obaw-wide.jpg" alt="Emerytura bez obaw" class="img-responsive full-width"></a>
                    </figure>
                </div>
                <div class="col-md-6">
                    <figure>
                        <a href="ochrona-zdrowia"<?php echo Tpl::getGTMLinkData('ochrona-zdrowia', 'kafelki', 'rozwiazania'); ?>><img src="img/produkty/produkt-ochrona-zdrowia-wide.jpg" alt="Ochrona zdrowia" class="img-responsive full-width"></a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php
Tpl::bottom();
Tpl::htmlFooter();
?>
