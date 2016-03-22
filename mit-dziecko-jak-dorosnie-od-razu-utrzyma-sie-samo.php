<?php
//mit 7 (kiedyś 8)

require_once('libs/App.class.php');

Tpl::htmlHead(null, [
    'title' => 'Prudential | Mit | Dziecko, jak dorośnie, od razu utrzyma się samo.',
    'desc' => 'Dorosłe dziecko jeszcze przez kilka lat po osiągnięciu pełnoletniości będzie korzystać z pomocy rodziców, zwłaszcza w czasie studiów. Praca dorywcza, często na ułamek etatu, nie zawsze pozwala na pełne usamodzielnie się.'
]);
Tpl::nav();
?>


<div class="jumbotron border-top">
    <script>
       AdobeEdge.loadComposition('m8', 'EDGE-2335674786', {
        scaleToFit: "width",
        centerStage: "horizontal",
        minW: "0px",
        maxW: "undefined",
        width: "1800px",
        height: "576px"
    }, {"dom":{}}, {"dom":{}});
    </script>
    <div id="Stage" class="EDGE-2335674786 full-width hidden-xs hidden-sm"></div>
    <img src="img/mity/mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo-mobile.jpg" alt="Mit. Dziecko, jak dorośnie, od razu utrzyma się samo." class="img-responsive full-width visible-xs visible-sm">

    <a href="mit-ubezpieczenie-na-zycie-to-strata-pieniedzy" class="btn btn-left">
        <img src="img/icon-arrow-left.png" alt="">
        Poprzedni<br>mit
    </a>

    <a href="mit-o-przyszlosci-dziecka-moge-pomyslec-jak-bedzie-wieksze" class="btn btn-right">
        <img src="img/icon-arrow-right.png" alt="">
        Następny<br>mit
    </a>
</div>

