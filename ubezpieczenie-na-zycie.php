<?php
require_once('libs/App.class.php');

Tpl::htmlHead();
?>

<div class="jumbotron jumbotron-ubezpieczenie-na-zycie">
    <div class="jumbotron-title">
        <div class="jumbotron-style-1"><img src="img/icon-sun.png" alt=""> emerytura</div>
        z ubezpieczeniem <strong>na życie</strong>
    </div>

    <div class="container-fluid jumbotron-bar">
        <div class="row">
            <div class="row-height">
                <div class="col-xs-12 col-md-2 col-md-height col-md-middle bg-red-light">
                    <a href="#" class="btn btn-link text-uppercase">Młodzi <br class="hidden-xs">bogowie</a>
                </div>
                <div class="col-xs-12 col-md-8 col-md-height col-md-middle bg-red">
                    <p>
                        Sed magna. In hac habitasse platea dictumst. Quisque id lacus semper odio facilisis vehicula.<br class="hidden-xs">
                        Suspendisse nec turpis sed velit ullamcorper imperdiet. Praesent at magna.
                    </p>
                    
                    <button class="btn btn-primary btn-white">Umów się z konsultantem</button>
                </div>
                <div class="hidden-xs hidden-sm col-md-2 col-md-height bg-red"></div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <header>
            <h1><span>Emerytura <strong>bez obaw</strong></span></h1>
            <p>
                Premiopolisy oferowane przez Prudential to innowacyjne na polskim rynku rozwiązania ubezpieczeniowo - finansowe.<br class="xs-hidden">
                Zapewniają ochronę ubezpieczeniową, połączoną z oszczędzaniem na dowolny cel.
            </p>
        </header>
    </div>
    
    <div class="row">
        <p class="text-center">2 kolumny z info produktowym.</p>
    </div>
    
    <div class="row">
        <header>
            <p>
                Emerytura z ubezpieczeniem na życie lorem ipsum dolor sit amet. Aliquam vulputate, wisi ac ullamcorper posuere, nibh neque auctor velit, sit amet interdum justo elit a purus.
            </p>
        </header>
        
        <div class="text-center">
            <button class="btn btn-primary">Umów się z konsultantem</button>
        </div>
    </div>
    
    <div class="row row-calculators">
        <header>
            <h1>To <strong>łatwiejsze</strong> niż myślisz</h1>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt lectus at ligula mattis, vel tincidunt eros vestibulum. Aenean fringilla ipsum eget felis pellentesque faucibus vitae vitae lorem.</p>
        </header>
        
        <div class="col-md-6 col-md-offset-3">
            <div class="container-fluid">
                <div class="row cols-white-table">
                    <div class="row-height">
                        <div class="col-xs-12 col-md-6 col-md-height col-md-middle">
                            <img src="img/icon-calc.png" alt="" class="pull-left"> <a href="#">Sprawdź, ile czasu zostało Ci do emerytury</a>
                        </div>
                        
                        <div class="col-xs-12 col-md-6 col-md-height col-md-middle">
                            <img src="img/icon-calc.png" alt="" class="pull-left"> <a href="#">Sprawdź, ile czasu zostało Ci do emerytury</a>
                        </div>
                    </div>
                    <div class="row-height">
                        <div class="col-xs-12 col-md-6 col-md-height col-md-middle">
                            <img src="img/icon-calc.png" alt="" class="pull-left"> <a href="#">Sprawdź, ile czasu zostało Ci do emerytury</a>
                        </div>
                        
                        <div class="col-xs-12 col-md-6 col-md-height col-md-middle">
                            <img src="img/icon-calc.png" alt="" class="pull-left"> <a href="#">Sprawdź, ile czasu zostało Ci do emerytury</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row row-future">
        <header>
            <h1>Zadbaj o <strong>przyszłość</strong></h1>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt lectus at ligula mattis, vel tincidunt eros vestibulum.<br class="hidden-xs">Aenean fringilla ipsum eget felis pellentesque faucibus vitae vitae lorem.</p>
        </header>
        
        <div class="container-fluid">
            <div class="row row-padded row-products no-column-border">
                <div class="col-md-6 bg-border-top"></div>
                <div class="col-md-6 bg-border-top bg-border-top-2"></div>
                <div class="col-md-6">
                    <figure>
                        <img src="img/future-1.jpg" alt="" class="img-responsive">
                        
                        <figcaption>
                            <img src="img/bulb.png" alt="">
                            <a href="#">Przyszłość dzieci</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-6">
                    <figure>
                        <img src="img/future-1.jpg" alt="" class="img-responsive">
                        
                        <figcaption>
                            <img src="img/bulb.png" alt="">
                            <a href="#">Przyszłość dzieci</a>
                        </figcaption>
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
