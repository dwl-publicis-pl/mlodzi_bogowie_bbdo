<?php
class Tpl {
    public static function htmlHead($bodyClass = null, array $options = ['title' => null, 'desc' => ''])
    {
        $currentPage = App::currentPage();

        if (!empty($bodyClass)) {
            $bodyClass = ' class="' . $bodyClass . '"';
        }

        if (empty($options['title'])) {
            $title = App::APP_NAME;
        } else {
            $title = $options['title'];
        }

        if (empty($options['desc'])) {
            $desc = App::APP_DESC;
        } else {
            $desc = $options['desc'];
        }

        if (empty($options['og:image'])) {
            $og_image = App::APP_URL . 'img/fb-img.png';
        } else {
            $og_image = $options['og:image'];
        }

        if (empty($options['og:app_id'])) {
            $og_appid = null;
        } else {
            $og_appid = $options['og:app_id'];
        }

        if (empty($options['og:url'])) {
            $og_url = App::APP_URL . App::currentPage();
        } else {
            $og_url = $options['og:url'];
}
        ?><!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pl"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="pl"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="pl"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pl"> <!--<![endif]-->
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <title><?php echo $title; ?></title>
            <meta name="description" content="<?php echo $desc; ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="apple-touch-icon" href="apple-touch-icon.png">
            
            <meta property="og:url" content="<?php echo $og_url; ?>">
            <meta property="og:locale" content="pl_PL">
            <meta property="og:title" content="<?php echo $title; ?>">
            <meta property="og:description" content="<?php echo $desc; ?>">
            <meta property="og:image" content="<?php echo $og_image; ?>">
            <?php
            if (!empty($og_appid)) {
                ?>
                <meta property="fb:app_id" content="<?php echo $og_appid; ?>">
                <?php
            }
            ?>

            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" rel="stylesheet" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
            <link rel="stylesheet" href="<?php echo App::APP_URL; ?>css/main.20161114.css">
    
            <script src="<?php echo App::APP_URL; ?>js/vendor/modernizr-respond-1.4.2.min.js"></script>
            <?php
            // biblioteka Adobe Edge tylko na niektórych stronach
            //if (App::currentPage() == 'index') {
                ?>
                <script src="https://animate.adobe.com/runtime/6.0.0/edge.6.0.0.min.js"></script>
                <?php
            //}
            ?>
        </head>

        <body<?php echo $bodyClass; ?>>
            <?php
            if (!in_array($currentPage, array('preroll-zakonczenie'))) {
                ?>
                <!-- Facebook Pixel Code -->
                <script>
                    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
                        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
                        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                        document,'script','https://connect.facebook.net/en_US/fbevents.js');

                    fbq('init', '947773291996561');
                    fbq('track', "PageView");</script>
                <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=947773291996561&ev=PageView&noscript=1" /></noscript>
                <!-- End Facebook Pixel Code -->

                <!-- Google Tag Manager -->
                <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TH6V2V" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
                <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                    })(window,document,'script','dataLayer','GTM-TH6V2V');</script>
                <!-- End Google Tag Manager -->
                <?php
            }
            ?>
        <?php
    }


    public function top()
    {
        self::nav();
    }

    
    public static function nav()
    {
        $currentPage = App::currentPage();
        ?>
        
        <nav class="navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Przełącz nawigację</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="<?php echo App::APP_URL; ?>" rel="home"><img src="img/logo-prudential.png" class="img-responsive" alt="Prudential"></a>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse navbar-right yamm">
                        <ul class="nav navbar-nav">
                            <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Mity młodych bogów <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                  <li class="menu-mlodzi-bogowie">
                                    <div class="row">
                                      <div class="col-sm-4">
                                          <ul class="menu-col">
                                              <li>
                                                <a href="mit-panstwo-da-mi-dobra-emeryture"<?php echo Tpl::getGTMLinkData('mit-panstwo-da-mi-dobra-emeryture', 'kafelki', 'mity'); ?>>MIT #1
                                                <span class="menu-span">Państwo da mi dobrą emeryturę</span></a>
                                              </li>
                                              <li>
                                                <a href="mit-o-emeryturze-moge-pomyslec-pozniej"<?php echo Tpl::getGTMLinkData('mit-o-emeryturze-moge-pomyslec-pozniej', 'kafelki', 'mity'); ?>>MIT #2
                                                <span class="menu-span">O emeryturze mogę pomyśleć później</span></a>
                                              </li>
                                              <li>
                                                <a href="mit-emerytura-nie-potrwa-dlugo"<?php echo Tpl::getGTMLinkData('mit-emerytura-nie-potrwa-dlugo', 'kafelki', 'mity'); ?>>MIT #3
                                                <span class="menu-span">Emerytura nie potrwa długo</span></a>
                                              </li>
                                              <li>
                                                <a href="mit-na-emeryturze-moje-potrzeby-beda-mniejsze"<?php echo Tpl::getGTMLinkData('mit-na-emeryturze-moje-potrzeby-beda-mniejsze', 'kafelki', 'mity'); ?>>MIT #4
                                                <span class="menu-span">Na emeryturze moje potrzeby będą mniejsze</span></a>
                                              </li>
                                              <li>
                                                <a href="mit-nie-stac-mnie-na-oszczedzanie"<?php echo Tpl::getGTMLinkData('mit-nie-stac-mnie-na-oszczedzanie', 'kafelki', 'mity'); ?>>MIT #5
                                                <span class="menu-span">Nie stać mnie na oszczędzanie</span></a>
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="col-sm-5">
                                          <ul class="menu-col">
                                              <li>
                                                <a href="mit-ubezpieczenie-na-zycie-to-strata-pieniedzy"<?php echo Tpl::getGTMLinkData('mit-ubezpieczenie-na-zycie-to-strata-pieniedzy', 'kafelki', 'mity'); ?>>MIT #6
                                                <span class="menu-span">Ubezpieczenie na życie to strata pieniędzy</span></a>
                                              </li>
                                              <li>
                                                  <a href="mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo"<?php echo Tpl::getGTMLinkData('mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo', 'kafelki', 'mity'); ?>>MIT #7
                                                      <span class="menu-span">Dziecko, jak dorośnie, od razu utrzyma się samo</span></a>
                                              </li>
                                              <li>
                                                <a href="mit-o-przyszlosci-dziecka-moge-pomyslec-jak-bedzie-wieksze"<?php echo Tpl::getGTMLinkData('mit-o-przyszlosci-dziecka-moge-pomyslec-jak-bedzie-wieksze', 'kafelki', 'mity'); ?>>MIT #8
                                                <span class="menu-span">O przyszłości dziecka mogę pomyśleć, jak będzie większe</span></a>
                                              </li>
                                              <li>
                                                <a href="mit-zawsze-bede-zdrowy-tak-jak-dzis"<?php echo Tpl::getGTMLinkData('mit-zawsze-bede-zdrowy-tak-jak-dzis', 'kafelki', 'mity'); ?>>MIT #9
                                                <span class="menu-span">Zawsze będę zdrowy tak jak dziś</span></a>
                                              </li>
                                              <li>
                                                <a href="mit-zle-rzeczy-przydarzaja-sie-innym"<?php echo Tpl::getGTMLinkData('mit-zle-rzeczy-przydarzaja-sie-innym', 'kafelki', 'mity'); ?>>MIT #10
                                                <span class="menu-span">Złe rzeczy przydarzają się innym</span></a>
                                              </li>
                                          </ul>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                              </li>

                              <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Nasze rozwiązania <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                  <li class="menu-nasze-rozwiazania js-track-gtm-links">
                                    <div class="row">
                                      <div class="col-sm-6 col-sm-offset-1">
                                          <div class="solution solution-1 clearfix">
                                              <a href="przyszlosc-dziecka"<?php echo Tpl::getGTMLinkData('przyszlosc-dziecka', 'kafelki', 'rozwiazania'); ?>><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Przyszłość dziecka
                                              <span class="menu-span">Ubezpieczenie oszczędnościowe Start w Życie to gwarancja, że niezależnie od tego, co przyniesie przyszłość, Twoje dziecko otrzyma wsparcie finansowe.</span></a>
                                          </div>

                                          <div class="solution solution-2 clearfix">
                                              <a href="emerytura-bez-obaw"<?php echo Tpl::getGTMLinkData('emerytura-bez-obaw', 'kafelki', 'rozwiazania'); ?>><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Emerytura bez obaw
                                              <span class="menu-span">Ubezpieczenie oszczędnościowe Emerytura bez Obaw pozwoli Ci zgromadzić kapitał, by na przyszłej emeryturze móc utrzymać standard życia na obecnym poziomie i realizować swoje marzenia.</span></a>
                                          </div>

                                          <div class="solution solution-3 clearfix">
                                              <a href="ochrona-zdrowia"<?php echo Tpl::getGTMLinkData('ochrona-zdrowia', 'kafelki', 'rozwiazania'); ?>><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Ochrona zdrowia
                                              <span class="menu-span">Zapewnimy Ci dodatkową kompleksową ochronę ubezpieczeniową na wypadek kilkudziesięciu poważnych chorób i uszczerbków na zdrowiu.</span></a>
                                          </div>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                              </li>

                            <li><a href="https://formularz.prudential.pl/lead?lid=45649" target="_blank" data-trigger="run-conversion" data-id="798548">Kontakt</a></li>
                        </ul>
                    </div>
                </div></div>
            </div>
        </nav>
        
        <?php
    }
    
    
    public static function bottom()
    {
        ?>
        
        <div class="container-fluid">
        
            <?php
            Tpl::footer();
            ?>
        
        </div>
        
        <?php
    }


    public static function annotations(array $list)
    {
        if (count($list) == 0) {
            return true;
        }
        ?>

        <div class="container-fluid annotations-list" id="przypisy">
            <div class="col-xs-12">
                <div class="annotations-title">Źródła</div>

                <hr>

                <ul class="list-unstyled">
                    <?php
                    foreach ($list as $number => $txt) {
                        ?>
                        <li><sup><?php echo $number; ?></sup> <?php echo $txt; ?></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

        <?php
    }


    public static function products()
    {
        ?>

        <div class="row row-margins">
            <header>
                <h1>Zadbaj o przyszłość</h1>
                <hr>
                <p>Wskaż, co jest dla Ciebie ważne, a&nbsp;my pomożemy Ci zadbać o&nbsp;przyszłość Twoją i&nbsp;Twoich bliskich.</p>
            </header>
        </div>

        <div class="row row-padded row-margins row-products">
            <div class="col-xs-12 col-md-4">
                <figure>
                    <a href="przyszlosc-dziecka"<?php echo Tpl::getGTMLinkData('przyszlosc-dziecka', 'kafelki', 'rozwiazania'); ?>><img src="img/produkty/produkt-przyszlosc-dziecka.jpg" alt="Przyszłość dziecka" class="img-responsive full-width"></a>
                </figure>
            </div>
            <div class="col-xs-12 col-md-4">
                <figure>
                    <a href="emerytura-bez-obaw"<?php echo Tpl::getGTMLinkData('emerytura-bez-obaw', 'kafelki', 'rozwiazania'); ?>><img src="img/produkty/produkt-emerytura-bez-obaw.jpg" alt="Emerytura bez obaw" class="img-responsive full-width"></a>
                </figure>
            </div>
            <div class="col-xs-12 col-md-4">
                <figure>
                    <a href="ochrona-zdrowia"<?php echo Tpl::getGTMLinkData('ochrona-zdrowia', 'kafelki', 'rozwiazania'); ?>><img src="img/produkty/produkt-ochrona-zdrowia.jpg" alt="Ochrona zdrowia" class="img-responsive full-width"></a>
                </figure>
            </div>
        </div>

        <?php
    }

    
    
    public static function footer()
    {
        ?>
        
        <footer class="row row-padded">
            <div class="row-height">
                <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                    Copyright © 2015 Prudential
                </div>
                
                <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                    <img src="img/logo-prudential-footer.png" alt="Prudential – ubezpieczenia emerytury oszczędności" class="center-block img-responsive">
                </div>
                
                <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                    Przejdź do serwisu <a href="http://www.prudential.pl/" target="_blank">Prudential.pl</a>
                </div>
            </div>
        </footer>
        
        <?php
    }
    
    
    public static function htmlFooter()
    {
        ?>

        <?php
        if (App::currentPage() != 'preroll-zakonczenie') {
            ?>
            <script src="https://secure-ds.serving-sys.com/BurstingRes/CustomScripts/mmConversionTagV3.js"></script>
            <?php
        }
        ?>
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo App::APP_URL; ?>js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/CSSPlugin.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/easing/EasePack.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenLite.min.js"></script>
        <?php
        // obsługa landing page's dla prerolli 2016-11
        // automatyczne dostosowanie wysokości iframe do jego zawartości
        if (App::currentPage() == 'preroll-zakonczenie') {
            ?>
            <script src="<?php echo App::APP_URL; ?>js/vendor/iframeResizer.min.js"></script>
            <script>
                iFrameResize({}, '#iframe-camino-1');
            </script>
            <?php
        }
        ?>
        <script src="<?php echo App::APP_URL; ?>js/plugins.js"></script>
        <script src="<?php echo App::APP_URL; ?>js/main.20161123.js"></script>
        
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-69104129-1', 'auto');
            ga('set', 'transport', 'beacon');
            ga('send', 'pageview');
        </script>
        
        </body>
        </html>
        
        <?php
    }


    public static function getLinkTitle($href)
    {
        $descs = [
            'ochrona-zdrowia' => 'Ochrona zdrowia',
            'przyszlosc-dziecka' => 'Przyszłość dziecka',
            'emerytura-bez-obaw' => 'Emerytura bez obaw',
            'mit-panstwo-da-mi-dobra-emeryture' => 'Mit Państwo da mi dobrą emeryturę',
            'mit-zle-rzeczy-przydarzaja-sie-innym' => 'Mit Złe rzeczy przydarzają się innym',
            'mit-zawsze-bede-zdrowy-tak-jak-dzis' => 'Mit Zawsze będę zdrowy tak jak dziś',
            'mit-o-przyszlosci-dziecka-moge-pomyslec-jak-bedzie-wieksze' => 'Mit O przyszłości dziecka mogę pomyśleć, jak będzie większe',
            'mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo' => 'Mit Dziecko, jak dorośnie, utrzyma się samo',
            'mit-ubezpieczenie-na-zycie-to-strata-pieniedzy' => 'Mit Ubezpieczenie na życie to strata pieniędzy',
            'mit-nie-stac-mnie-na-oszczedzanie' => 'Mit Nie stać mnie na oszczędzanie',
            'mit-na-emeryturze-moje-potrzeby-beda-mniejsze' => 'Mit Na emeryturze moje potrzeby będą mniejsze',
            'mit-emerytura-nie-potrwa-dlugo' => 'Mit Emerytura nie potrwa długo',
            'mit-o-emeryturze-moge-pomyslec-pozniej' => 'Mit O emeryturze mogę pomyśleć później'
        ];

        if (isset($descs[$href])) {
            return $descs[$href];
        }

        return false;
    }


    public static function getGTMLinkData($href, $event, $category = null)
    {
        $html = ' data-gtm-event="' . htmlspecialchars($event, ENT_QUOTES) . '"';

        if (!empty($category)) {
            $html .= ' data-gtm-category="' . htmlspecialchars($category, ENT_QUOTES) . '"';
        }

        $html .= ' data-gtm-title="' . self::getLinkTitle($href) . '"';

        return $html;
    }
}
