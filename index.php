<?php
require_once('libs/App.class.php');

Tpl::htmlHead();
Tpl::nav();
?>

<div class="jumbotron">
    <video poster="img/poster.png">
        <source type="video/webm" src="http://www.html5rocks.com/en/tutorials/video/basics/devstories.webm" />
        <source type="video/mp4" src="http://www.html5rocks.com/en/tutorials/video/basics/devstories.mp4" />
    </video>
</div>

<div class="container-fluid">
    <div class="row">
        <header>
            <h1><span>Poznaj <strong>mity</strong> młodych bogów</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt lectus at ligula mattis, vel tincidunt eros vestibulum. Aenean fringilla ipsum eget felis pellentesque faucibus vitae vitae lorem.</p>
        </header>
    </div>
    
    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2 myths-multibox">
            <div class="row">
                <div class="col-md-4">
                    <figure>
                        <img src="img/mity/mit-1.jpg" alt="" class="img-responsive" />
                        <figcaption class="myth-number">
                            #1 mit
                        </figcaption>
                        <figcaption class="myth-title">
                            <a href="#">
                                <span class="myth-title-style-1">Przecież</span><br>
                                <span class="myth-title-style-2">mogę pracować</span><br>
                                <span class="myth-title-style-3">do śmierci</span>
                            </a>
                            
                            <div class="myth-see-more">
                                <a href="#" class="see-more">Zobacz więcej</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure>
                        <img src="img/mity/mit-2.jpg" alt="" class="img-responsive" />
                        <figcaption class="myth-number myth-black">
                            #2 mit
                        </figcaption>
                        <figcaption class="myth-title myth-black">
                            <a href="#">
                                <span class="myth-title-style-1">Przecież</span><br>
                                <span class="myth-title-style-2">mogę pracować</span><br>
                                <span class="myth-title-style-3">do śmierci</span>
                            </a>
                            
                            <div class="myth-see-more">
                                <a href="#" class="see-more">Zobacz więcej</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-md-4">
                    <figure>
                        <img src="img/mity/mit-3.jpg" alt="" class="img-responsive" />
                        <figcaption class="myth-number">
                            #3 mit
                        </figcaption>
                        <figcaption class="myth-title">
                            <a href="#">
                                <span class="myth-title-style-1">Przecież</span><br>
                                <span class="myth-title-style-2">mogę pracować</span><br>
                                <span class="myth-title-style-3">do śmierci</span>
                            </a>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-md-4">
                    <figure>
                        <img src="img/mity/mit-4.jpg" alt="" class="img-responsive" />
                        <figcaption class="myth-number myth-black">
                            #4 mit
                        </figcaption>
                        <figcaption class="myth-title myth-black">
                            <a href="#">
                                <span class="myth-title-style-1">Przecież</span><br>
                                <span class="myth-title-style-2">mogę pracować</span><br>
                                <span class="myth-title-style-3">do śmierci</span>
                            </a>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-md-4">
                    <figure>
                        <img src="img/mity/mit-5.jpg" alt="" class="img-responsive" />
                        <figcaption class="myth-number">
                            #5 mit
                        </figcaption>
                        <figcaption class="myth-title">
                            <a href="#">
                                <span class="myth-title-style-1">Przecież</span><br>
                                <span class="myth-title-style-2">mogę pracować</span><br>
                                <span class="myth-title-style-3">do śmierci</span>
                            </a>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-md-4">
                    <figure>
                        <img src="img/mity/mit-6.jpg" alt="" class="img-responsive" />
                        <figcaption class="myth-number myth-black">
                            #6 mit
                        </figcaption>
                        <figcaption class="myth-title myth-black">
                            <a href="#">
                                <span class="myth-title-style-1">Przecież</span><br>
                                <span class="myth-title-style-2">mogę pracować</span><br>
                                <span class="myth-title-style-3">do śmierci</span>
                            </a>
                        </figcaption>
                    </figure>
                </div>

            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-12 bg-blue-man">
            <div class="row">
                <div class="col-md-6 col-md-offset-2 blue-man-content">
                    <div class="blue-man-line-1">Ile jest w Tobie</div>
                    <div class="blue-man-line-2">– <span>młodego</span> – boga?</div>
                    
                    <a href="#" class="btn btn-link">Zrób test na boskość</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <header>
            <h1>Zadbaj o <strong>przyszłość</strong></h1>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt lectus at ligula mattis, vel tincidunt eros vestibulum. Aenean fringilla ipsum eget felis pellentesque faucibus vitae vitae lorem.</p>
        </header>
    </div>
    
    <div class="row row-padded row-products">
        <div class="col-xs-12 col-md-4">
            <figure>
                <img src="img/produkty/produkt-1.jpg" alt="">
                <figcaption>
                    <img src="img/bulb.png" alt="">
                    Przyszłość
                    dzieci
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-md-4">
            <figure>
                <img src="img/produkty/produkt-2.jpg" alt="">
                <figcaption>
                    <img src="img/bulb.png" alt="">
                    Przyszłość
                    dzieci
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-md-4">
            <figure>
                <img src="img/produkty/produkt-3.jpg" alt="">
                <figcaption>
                    <img src="img/bulb.png" alt="">
                    Przyszłość
                    dzieci
                </figcaption>
            </figure>
        </div>
    </div>
</div>
    
<?php
Tpl::bottom();
Tpl::htmlFooter();
?>
