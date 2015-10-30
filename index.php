<?php
require_once('libs/App.class.php');

Tpl::htmlHead();
Tpl::nav();
?>

<div class="jumbotron border-bottom-rsg" id="jumbotron-video">
    <div id="intro-placeholder">
        <img src="img/txt-kim-sa-mlodzi-bogowie.png" alt="Kim są młodzi bogowie?" class="img-responsive">

        <button class="btn btn-link btn-video" data-trigger="startTopVideo"><img src="img/btn-play.png" alt="Start"></button>
    </div>

    <video poster="img/top-video-placeholder.jpg" preload>
        <source src="video/prudential-mlodzi-bogowie.mp4"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
        <source src="video/prudential-mlodzi-bogowie.webm" type='video/webm; codecs="vp8, vorbis"'>
        <source src="video/prudential-mlodzi-bogowie.ogv"  type='video/ogg; codecs="theora, vorbis"'>
    </video>
</div>

<div class="container-fluid">
    <header class="row">
        <h1>Poznaj <strong>mity</strong> młodych bogów</h1>
        <p>
            Czasami trzymamy się ich, bo tak jest nam wygodniej. Bo mamy inne, ważniejsze lub pilniejsze sprawy.
            A&nbsp;może warto na chwilę się zatrzymać i przemyśleć swoje przekonania, zanim zmusi nas do tego rzeczywistość?
        </p>
    </header>
    
    <div class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1 myths-rows">
            <div class="myths-rows-insider">
                <div class="myth-box myth-box-type-a">
                    <figure>
                        <a href="mit-panstwo-da-mi-dobra-emeryture"><img src="img/mity/mit-1.jpg" alt="Państwo da mi dobrą emeryturę" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-b">
                    <figure>
                        <a href="mit-o-emeryturze-moge-pomyslec-pozniej"><img src="img/mity/mit-2.jpg" alt="O emeryturze mogę pomyśleć później" class="img-responsive"></a>
                    </figure>

                    <figure class="hidden-xs hidden-sm">
                        <a href="mit-na-emeryturze-moje-potrzeby-beda-mniejsze"><img src="img/mity/mit-4.jpg" alt="Na emeryturze moje potrzeby będą mniejsze" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-c">
                    <figure>
                        <a href="mit-emerytura-nie-potrwa-dlugo"><img src="img/mity/mit-3.jpg" alt="Emerytura nie potrwa długo" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-c visible-xs visible-sm">
                    <figure>
                        <a href="mit-na-emeryturze-moje-potrzeby-beda-mniejsze"><img src="img/mity/mit-4.jpg" alt="Na emeryturze moje potrzeby będą mniejsze" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="clearfix"></div>

                <div class="myth-box myth-box-type-a">
                    <figure>
                        <a href="mit-nie-stac-mnie-na-oszczedzanie"><img src="img/mity/mit-5.jpg" alt="Nie stać mnie na oszczędzanie" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-d">
                    <figure>
                        <a href="mit-ubezpieczenie-na-zycie-to-strata-pieniedzy"><img src="img/mity/mit-6.jpg" alt="Ubezpieczenie na życie to strata pieniędzy" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-e">
                    <figure>
                        <a href="mit-o-przyszlosci-dziecka-moge-pomyslec-jak-bedzie-wieksze"><img src="img/mity/mit-7.jpg" alt="O przyszłości dziecka mogę pomyśleć jak będzie większe" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="clearfix"></div>

                <div class="myth-box myth-box-type-a">
                    <figure>
                        <a href="mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo"><img src="img/mity/mit-8.jpg" alt="Dziecko jak dorośnie, od razu utrzyma się samo" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-f">
                    <figure>
                        <a href="mit-zawsze-bede-zdrowy-tak-jak-dzis"><img src="img/mity/mit-9.jpg" alt="Zawsze będę zdrwoy tak jak dziś" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-g">
                    <figure>
                        <a href="mit-zle-rzeczy-przydarzaja-sie-innym"><img src="img/mity/mit-10.jpg" alt="Złe rzeczy przydarzają się innym" class="img-responsive"></a>
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <?php
    /*
    <div class="row">
        <div class="col-xs-12 bg-blue-man">
            <div class="row">
                <div class="col-md-3 col-md-offset-2 blue-man-content">
                    <img src="img/txt-czy-jestes-mlodym-bogiem.png" alt="Czy jesteś młodym bogiem?" class="img-responsive">
                    <a href="#" class="btn btn-primary btn-special">Zrób test</a>
                </div>
            </div>
        </div>
    </div>
    */
    ?>
    
    <div class="row">
        <header>
            <h1>Zadbaj o przyszłość</h1>
            <hr>
            <p>Wskaż, co jest dla Ciebie ważne, a&nbsp;my pomożemy Ci zadbać o&nbsp;przyszłość Twoją i&nbsp;Twoich bliskich.</p>
        </header>
    </div>
    
    <div class="row row-padded row-margins row-products">
        <div class="col-xs-12 col-md-4">
            <figure>
                <a href="przyszlosc-dziecka"><img src="img/produkty/produkt-przyszlosc-dziecka.jpg" alt="Przyszłość dziecka" class="img-responsive full-width"></a>
                <?php
                /*<figcaption>
                    <img src="img/bulb.png" alt="">
                    <div>
                        <a href="">
                            Przyszłość<br>
                            dziecka
                        </a>
                    </div>
                </figcaption>
                */
                ?>
            </figure>
        </div>
        <div class="col-xs-12 col-md-4">
            <figure>
                <a href="emerytura-bez-obaw"><img src="img/produkty/produkt-emerytura-bez-obaw.jpg" alt="Emerytura bez obaw" class="img-responsive full-width"></a>
                <?php
                /*<figcaption>
                    <img src="img/icon-sun.png" alt="">
                    <div>
                        <a href="emerytura-bez-obaw">
                            Emerytura<br>
                            bez obaw
                        </a>
                    </div>
                </figcaption>*/
                ?>
            </figure>
        </div>
        <div class="col-xs-12 col-md-4">
            <figure>
                <a href="ochrona-zdrowia"><img src="img/produkty/produkt-ochrona-zdrowia.jpg" alt="Ochrona zdrowia" class="img-responsive full-width"></a>
                <?php
                /*<figcaption>
                    <img src="img/icon-hearth.png" alt="">
                    <div>
                        <a href="">
                            Ochrona<br>
                            życia
                        </a>
                    </div>
                </figcaption>*/
                ?>
            </figure>
        </div>
    </div>

    <div class="row row-filled-red">
        <div class="col-xs-12">
            <div class="text-center">
                <span class="btn-near-cta">Zrób pierwszy krok!</span>
                <p>Umów się z naszym Konsultantem. Pomożemy Ci wybrać rozwiązanie dopasowane do Twoich potrzeb i celów.</p>
                <a href="https://formularz.prudential.pl/lead?lid=45397" class="btn btn-primary btn-white" target="_blank">Skontaktuj się z nami <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
</div>
    
<?php
Tpl::bottom();
Tpl::htmlFooter();
?>