<div class="container-fluid">
    <div class="row row-flex row-centered row-margin">
        <div class="hidden-xs hidden-sm hidden-md col-lg-2 col-lg-offset-2">
            <img src="img/icon-megaphone.png" alt="" class="headline-image img-responsive">
        </div>

        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-6">
            <div class="headline headline-left">
                <div>
                    Naprawdę tak myślisz? I to właśnie powiesz dziecku, gdy będzie potrzebowało pieniędzy
                    na akademik i książki? Przecież pełnoletność to nie wszystko.
                    <strong>Dorosłe dziecko jeszcze przez kilka lat będzie korzystać z pomocy rodziców,</strong>
                    zwłaszcza w czasie studiów. Praca dorywcza, często na ułamek etatu, nie zawsze od razu pozwala na pełne usamodzielnienie się.
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-12 hidden-xs hidden-sm">
            <div class="text-center">
                <a href="#kalkulator" class="btn-gray">Przewiń w dół<div class="clearfix"></div><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>




    <div class="text-center">
        <header class="row row-filled-gray border-top-no-margin" id="kalkulator">
            <h1>Kosztowna <strong>dorosłość</strong></h1>
            <hr>
            <p>
                Przyjrzyj się bliżej przyszłym potrzebom Twojego dziecka, by wyliczyć kwotę, jaka ułatwi mu start w&nbsp;dorosłe życie.
            </p>
        </header>
        <div id="nCalc7" class="calc-selectors row hidden-sm hidden-xs">
            <div class="guy-margin" style="padding-left: 210px;background-color: #eaeaea;">
                <div class="row-filled-gray">
                    <div class="guy-container">
                        <div class="coins-stack hidden-xs to-hide" id="calc-5-coins">
                        </div>
                        <div class="cloud-block cloud-result-col">
                            Suma przyszłych potrzeb dziecka:
                            <div class="calc-5-sum-container">
                                <span id="calc-5-sum">0</span> zł
                            </div>
                        </div>
                        <div class="cloud1-step">
                            <div class="col-xs-5 col-md-5 col-md-offset-2 text-center quiz8-question">
                                <h2>Na jakie 5-LETNIE STUDIA pójdzie Twoje dziecko?</h2>
                            </div>
                            <div class="guy-block guy-progress-bar">
                                <img src="img/calc-progress-1.png" alt="" class="img-responsive">
                            </div>
                            <img src="img/myth8-guy-1.png" class="img-responsive center-block" alt="">
                            <div class="cloud-block cloud-block-1">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element" data-value="12000" data-selected="false" data-group="7">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -150px;">
                                                <img src="img/cloud-dzienne.png" alt="" class="cloud-icon">
                                                <p>Dzienne<span>(państwowe)</span></p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -150px;">
                                                <img src="img/cloud-dzienne-white.png" alt="" class="cloud-icon">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cloud-block cloud-block-2">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element" data-value="150000" data-selected="false" data-group="7">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -150px;">
                                                <img src="img/cloud-prestizowe.png" alt="" class="">
                                                <p>Prestiżowy kierunek<span>(za granicą)</p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -150px;">
                                                <img src="img/cloud-prestizowe-white.png" alt="" class="">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cloud-block cloud-block-3">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element" data-value="36000" data-selected="false" data-group="7">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -150px;">
                                                <img src="img/cloud-prywatna.png" alt="" class="">
                                                <p>Prywatna uczelnia<span>(w Polsce)</p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -150px;">
                                                <img src="img/cloud-prywatna-white.png" alt="" class="">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cloud2-step">
                            <div class="col-xs-5 col-md-5 col-md-offset-2 text-center quiz8-question">
                                <h2>LOKUM W CZASIE 5-LETNICH STUDIÓW:</h2>
                            </div>
                            <div class="guy-block guy-progress-bar">
                                <img src="img/calc-progress-2.png" alt="" class="img-responsive">
                            </div>
                            <img src="img/myth8-guy-2.png" class="img-responsive center-block" alt="">
                            <div class="cloud-block cloud-block-1">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element" data-value="15000" data-selected="false" data-group="1">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-akademik.png" alt="" class="">
                                                <p>Akademik<span>(przytulny ;) )</span></p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-akademik-white.png" alt="" class="">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cloud-block cloud-block-2">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element" data-value="30000" data-selected="false" data-group="1">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-wynajetemieszkanie.png" alt="" class="">
                                                <p>Wynajęte mieszkanie<span>(albo chociaż pokój)</span></p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-wynajetemieszkanie-white.png" alt="" class="">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cloud-block cloud-block-3">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element" data-value="120000" data-selected="false" data-group="1">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-kawalerka.png" alt="" class="">
                                                <p>Kawalerka<span>(ciasna, ale własna)</span></p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-kawalerka-white.png" alt="" class="">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cloud3-step">
                            <div class="col-xs-5 col-md-5 col-md-offset-2 text-center quiz8-question">
                                <h2>NAGRODA ZA OBRONĘ DYPLOMU:</h2>
                            </div>
                            <div class="guy-block guy-progress-bar">
                                <img src="img/calc-progress-3.png" alt="" class="img-responsive">
                            </div>
                            <img src="img/myth8-guy-3.png" class="img-responsive center-block" alt="">
                            <div class="cloud-block cloud-block-1">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element" data-value="500" data-selected="false" data-group="6">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-sushi.png" alt="" class="">
                                                <p>Wspólny wypad na sushi</p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-sushi-white.png" alt="" class="">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cloud-block cloud-block-2">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element" data-value="1500" data-selected="false" data-group="6">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-pioro.png" alt="" class="">
                                                <p> Eleganckie pióro<span>(z grawerem)</span></p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-pioro-white.png" alt="" class="">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cloud-block cloud-block-3">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element" data-value="5000" data-selected="false" data-group="6">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-wakacje.png" alt="" class="">
                                                <p>Zasłużone wakacje<span>(zagraniczne!)</span></p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-wakacje-white.png" alt="" class="">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cloud4-step">
                            <div class="col-xs-5 col-md-5 col-md-offset-2 text-center quiz8-question">
                                <h2>PIERWSZY SAMOCHÓD:</h2>
                            </div>
                            <div class="guy-block guy-progress-bar">
                                <img src="img/calc-progress-4.png" alt="" class="img-responsive">
                            </div>
                            <img src="img/myth8-guy-4.png" class="img-responsive center-block" alt="">
                            <div class="cloud-block cloud-block-1">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element" data-value="20000" data-selected="false" data-group="4">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-tani.png" alt="" class="">
                                                <p>Tani, (nie)zawodny</p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-tani-white.png" alt="" class="">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cloud-block cloud-block-2">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element" data-value="50000" data-selected="false" data-group="4">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-miejski.png" alt="" class="">
                                                <p>Miejski i&nbsp;sportowy</p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-miejski-white.png" alt="" class="">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cloud-block cloud-block-3">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element" data-value="80000" data-selected="false" data-group="4">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-lsniacy.png" alt="" class="">
                                                <p>Lśniący i&nbsp;komfortowy</p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -130px;">
                                                <img src="img/cloud-lsniacy-white.png" alt="" class="">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cloud5-step">
                            <div class="col-xs-5 col-md-5 col-md-offset-2 text-center quiz8-question">
                                <h2>ŚLUB!:</h2>
                            </div>
                            <div class="guy-block guy-progress-bar">
                                <img src="img/calc-progress-5.png" alt="" class="img-responsive">
                            </div>
                            <img src="img/myth8-guy-5.png" class="img-responsive center-block" alt="">
                            <div class="cloud-block cloud-block-1">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element" data-value="10000" data-selected="false" data-group="2">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -140px;">
                                                <img src="img/cloud-uroczysty.png" alt="" class="">
                                                <p>Uroczysty obiad z lampką szampana</p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -140px;">
                                                <img src="img/cloud-uroczysty-white.png" alt="" class="">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cloud-block cloud-block-2">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element" data-value="30000" data-selected="false" data-group="2">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -140px;">
                                                <img src="img/cloud-tradycyjnie.png" alt="" class="">
                                                <p>Tradycyjnie, w domu panny młodej</p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -140px;">
                                                <img src="img/cloud-tradycyjnie-white.png" alt="" class="">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cloud-block cloud-block-3">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element" data-value="60000" data-selected="false" data-group="2">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -150px;">
                                                <img src="img/cloud-wystawne.png" alt="" class="">
                                                <p>Wystawne przyjęcie w oranżerii</span></p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -150px;">
                                                <img src="img/cloud-wystawne-white.png" alt="" class="">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cloud6-step">
                            <div class="col-xs-5 col-md-5 col-md-offset-2 text-center quiz8-question">
                                <h2>RODZICIELSKI WKŁAD WE WŁASNEMIESZKANIE:</h2>
                            </div>  
                            <div class="guy-block guy-progress-bar">
                                <img src="img/calc-progress-6.png" alt="" class="img-responsive">
                            </div>
                            <img src="img/myth8-guy-6.png" class="img-responsive center-block" alt="">
                            <div class="cloud-block cloud-block-1">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element"  data-value="25000" data-selected="false" data-group="5">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -150px;">
                                                <img src="img/cloud-m1.png" alt="" class="">
                                                <p>Skromne M1</p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -150px;">
                                                <img src="img/cloud-m1-white.png" alt="" class="">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cloud-block cloud-block-2">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element" data-value="45000" data-selected="false" data-group="5">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -150px;">
                                                <img src="img/cloud-m2.png" alt="" class="">
                                                <p>Optymalne M2</p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -150px;">
                                                <img src="img/cloud-m2-white.png" alt="" class="">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cloud-block cloud-block-3">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center calc-2-element" data-value="65000" data-selected="false" data-group="5">
                                        <div class="cloud-container">
                                            <img src="img/cloud.png" alt="" class="cloud">
                                            <div style="margin-top: -150px;">
                                                <img src="img/cloud-m3.png" alt="" class="">
                                                <p>Poważne M3</p>
                                            </div>
                                        </div>
                                        <div class="cta-container">
                                            <img src="img/cloud-red.png" alt="" class="cloud">
                                            <div style="margin-top: -150px;">
                                                <img src="img/cloud-m3-white.png" alt="" class="">
                                                <a href="" class="btn btn-primary btn-cloud btn-small btn-white">DALEJ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cloud7-step">
                            <div class="guy-block guy-progress-bar">
                                <img src="img/calc-progress-7.png" alt="" class="img-responsive">
                            </div>
                            <img src="img/myth8-guy-7.png" class="img-responsive center-block" alt="">
                            <div class="cloud-block cloud-block-result">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center">
                                        <div class="cloud-container">
                                            <img src="img/cloud-result.png" alt="" class="cloud-result">
                                            <div style="margin-top: -241px;margin-left: 40px;">
                                                <a href="/przyszlosc-dziecka" class="btn btn-primary btn-red btn-cloud-result">
                                                    <span class="btn-cloud-result-fix">Nie czekaj. Już teraz zadbaj o lepszy<br>start w dorosłe życie swojego dziecka</span><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="cloud-block cloud-block-4">
                                <div class="row">
                                    <div class="col-xs-9 col-md-9  col-xs-height text-center">
                                        <div class="cloud-container">
                                            <div class="">
                                                <p style="margin: 0 auto!important;float: none;color: #fff;font-weight: 400;cursor:default">Sprawdź, ile należy odkładać miesięcznie, by zgromadzić wyliczoną kwotę.</p>
                                                <a href="mit-o-przyszlosci-dziecka-moge-pomyslec-jak-bedzie-wieksze" class="btn btn-primary btn-white btn-cta">
                                                    <span class="btn-cloud-result-fix">IM PÓŹNIEJ,<br>TYM TRUDNIEJ</span>
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div id="nCalcmobile" class="calc-selectors row hidden-md hidden-lg">
            <div class="guy-margin" style="margin: 0;">
                <div class="row-filled-gray">
                    <div class="guy-container" style="background: #add6e2;">
                        <img src="img/suma-potrzeb-background.png" style="float: right;">
                        <div class="cloud-block cloud-result-col-mobile">
                            Suma przyszłych potrzeb dziecka:
                            <div class="calc-5-sum-container">
                                <span id="calc-5-sum-mobile">0</span> zł
                            </div>
                        </div>
                        <div class="cloud1-step">
                            <div class="col-xs-12 col-md-12 text-center">
                                <h2 style="color:#fff;font-weight:900">Na jakie 5-LETNIE STUDIA pójdzie Twoje dziecko?</h2>
                            </div>
                            <div class="guy-block guy-progress-bar-mobile">
                                <img src="img/calc-progress-1.png" alt="" class="img-responsive">
                            </div>
                            
                            <div class="col-sm-6 col-xs-6">
                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="12000" data-selected="false" data-group="7">
                                        Dzienne<span>(państwowe)</span>
                                    </button>
                                </div>

                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="150000" data-selected="false" data-group="7">
                                        Prestiżowy kierunek<span>(za granicą)
                                    </button>
                                </div>

                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="36000" data-selected="false" data-group="7">
                                        Prywatna uczelnia<span>(w Polsce)
                                    </button>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <button class="btn btn-quiz-select-answer col-sm-12 col-xs-12 next-step" disabled="" style="padding:20px; margin-top: 10px;;">
                                            <span>
                                                DALEJ<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            </span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-height col-xs-4 img-responsive center-block col-bottom" style="display: table-cell;float: none;height: 100%;">
                                <img src="img/myth8-guy-1-mobile.png" class="img-responsive center-block" alt="">
                            </div>
                        </div>
                        <div class="cloud2-step">
                            <div class="col-xs-12 col-md-12 text-center">
                                <h2 style="color:#fff;font-weight:900">LOKUM W CZASIE 5-LETNICH STUDIÓW:</h2>
                            </div>
                            <div class="guy-block guy-progress-bar-mobile">
                                <img src="img/calc-progress-2.png" alt="" class="img-responsive">
                            </div>
                            
                            <div class="col-sm-6 col-xs-6">
                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="15000" data-selected="false" data-group="1">
                                        Akademik<span>(przytulny ;) )</span>
                                    </button>
                                </div>

                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="30000" data-selected="false" data-group="1">
                                        Wynajęte mieszkanie<span>(albo chociaż pokój)</span>
                                    </button>
                                </div>

                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="120000" data-selected="false" data-group="1">
                                        Kawalerka<span>(ciasna, ale własna)</span>
                                    </button>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <button class="btn btn-quiz-select-answer col-sm-12 col-xs-12 next-step" disabled="" style="padding:20px; margin-top: 10px;;">
                                            <span>
                                                DALEJ<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            </span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-height col-xs-4 img-responsive center-block col-bottom" style="display: table-cell;float: none;height: 100%;">
                                <img src="img/myth8-guy-2-mobile.png" class="img-responsive center-block" alt="">
                            </div>
                        </div>
                        <div class="cloud3-step">
                            <div class="col-xs-12 col-md-12 text-center">
                                <h2 style="color:#fff;font-weight:900">NAGRODA ZA OBRONĘ DYPLOMU:</h2>
                            </div>
                            <div class="guy-block guy-progress-bar-mobile">
                                <img src="img/calc-progress-3.png" alt="" class="img-responsive">
                            </div>
                            
                            <div class="col-sm-6 col-xs-6">
                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="500" data-selected="false" data-group="6">
                                        Wspólny wypad na sushi
                                    </button>
                                </div>

                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="1500" data-selected="false" data-group="6">
                                        Eleganckie pióro<span>(z grawerem)</span>
                                    </button>
                                </div>

                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="5000" data-selected="false" data-group="6">
                                        Zasłużone wakacje<span>(zagraniczne!)</span>
                                    </button>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <button class="btn btn-quiz-select-answer col-sm-12 col-xs-12 next-step" disabled="" style="padding:20px; margin-top: 10px;;">
                                            <span>
                                                DALEJ<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            </span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-height col-xs-4 img-responsive center-block col-bottom" style="display: table-cell;float: none;height: 100%;">
                                <img src="img/myth8-guy-3-mobile.png" class="img-responsive center-block" alt="">
                            </div>
                        </div>
                        <div class="cloud4-step">
                            <div class="col-xs-12 col-md-12 text-center">
                                <h2 style="color:#fff;font-weight:900">PIERWSZY SAMOCHÓD:</h2>
                            </div>
                            <div class="guy-block guy-progress-bar-mobile">
                                <img src="img/calc-progress-4.png" alt="" class="img-responsive">
                            </div>
                            
                            <div class="col-sm-6 col-xs-6">
                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="20000" data-selected="false" data-group="4">
                                        Tani, (nie)zawodny
                                    </button>
                                </div>

                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="50000" data-selected="false" data-group="4">
                                        Miejski i&nbsp;sportowy
                                    </button>
                                </div>

                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="80000" data-selected="false" data-group="4">
                                        Lśniący i&nbsp;komfortowy
                                    </button>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <button class="btn btn-quiz-select-answer col-sm-12 col-xs-12 next-step" disabled="" style="padding:20px; margin-top: 10px;;">
                                            <span>
                                                DALEJ<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            </span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-height col-xs-4 img-responsive center-block col-bottom" style="display: table-cell;float: none;height: 100%;">
                                <img src="img/myth8-guy-4-mobile.png" class="img-responsive center-block" alt="">
                            </div>
                        </div>
                        <div class="cloud5-step">
                            <div class="col-xs-12 col-md-12 text-center">
                                <h2 style="color:#fff;font-weight:900">ŚLUB!:</h2>
                            </div>
                            <div class="guy-block guy-progress-bar-mobile">
                                <img src="img/calc-progress-5.png" alt="" class="img-responsive">
                            </div>
                            
                            <div class="col-sm-6 col-xs-6">
                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="10000" data-selected="false" data-group="2">
                                        Uroczysty obiad z lampką szampana
                                    </button>
                                </div>

                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="30000" data-selected="false" data-group="2">
                                        Tradycyjnie, w domu panny młodej
                                    </button>
                                </div>

                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="60000" data-selected="false" data-group="2">
                                        Wystawne przyjęcie w oranżerii
                                    </button>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <button class="btn btn-quiz-select-answer col-sm-12 col-xs-12 next-step" disabled="" style="padding:20px; margin-top: 10px;;">
                                            <span>
                                                DALEJ<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            </span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-height col-xs-4 img-responsive center-block col-bottom" style="display: table-cell;float: none;height: 100%;">
                                <img src="img/myth8-guy-5-mobile.png" class="img-responsive center-block" alt="">
                            </div>
                        </div>

                        <div class="cloud6-step">
                            <div class="col-xs-12 col-md-12 text-center">
                                <h2 style="color:#fff;font-weight:900">RODZICIELSKI WKŁAD WE WŁASNEMIESZKANIE:</h2>
                            </div>
                            <div class="guy-block guy-progress-bar-mobile">
                                <img src="img/calc-progress-6.png" alt="" class="img-responsive">
                            </div>
                            
                            <div class="col-sm-6 col-xs-6">
                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="25000" data-selected="false" data-group="5">
                                        Skromne M1
                                    </button>
                                </div>

                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="45000" data-selected="false" data-group="5">
                                        Optymalne M2
                                    </button>
                                </div>

                                <div class="col-sm-12">
                                    <button class="btn btn-selector calc-2-element-mobile" data-value="65000" data-selected="false" data-group="5">
                                        Poważne M3
                                    </button>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <button class="btn btn-quiz-select-answer col-sm-12 col-xs-12 next-step" disabled="" style="padding:20px; margin-top: 10px;;">
                                            <span>
                                                DALEJ<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            </span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-height col-xs-4 img-responsive center-block col-bottom" style="display: table-cell;float: none;height: 100%;">
                                <img src="img/myth8-guy-6-mobile.png" class="img-responsive center-block" alt="">
                            </div>
                        </div>

                        <div class="cloud7-step">
                            <div class="col-xs-12 col-md-12 text-center">
                                <h2 style="color: #fff;font-weight:900">Sprawdź, ile należy odkładać miesięcznie, by zgromadzić wyliczoną kwotę.</h2>
                                    <a href="mit-o-przyszlosci-dziecka-moge-pomyslec-jak-bedzie-wieksze" class="btn btn-primary btn-white btn-cta">
                                        <span class="btn-cloud-result-fix">IM PÓŹNIEJ,<br>TYM TRUDNIEJ</span>
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    </a>
                            </div>
                            <div class="guy-block guy-progress-bar-mobile">
                                <img src="img/calc-progress-7.png" alt="" class="img-responsive">
                            </div>
                            
                            <div class="col-sm-12 col-xs-12 img-responsive" style="">
                                <img src="img/myth8-guy-7-mobile.png" class="img-responsive center-block" alt="">
                            </div>
                            <!-- <div class="col-sm-12 col-xs-12" style="background: #cd0e0c;text-align: center;">
                                <a href="#" class="btn btn-primary btn-white btn-cloud-result" style="border: 0;padding:20px; margin-top: 10px; 0;">
                                    <span class="btn-cloud-result-fix">Zadbaj o jego przyszłość już teraz!<br>ZAPLANUJ DZIECKU START</span><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                </a>
                            </div> -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-filled-red">
        <div class="col-xs-12">
            <div class="text-center">
                <div class="btn-near-cta">Chcesz ułatwić swojemu dziecku start w&nbsp;dorosłość?</div>
                <a href="https://formularz.prudential.pl/lead?lid=46722" class="btn btn-primary btn-white" target="_blank" data-trigger="versatag-click" data-url="<?php echo App::APP_URL; ?>versatag/46722">Zaplanuj dziecku przyszłość <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
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
                <a href="mit-o-przyszlosci-dziecka-moge-pomyslec-jak-bedzie-wieksze">
                    <img src="img/mity/mit-8-wide.jpg" alt="Mit. O przyszłości dziecka mogę pomyśleć jak będzie większe" class="img-responsive full-width" />
                </a>
            </figure>
        </div>
    </div>
