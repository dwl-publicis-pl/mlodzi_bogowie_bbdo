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
        <header>
            <h1><span>Nie do końca, bo każdy dzień przybliża Cię do emerytury, czy tego chcesz czy nie.</span></h1>
            <p>Jeśli zaczniesz odkładać już dziś, małymi krokami możesz uzbierać tyle, by godnie przeżyć na emeryturze nawet 20 lat. Zobacz poniżej, ile tracisz przez opóźnianie decyzji o oszczędzaniu.</p>
        </header>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-5 col-md-offset-1">
            <article>
                <h2>Skłonność do <strong>odwlekania</strong></h2>

                <p>To zupełnie normalne, że wolimy odczuwać korzyść tu i teraz. Szczególnie, że codzienne sprawy
                    i problemy są nam bliższe niż te dalekie i nieokreślone. Pamiętajmy jednak, że nasza percepcja
                    czasu bywa złudna. Lepiej nie odkładać na później tego, co można rozwiązać dziś.</p>
            </article>
        </div>

        <div class="col-xs-12 col-md-5">
            <article>
                <h2>Niepotrzebne <strong>ryzyko</strong></h2>

                <p>Im wcześniej zaczniesz oszczędzać na emeryturę,  tym mniej będzie Cię to kosztowało.
                    Dosłownie i w przenośni.</p>
                <p>W przenośni, bo osiągniesz swój cel kosztem mniejszych wyrzeczeń – codzienne odkładanie małych kwot bywa mniej dotkliwe dla domowego budżetu.</p>
                <p>Dosłownie – bo im później zaczniesz oszczędzać, tym więcej zaryzykujesz, by szybciej zarobić. Prawdopodobnie skusisz się na krótkoterminowe inwestycje obarczone sporym ryzykiem finansowym, które niejednokrotnie powodują dotkliwe finansowe straty... ale czy warto postawić na szali bezpieczeństwo środków na emeryturę?</p>
            </article>
        </div>
    </div>

    <div class="row border-top row-padded-vertical box-calculator">
        <header>
            <h1>Lepiej późno <strong>niż później</strong></h1>
            <hr>
            <p>Każdy dzień nieoszczędzania to finansowa strata dla emerytury. Sprawdź, jak bardzo odwlekanie decyzji o oszczędzaniu działa na Twoją niekorzyść.</p>
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
                                foreach (range(10, 30, 5) as $v) {
                                    ?><option><?php echo $v; ?></option><?php
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
                                    ?><option><?php echo $v; ?></option><?php
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
                            <input name="start_save_up" type="range" min="20" max="66" step="1" class="form-control" id="f-msc-ss" value="20">
                            <span class="start_save_up_value">20</span>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

        <div class="clearfix"></div>

        <div class="col-xs-12 col-md-2 col-md-offset-3">
            <img src="img/faces/face-calc-1.jpg" alt="" class="img-responsive full-width round">
        </div>

        <div class="col-xs-12 col-md-4">
            Musisz odkładać miesięcznie <span id="retirement_saves_result">...</span> PLN.
        </div>
    </div>
</div>
    
<?php
Tpl::bottom();
Tpl::htmlFooter();
?>
