<?php
require_once('libs/App.class.php');

Tpl::htmlHead();
Tpl::nav();
?>


<div class="jumbotron border-top">
    <img src="img/mity/mit-o-emeryturze-moge-pomyslec-pozniej.jpg" alt="Mit. O emeryturze mogę pomyśleć później." class="img-responsive full-width">

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
        <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 headline">
            Nie do końca, bo <strong>każdy dzień przybliża Cię do emerytury,</strong> czy tego chcesz czy nie.<br class="hidden-xs hidden-sm">
            Jeśli zaczniesz odkładać już dziś, małymi krokami możesz uzbierać tyle, by godnie przeżyć<br class="hidden-xs hidden-sm"> na emeryturze nawet 20 lat.
            Zobacz poniżej, ile tracisz przez opóźnianie decyzji o oszczędzaniu.
        </div>

        <hr>
    </div>

    <div class="row row-padded-vertical">
        <div class="col-xs-12 col-md-5 col-md-offset-1">
            <article>
                <h2>Skłonność do <strong>odwlekania</strong></h2>

                <p>To zupełnie normalne, że wolimy odczuwać korzyść tu i&nbsp;teraz. Szczególnie, że codzienne sprawy
                    i&nbsp;problemy są nam bliższe niż te dalekie i&nbsp;nieokreślone. Pamiętajmy jednak, że nasza percepcja
                    czasu bywa złudna. Lepiej nie odkładać na później tego, co można rozwiązać dziś.</p>
            </article>
        </div>

        <div class="col-xs-12 col-md-5">
            <article>
                <h2>Niepotrzebne <strong>ryzyko</strong></h2>

                <p>Im wcześniej zaczniesz oszczędzać na emeryturę, tym mniej będzie Cię to kosztowało.
                    Dosłownie i w przenośni.</p>
                <p>W przenośni, bo osiągniesz swój cel kosztem mniejszych wyrzeczeń – codzienne odkładanie małych kwot bywa mniej dotkliwe dla domowego budżetu.</p>
                <p>Dosłownie – bo im później zaczniesz oszczędzać, tym więcej zaryzykujesz, by szybciej zarobić. Prawdopodobnie skusisz się na krótkoterminowe inwestycje obarczone sporym ryzykiem finansowym, które niejednokrotnie powodują dotkliwe finansowe straty... ale czy warto postawić na szali bezpieczeństwo środków na emeryturę?</p>
            </article>
        </div>
    </div>

    <div class="row border-top row-padded-vertical box-calculator">
        <header>
            <h1>Im wcześniej, <strong>tym lepiej</strong></h1>
            <hr>
            <p>Każdy dzień nieoszczędzania to finansowa strata dla emerytury. Sprawdź, jak bardzo<br class="hidden-xs hidden-sm"> odwlekanie decyzji o oszczędzaniu działa na Twoją niekorzyść.</p>
        </header>

        <div class="clearfix"></div>

        <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <form role="form" id="mscCalc" action="#" method="post">
                <fieldset>
                    <div class="row">
                        <div class="col-md-2 col-md-offset-2">
                            <label for="f-msc-rl">Ile lat chcesz żyć na emeryturze?</label>
                        </div>

                        <div class="col-md-2">
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

                        <div class="col-md-2">
                            <label for="f-msc-ms">Ile dodatkowo chcesz dostawać miesięcznie?</label>
                        </div>

                        <div class="col-md-2">
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
                        <div class="col-md-2 col-md-offset-2">
                            <label for="f-msc-ss">W jakim wieku planujesz zacząć oszczędać?</label>
                        </div>

                        <div class="col-md-6">
                           <div class="start_save_up_value_container"><span class="start_save_up_value">20</span> lat</div>
                            <input name="start_save_up" type="range" min="20" max="66" step="1" class="form-control" id="f-msc-ss" value="20" autocomplete="off">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

        <div class="clearfix"></div>

        <div class="col-xs-12 col-md-2 col-md-offset-4">
            <img src="img/faces/face-calc-1.jpg" alt="" class="img-responsive full-width round" id="retirements_saves_face" data-src-pattern="img/faces/face-calc-%.jpg">
        </div>

        <div class="col-xs-12 col-md-3">
            <img src="img/txt-musisz-odkladac-miesiecznie.png" alt="Musisz odkładać miesięcznie" class="img-responsive center-block">
            <div class="retirement_saves_result_container"><span id="retirement_saves_result">...</span> zł</div>
        </div>

        <div class="clearfix"></div>

        <div class="col-xs-12 col-md-10">
            <aside class="annotation"><sup>*</sup> Założona stopa zwrotu z inwestycji wynosi 2% rocznie.</aside>
        </div>
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
