<?php
class Tpl {
    public static function htmlHead($bodyClass = null, array $options = ['title' => null, 'desc' => ''])
    {
        $currentPage = App::currentPage();
        $bodyClass = null;
        
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
            
            <meta property="og:url" content="<?php echo App::APP_URL; ?>" />
            <meta property="og:locale" content="pl_PL" />
            <meta property="og:title" content="<?php echo $title; ?>" />
            <meta property="og:description" content="<?php echo $desc; ?>" />
            <meta property="og:image" content="<?php echo App::APP_URL; ?>img/fb-img.png" />

            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/bootstrap-theme.min.css">
            <link rel="stylesheet" href="css/main.css">
    
            <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        </head>

        <body<?php echo $bodyClass; ?>>
            <!-- Google Tag Manager -->
            <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TH6V2V" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-TH6V2V');</script>
            <!-- End Google Tag Manager -->

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
                                                <a href="mit-panstwo-da-mi-dobra-emeryture">MIT #1
                                                <span class="menu-span">Państwo da mi dobrą emeryturę</span></a>
                                              </li>
                                              <li>
                                                <a href="mit-o-emeryturze-moge-pomyslec-pozniej">MIT #2
                                                <span class="menu-span">O emeryturze mogę pomyśleć później</span></a>
                                              </li>
                                              <li>
                                                <a href="mit-emerytura-nie-potrwa-dlugo">MIT #3
                                                <span class="menu-span">Emerytura nie potrwa długo</span></a>
                                              </li>
                                              <li>
                                                <a href="mit-na-emeryturze-moje-potrzeby-beda-mniejsze">MIT #4
                                                <span class="menu-span">Na emeryturze moje potrzeby będą mniejsze</span></a>
                                              </li>
                                              <li>
                                                <a href="mit-nie-stac-mnie-na-oszczedzanie">MIT #5
                                                <span class="menu-span">Nie stać mnie na oszczędzanie</span></a>
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="col-sm-5">
                                          <ul class="menu-col">
                                              <li>
                                                <a href="mit-ubezpieczenie-na-zycie-to-strata-pieniedzy">MIT #6
                                                <span class="menu-span">Ubezpieczenie na życie to strata pieniędzy</span></a>
                                              </li>
                                              <li>
                                                <a href="mit-o-przyszlosci-dziecka-moge-pomyslec-jak-bedzie-wieksze">MIT #7
                                                <span class="menu-span">O przyszłości dziecka mogę pomyśleć, jak będzie większe</span></a>
                                              </li>
                                              <li>
                                                <a href="mit-dziecko-jak-dorosnie-od-razu-utrzyma-sie-samo">MIT #8
                                                <span class="menu-span">Dziecko, jak dorośnie, od razu utrzyma się samo</span></a>
                                              </li>
                                              <li>
                                                <a href="mit-zawsze-bede-zdrowy-tak-jak-dzis">MIT #9
                                                <span class="menu-span">Zawsze będę zdrowy tak jak dziś</span></a>
                                              </li>
                                              <li>
                                                <a href="mit-zle-rzeczy-przydarzaja-sie-innym">MIT #10
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
                                  <li class="menu-nasze-rozwiazania">
                                    <div class="row">
                                      <div class="col-sm-6 col-sm-offset-1">

                                              <div class="solution solution-1 clearfix">
                                                  <a href="przyszlosc-dziecka"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Przyszłość dziecka
                                                  <span class="menu-span">Premiopolisa Start w Życie to gwarancja, że niezależnie od tego, co przyniesie przyszłość, Twoje dziecko otrzyma wsparcie finansowe.</span></a>
                                              </div>

                                              <div class="solution solution-2 clearfix">
                                                  <a href="emerytura-bez-obaw"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Emerytura bez obaw
                                                  <span class="menu-span">Premiopolisa Emerytura bez Obaw pozwoli Ci zgromadzić kapitał, by na przyszłej emeryturze móc utrzymać standard życia na obecnym poziomie i realizować swoje marzenia.</span></a>
                                              </div>

                                              <div class="solution solution-3 clearfix">
                                                  <a href="ochrona-zdrowia"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Ochrona zdrowia
                                                  <span class="menu-span">Zapewnimy Ci dodatkową kompleksową ochronę ubezpieczeniową na wypadek kilkudziesięciu poważnych chorób i uszczerbków na zdrowiu.</span></a>
                                              </div>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                              </li>

                            <li><a href="https://formularz.prudential.pl/lead?lid=45649" target="_blank">Kontakt</a></li>
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

        <script>
            var versaTag = {};
            versaTag.id = "3893";
            versaTag.sync = 0;
            versaTag.dispType = "js";
            versaTag.ptcl = "HTTP";
            versaTag.bsUrl = "bs.serving-sys.com/BurstingPipe";
            versaTag.activityParams = {
                "Session":""
            };
            versaTag.retargetParams = {};
            versaTag.dynamicRetargetParams = {};
            versaTag.conditionalParams = {};
        </script>
        <script id="ebOneTagUrlId" src="http://ds.serving-sys.com/SemiCachedScripts/ebOneTag.js"></script>
        <noscript>
            <iframe src="http://bs.serving-sys.com/BurstingPipe?cn=ot&amp;onetagid=3893&amp;ns=1&amp;activityValues=$$Session=[Session]$$&amp;retargetingValues=$$$$&amp;dynamicRetargetingValues=$$$$&amp;acp=$$$$&amp;" style="display:none;width:0;height:0"></iframe>
        </noscript>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/CSSPlugin.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/easing/EasePack.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenLite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-69104129-1', 'auto');
            ga('send', 'pageview');
        </script>
        
        </body>
        </html>
        
        <?php
    }
}
