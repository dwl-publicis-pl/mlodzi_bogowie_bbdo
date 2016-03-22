<?php
// mit 8 (kiedyś 7)

require_once('libs/App.class.php');

Tpl::htmlHead(null, [
    'title' => 'Prudential | Mit | O przyszłości dziecka mogę pomyśleć jak będzie większe.',
    'desc' => 'Start w dorosłość to szok dla dziecka, rodziców i domowego budżetu.'
]);
Tpl::nav();
?>

<div class="jumbotron border-top">
    <script>
       AdobeEdge.loadComposition('m7', 'EDGE-2333302564', {
        scaleToFit: "width",
        centerStage: "horizontal",
        minW: "0px",
        maxW: "undefined",
        width: "1800px",
        height: "576px"
    }, {"dom":{}}, {"dom":{}});
    </script>
    <div id="Stage" class="EDGE-2333302564 full-width hidden-xs hidden-sm"></div>
    <img src="img/mity/mit-przyszlosc-dziecka-mobile.jpg" alt="Mit. O przyszłości dziecka mogę pomyśleć jak będzie większe." class="img-responsive full-width visible-xs visible-sm">

    <a href="mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo" class="btn btn-left">
        <img src="img/icon-arrow-left.png" alt="">
        Poprzedni<br>mit
    </a>

    <a href="mit-zawsze-bede-zdrowy-tak-jak-dzis" class="btn btn-right">
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

    <div class="row border-top row-padded-vertical box-calculator" id="kalkulator">
        <header>
            <h1>im później, <strong>tym trudniej</strong></h1>
            <hr>
            <p>Zabezpieczenie przyszłości dziecka to duże wyzwanie dla domowego budżetu. Policz, ile trzeba odkładać miesięcznie, by wesprzeć dziecko wybraną kwotą na start.</p>
        </header>

        <div class="clearfix"></div>

        <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <form role="form" id="mscCalc7" action="#" method="post">
                <fieldset>
                    <div class="row small-margin">
                        <div class="col-md-2">
                            <label for="f-msc-rl">Przekażę środki:</label>
                        </div>

                        <div class="col-md-4">
                            <select name="retirement_length" class="form-control input-lg" id="f-msc-rl">
                                 <option value="18">Na osiemnastkę</option>
                                 <option value="24">Na koniec studiów</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label for="f-msc-ms">Jaką kwotą planujesz wesprzeć dziecko?: </label>
                        </div>

                        <div class="col-md-4">
                            <select name="monthly_savings" class="form-control input-lg" id="f-msc-ms">

                            <option value="5000">5000 zł</option>
                            <option value="10000">10000 zł</option>
                                <?php
                                foreach (range(25000, 100000, 25000) as $v) {
                                    ?><option value="<?php echo $v; ?>"<?php $v == 2000 ? print ' selected' : null; ?>><?php echo $v; ?> zł</option><?php
                                }
                                unset($v);
                                ?>
                            </select>
                            <!--<input name="monthly_savings" type="range" min="500" max="5000" step="500" class="form-control" id="f-msc-ms" value="1500">-->
                            <!--<span class="monthly_savings_value">1500</span>-->
                        </div>
                    </div>

                    <div class="row small-margin">
                        <div class="col-md-12 text-right">
                           <h3>Chcesz określić przyszłe potrzeby Twojego dziecka? <a href="mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo#kalkulator">Zobacz kalkulator »</a></h3>
                        </div>
                    </div>
                    <script>
                        
                        


                    </script>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="f-msc-ss">Zacznę odkładać, kiedy moje dziecko będzie miało:</label>
                        </div>

                        <div class="col-md-9">
                            <div class="start_save_up_value_container">
                            	<span class="start_save_up_value">3</span> 
                            	<span class="Start_save_up_label">miesiące</div>
                            <input name="start_save_up" type="range" min="0" max="16" step="1" class="form-control" id="f-msc-ss" value="0" autocomplete="off">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

        <div class="clearfix"></div>

        <div class="col-xs-12 col-md-2 col-md-offset-3 col-lg-offset-4">
            <img src="img/faces/face-calc7-1.jpg" alt="" class="img-responsive full-width round" id="retirements_saves_face" data-src-pattern="img/faces/face-calc7-%.jpg">
        </div>

        <div class="col-xs-12 col-md-2 col-md-offset-1">
            <img src="img/txt-musisz-odkladac-miesiecznie.png" alt="Musisz odkładać miesięcznie" class="img-responsive center-block calc-1-result-txt">
            <div class="retirement_saves_result_container"><span id="retirement_saves_result">...</span>&nbsp;zł</div>
        </div>

        <div class="clearfix"></div>

        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <aside class="annotation">
                Przedstawione wyliczenia obrazujące potencjalną kwotę miesięczną mają charakter jedynie szacunkowy i&nbsp;zostały opracowane przez Prudential, przy założeniu
                rzeczywistej stopy zwrotu w wysokości 2% w&nbsp;skali roku, wyrażonej netto, bez uwzględnienia podatku od zysków kapitałowych.
                Wyliczenia nie są związane z&nbsp;oszczędzaniem w&nbsp;ramach konkretnego produktu oferowanego przez The Prudential Assurance Company Limited Sp.&nbsp;z&nbsp;o.o. Oddział w&nbsp;Polsce.
            </aside>
        </div>
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
                <a href="mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo">
                    <img src="img/mity/mit-7-wide.jpg" alt="Mit. Dziecko jak dorośnie, od razu utrzyma się samo" class="img-responsive full-width" />
                </a>
            </figure>
        </div>

        <div class="col-md-6">
            <figure>
                <a href="mit-zawsze-bede-zdrowy-tak-jak-dzis">
                    <img src="img/mity/mit-9-wide.jpg" alt="Mit. Zawsze będę zdrowy tak jak dziś" class="img-responsive full-width" />
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

