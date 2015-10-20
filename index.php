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
        <source type="video/mp4" src="video/prudential-mlody-bog.mp4" />
    </video>
</div>

<div class="container-fluid">
    <header class="row">
        <h1>Poznaj <strong>mity</strong> młodych bogów</h1>
        <p>
            Czasami trzymamy się ich, bo tak jest nam wygodniej. Bo mamy inne, ważniejsze lub pilniejsze sprawy.<br class="hidden-xs hidden-sm">
            A może warto na chwilę się zatrzymać i przemyśleć swoje przekonania, zanim zmusi nas do tego rzeczywistość?
        </p>
    </header>
    
    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1 myths-rows">
            <div class="myths-rows-insider">
                <div class="myth-box myth-box-type-a">
                    <figure>
                        <a href="#"><img src="img/mity/mit-1.jpg" alt="" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-b">
                    <figure>
                        <a href="#"><img src="img/mity/mit-2.jpg" alt="" class="img-responsive"></a>
                    </figure>

                    <figure>
                        <a href="#"><img src="img/mity/mit-4.jpg" alt="" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-c">
                    <figure>
                        <a href="#"><img src="img/mity/mit-3.jpg" alt="" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="clearfix"></div>

                <div class="myth-box myth-box-type-a">
                    <figure>
                        <a href="#"><img src="img/mity/mit-5.jpg" alt="" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-d">
                    <figure>
                        <a href="#"><img src="img/mity/mit-6.jpg" alt="" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-e">
                    <figure>
                        <a href="#"><img src="img/mity/mit-7.jpg" alt="" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="clearfix"></div>

                <div class="myth-box myth-box-type-a">
                    <figure>
                        <a href="#"><img src="img/mity/mit-8.jpg" alt="" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-f">
                    <figure>
                        <a href="#"><img src="img/mity/mit-9.jpg" alt="" class="img-responsive"></a>
                    </figure>
                </div>

                <div class="myth-box myth-box-type-g">
                    <figure>
                        <a href="#"><img src="img/mity/mit-10.jpg" alt="" class="img-responsive"></a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    
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
    
    <div class="row">
        <header>
            <h1>Zadbaj o przyszłość</h1>
            <hr>
            <p>Wskaż, co jest dla Ciebie ważne, a my pomożemy Ci zadbać o przyszłość Twoją i Twoich bliskich.</p>
        </header>
    </div>
    
    <div class="row row-padded row-margins row-products">
        <div class="col-xs-12 col-md-4">
            <figure>
                <a href=""><img src="img/produkty/produkt-1.jpg" alt="" class="img-responsive full-width"></a>
                <figcaption>
                    <img src="img/bulb.png" alt="">
                    <div>
                        <a href="">
                            Przyszłość<br>
                            dzieci
                        </a>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-md-4">
            <figure>
                <a href=""><img src="img/produkty/produkt-2.jpg" alt="" class="img-responsive full-width"></a>
                <figcaption>
                    <img src="img/icon-sun.png" alt="">
                    <div>
                        <a href="emerytura-bez-obaw">
                            Emerytura<br>
                            bez obaw
                        </a>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-md-4">
            <figure>
                <a href=""><img src="img/produkty/produkt-3.jpg" alt="" class="img-responsive full-width"></a>
                <figcaption>
                    <img src="img/icon-hearth.png" alt="">
                    <div>
                        <a href="">
                            Ochrona<br>
                            życia
                        </a>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>

    <div class="row row-filled-red">
        <div class="col-xs-12">
            <div class="text-center">
                <span class="btn-near-cta">Zrób pierwszy krok!</span>
                <p>Umów się z naszym Konsultantem. Pomożemy Ci wybrać rozwiązanie dopasowane do Twoich potrzeb i celów.</p>
                <a href="#" class="btn btn-primary btn-white">Skontaktuj się z nami</a>
            </div>
        </div>
    </div>
</div>
    
<?php
Tpl::bottom();
Tpl::htmlFooter();
?>
