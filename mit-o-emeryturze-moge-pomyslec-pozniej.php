<?php
// mit 2
require_once('libs/App.class.php');

Tpl::htmlHead(null, [
    'title' => 'Prudential | Mit | O emeryturze mogę pomyśleć później.',
    'desc' => 'Każdy krok przybliża nas do emerytury. Lepiej zacząć oszczędzać już dziś, by małymi krokami uzbierać na godne życie na emeryturze.'
]);
Tpl::nav();
?>


<div class="jumbotron border-top">
    <img src="img/mity/mit-o-emeryturze-moge-pomyslec-pozniej.jpg" alt="Mit. O emeryturze mogę pomyśleć później." class="img-responsive full-width hidden-xs hidden-sm">
    <img src="img/mity/mit-o-emeryturze-moge-pomyslec-pozniej-mobile.jpg" alt="Mit. O emeryturze mogę pomyśleć później." class="img-responsive full-width visible-xs visible-sm">

    <a href="mit-panstwo-da-mi-dobra-emeryture" class="btn btn-left">
        <img src="img/icon-arrow-left.png" alt="">
        Poprzedni<br>mit
    </a>

    <a href="mit-emerytura-nie-potrwa-dlugo" class="btn btn-right">
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
                Nie do końca, bo <strong>każdy dzień przybliża Cię do emerytury</strong>, czy tego
                chcesz, czy nie. Jeśli zaczniesz odkładać już dziś, małymi krokami możesz uzbierać
                tyle, by godnie przeżyć na emeryturze nawet 20 lat<sup><a href="#przypisy">1</a></sup>. Zobacz poniżej, ile tracisz przez
                opóźnianie decyzji o&nbsp;oszczędzaniu.
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="row main-info-table">
                <div class="row-height">
                    <div class="col-xs-12 col-md-2 col-md-height col-md-middle">
                        <img src="img/icon-clock-3.png" alt="" class="img-responsive center-block">
                    </div>

                    <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                        <h2 class="h2-mod-1">Skłonność do <strong>odwlekania</strong></h2>

                        <p>
                            To zupełnie normalne, że wolimy odczuwać korzyść tu i teraz. Szczególnie, że codzienne sprawy
                            i problemy są nam bliższe niż te dalekie i nieokreślone. Pamiętajmy jednak, że nasza percepcja
                            czasu bywa złudna. Lepiej nie odkładać na później tego, co można rozwiązać dziś.
                        </p>
                    </div>

                    <div class="col-xs-12 col-md-2 col-md-height col-md-middle">
                        <img src="img/icon-coins-2.png" alt="" class="img-responsive center-block">
                    </div>

                    <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                        <h2 class="h2-mod-1">Niepotrzebne <strong>ryzyko</strong></h2>

                        <p>
                            Im wcześniej zaczniesz oszczędzać na emeryturę, tym mniej będzie Cię to kosztowało. Dosłownie i w przenośni. Dosłownie, bo osiągniesz swój cel kosztem mniejszych
                            wyrzeczeń – regularne odkładanie małych kwot jest mniej dotkliwe dla domowego
                            budżetu. A&nbsp;w&nbsp;przenośni, bo będziesz spokojny o&nbsp;swoją przyszłość – bez obaw
                            i&nbsp;wyrzutów sumienia skupisz się na tym, co dziś dla Ciebie najważniejsze.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row border-top row-padded-vertical box-calculator" id="kalkulator">
        <header>
            <h1>Im wcześniej, <strong>tym lepiej</strong></h1>
            <hr>
            <p>Każdy dzień nieoszczędzania to finansowa strata dla emerytury. Sprawdź, jak bardzo odwlekanie decyzji o&nbsp;oszczędzaniu działa na Twoją niekorzyść.</p>
        </header>

        <div class="clearfix"></div>

        <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <form role="form" id="mscCalc" action="#" method="post">
                <fieldset>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="f-msc-rl">Ile lat chcesz żyć na emeryturze?</label>
                        </div>

                        <div class="col-md-3">
                            <select name="retirement_length" class="form-control input-lg" id="f-msc-rl">
                                <?php
                                foreach (range(5, 30, 5) as $v) {
                                    ?><option value="<?php echo $v; ?>"<?php $v == 15 ? print ' selected' : null; ?>><?php echo $v; ?> lat</option><?php
                                }

                                unset($v);
                                ?>
                            </select>
                            <!--<input name="retirement_length" type="range" min="10" max="30" step="5" class="form-control" id="f-msc-rl" value="20">-->
                            <!--<span class="retirement_length_value">20</span>-->
                        </div>

                        <div class="col-md-3">
                            <label for="f-msc-ms">Ile dodatkowo chcesz mieć miesięcznie?</label>
                        </div>

                        <div class="col-md-3">
                            <select name="monthly_savings" class="form-control input-lg" id="f-msc-ms">
                                <?php
                                foreach (range(500, 5000, 500) as $v) {
                                    ?><option value="<?php echo $v; ?>"<?php $v == 2000 ? print ' selected' : null; ?>><?php echo $v; ?> zł</option><?php
                                }

                                unset($v);
                                ?>
                            </select>
                            <!--<input name="monthly_savings" type="range" min="500" max="5000" step="500" class="form-control" id="f-msc-ms" value="1500">-->
                            <!--<span class="monthly_savings_value">1500</span>-->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label for="f-msc-ss">W jakim wieku planujesz zacząć oszczędzać?</label>
                        </div>

                        <div class="col-md-9">
                            <div class="start_save_up_value_container"><span class="start_save_up_value">20</span> lat</div>
                            <input name="start_save_up" type="range" min="20" max="66" step="1" class="form-control" id="f-msc-ss" value="20" autocomplete="off">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

        <div class="clearfix"></div>

        <div class="col-xs-12 col-md-2 col-md-offset-3 col-lg-offset-4">
            <img src="img/faces/face-calc-1.jpg" alt="" class="img-responsive full-width round" id="retirements_saves_face" data-src-pattern="img/faces/face-calc-%.jpg">
        </div>

        <div class="col-xs-12 col-md-2 col-md-offset-1">
            <img src="img/txt-musisz-odkladac-miesiecznie.png" alt="Musisz odkładać miesięcznie" class="img-responsive center-block calc-1-result-txt">
            <div class="retirement_saves_result_container"><span id="retirement_saves_result">...</span>&nbsp;zł</div>
        </div>

        <div class="clearfix"></div>

        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <aside class="annotation">
                Przedstawione wyliczenia obrazujące potencjalną kwotę miesięczną mają charakter jedynie szacunkowy i zostały opracowane przez Prudential, przy założeniu
                rzeczywistej stopy zwrotu w wysokości 2% w skali roku, wyrażonej netto, bez uwzględnienia podatku od zysków kapitałowych
                oraz przy założeniu przejścia na emeryturę w wieku 67&nbsp;lat. Wyliczenia nie są związane z&nbsp;oszczędzaniem w ramach konkretnego produktu oferowanego przez The&nbsp;Prudential Assurance Company Limited Sp. z o.o. Oddział w Polsce.
            </aside>
        </div>
    </div>

    <div class="row row-filled-red">
        <div class="col-xs-12">
            <div class="text-center">
                <div class="btn-near-cta">Lepiej zacznij działać!</div>
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
                <a href="mit-panstwo-da-mi-dobra-emeryture">
                    <img src="img/mity/mit-1-wide.jpg" alt="Mit. Państwo da mi dobrą emeryturę" class="img-responsive full-width" />
                </a>
            </figure>
        </div>

        <div class="col-md-6">
            <figure>
                <a href="mit-emerytura-nie-potrwa-dlugo">
                    <img src="img/mity/mit-3-wide.jpg" alt="Mit. Emerytura nie potrwa długo" class="img-responsive full-width" />
                </a>
            </figure>
        </div>
    </div>
</div>
    
<?php
Tpl::bottom();
Tpl::annotations([
    1 => 'Obliczenia własne Prudential na podstawie opracowania GUS „Trwanie życia w 2014 r.” (Warszawa 2015).'
]);
Tpl::htmlFooter();
?>