</div>
    
<?php
Tpl::bottom();
Tpl::annotations([
    1 => '<a href="http://www.bankier.pl/wiadomosc/ile-kosztuje-utrzymanie-studenta-2034004.html" target="_blank">Dominika Bojarska, Malwina Wrotniak, Ile kosztuje utrzymanie studenta?</a>, 23.10.2009.',
    2 => 'Obliczenia własne Prudential na podstawie cen biletów dostępnych na stronach internetowych ZTM, w wybranych miastach akademickich.',
    3 => 'Wyliczenia własne przygotowane na podstawie przykładowych cen akcesoriów medycznych oraz artykułów plastycznych dostępnych w specjalistycznych sklepach internetowych.',
    4 => 'Szacunkowa cena średniego zamówienia z dostawą do domu na podstawie ofert portali oferujących jedzenie na wynos. Szacunkowa cena biletu na podstawie ofert zawartych na portalach umożliwiających rezerwację i zakup biletów online na wydarzenia masowe.',
    5 => '<a href="http://www.bankier.pl/wiadomosc/Szukasz-pierwszej-pracy-Zapomnij-o-kokosach-na-starcie-3006216.html" target="_blank">Marcin Lekki, Bankier.pl, Szukasz pierwszej pracy? Zapomnij o kokosach na starcie</a>, 5.12.2013 r.'
]);
Tpl::htmlFooter();
?>


