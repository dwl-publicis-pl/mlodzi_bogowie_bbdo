<?php
// mit 3
require_once('libs/App.class.php');

Tpl::htmlHead(null, [
    'title' => 'Prudential | Mit | Emerytura nie potrwa długo.',
    'desc' => 'Żyjemy coraz dłużej. Już dziś na emeryturze Polacy żyją około 19 lat. Zacznij oszczędzać na przyszłe dni.'
]);
Tpl::nav();
?>


<div class="jumbotron border-top">
    <script>
       AdobeEdge.loadComposition('m3', 'EDGE-2325718050', {
        scaleToFit: "width",
        centerStage: "horizontal",
        minW: "0px",
        maxW: "undefined",
        width: "1800px",
        height: "576px"
    }, {"dom":{}}, {"dom":{}});
    </script>
    <div id="Stage" class="EDGE-2325718050 full-width hidden-xs hidden-sm"></div>
    <img src="img/mity/mit-emerytura-nie-potrwa-dlugo-mobile.jpg" alt="Mit. Emerytura nie potrwa długo." class="img-responsive full-width visible-xs visible-sm">

    <a href="mit-o-emeryturze-moge-pomyslec-pozniej" class="btn btn-left">
        <img src="img/icon-arrow-left.png" alt="">
        Poprzedni<br>mit
    </a>

    <a href="mit-na-emeryturze-moje-potrzeby-beda-mniejsze" class="btn btn-right">
        <img src="img/icon-arrow-right.png" alt="">
        Następny<br>mit
    </a>
</div>

<div class="container-fluid">
    <div class="row row-flex row-centered row-margin">
        <div class="hidden-xs hidden-sm hidden-md col-lg-2 col-lg-offset-2">
            <img src="img/icon-magnifier.png" alt="" class="headline-image img-responsive">
        </div>

        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-6">
            <div class="headline headline-left">
                <div>
                    <strong>To mit. Już dziś na emeryturze Polacy żyją średnio
                    ok.&nbsp;19 lat<sup><a href="#przypisy">1</a></sup></strong>. A&nbsp;żyjemy coraz dłużej. Niektórzy z&nbsp;nas mogą na
                    emeryturze spędzić nawet 30 lat! Wystarczy spojrzeć na liczby.
                </div>
            </div>
        </div>
    </div>

    <div class="row border-top text-center">
        <div class="sock-container">
            <img src="img/sock.png" class="img-responsive center-block" alt="">

            <div class="sock-block sock-block-1">
                <div class="row">
                    <div class="row-height">
                        <div class="col-xs-3 col-md-3 col-md-push-9 col-xs-height col-xs-middle">
                            <img src="img/icon-sock-graph.png" alt="" class="img-responsive">
                        </div>

                        <div class="col-xs-9 col-md-9 col-md-pull-3 col-xs-height">
                            <h2>Coraz <strong>dłużej żyjemy</strong></h2>

                            <p>
                                Tempo tych zmian może być zaskakujące: wg danych
                                GUS od połowy XX wieku średnia długość życia w Polsce
                                wydłużyła się prawie o&nbsp;30%! To znaczy, że żyjemy
                                o blisko 20 lat dłużej niż nasi pradziadkowie!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sock-block sock-block-2">
                <div class="row">
                    <div class="row-height">
                        <div class="col-xs-3 col-xs-height col-xs-middle">
                            <img src="img/icon-sock-heart.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-xs-9 col-xs-height">
                            <h2>Już dziś żyjemy blisko <strong>20 lat na emeryturze</strong></h2>

                            <p>
                                Jak wynika z naszych badań<sup><a href="#przypisy">2</a></sup>, zaledwie 10% z nas zdaje sobie z tego sprawę.
                                Tymczasem wg danych GUS dziś w momencie przejścia na emeryturę Polacy żyją
                                jeszcze średnio ok. 19 lat (kobiety średnio aż 24 lata!)... a przecież to wciąż tylko średnia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sock-block sock-block-3">
                <div class="row">
                    <div class="row-height">
                        <div class="col-xs-3 col-md-3 col-md-push-9 col-xs-height col-xs-middle">
                            <img src="img/icon-sock-cake.png" alt="" class="img-responsive">
                        </div>

                        <div class="col-xs-9 col-md-9 col-md-pull-3 col-xs-height">
                            <h2>„Mnie to <strong>nie dotyczy</strong>”</h2>

                            <p>
                                Według naszych badań<sup><a href="#przypisy">2</a></sup> prawie co czwarty z nas ma wśród swoich bliskich kogoś, kto przeżył
                                co najmniej 90 lat. Dlaczego więc wydaje nam się, że my będziemy żyć znacznie krócej i nie dożyjemy emerytury?
                            </p>
                        </div>

                        <!--<div class="col-xs-9 col-xs-height">
                            <h2>„Mnie to <strong>nie dotyczy</strong>”</h2>

                            <p>
                                Według naszych badań<sup><a href="#przypisy">2</a></sup> prawie co czwarty z nas ma wśród swoich bliskich kogoś, kto przeżył
                                co najmniej 90 lat. Dlaczego więc wydaje nam się, że my będziemy żyć znacznie krócej i nie dożyjemy emerytury?
                            </p>
                        </div>
                        <div class="col-xs-3 col-xs-height col-xs-middle">
                            <img src="img/icon-sock-cake.png" alt="" class="img-responsive">
                        </div>-->
                    </div>
                </div>
            </div>

            <div class="sock-block sock-block-4">
                <div class="row">
                    <div class="row-height">
                        <div class="col-xs-3 col-xs-height col-xs-middle">
                            <img src="img/icon-sock-people.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-xs-9 col-xs-height">
                            <h2>Tylko 2 pracujących <strong>na 1&nbsp;emeryta</strong></h2>

                            <p>
                                Według danych GUS dziś na każdego emeryta przypadają 3 osoby pracujące, a&nbsp;i&nbsp;tak ich składki emerytalne nie wystarczają
                                na wypłacane emerytury. A za 35 lat osoby po 65. roku życia mają stanowić ponad 30% społeczeństwa! I na każdą taką osobę nie będą przypadać nawet dwie osoby pracujące.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-filled-red">
        <div class="col-xs-12">
            <div class="text-center">
                <div class="btn-near-cta">Jeżeli nie chcesz przez kilkanaście lat się martwić, to...</div>
                <a href="https://formularz.prudential.pl/lead?lid=46210" class="btn btn-primary btn-white" target="_blank" data-trigger="versatag-click" data-url="<?php echo App::APP_URL; ?>versatag/46210">Zaplanuj swoją emeryturę <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
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
                <a href="mit-o-emeryturze-moge-pomyslec-pozniej">
                    <img src="img/mity/mit-2-wide.jpg" alt="O emeryturze mogę pomyśleć później" class="img-responsive full-width" />
                </a>
            </figure>
        </div>

        <div class="col-md-6">
            <figure>
                <a href="mit-na-emeryturze-moje-potrzeby-beda-mniejsze">
                    <img src="img/mity/mit-4-wide.jpg" alt="Na emeryturze moje potrzeby będą mniejsze" class="img-responsive full-width" />
                </a>
            </figure>
        </div>
    </div>
</div>

<?php
Tpl::bottom();
Tpl::annotations([
    1 => 'Obliczenia własne Prudential na podstawie opracowania GUS „Trwanie życia w 2014 r.” (Warszawa 2015).',
    2 => 'Prudential Family Index, badania zrealizowane przez IQS Polska dla Prudential, październik 2015.'
]);
Tpl::htmlFooter();
?>

