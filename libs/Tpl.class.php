<?php
class Tpl {
    public static function htmlHead($bodyClass = null)
    {
        $currentPage = App::currentPage();
        $bodyClass = null;
        
        if (!empty($bodyClass)) {
            $bodyClass = ' class="' . $bodyClass . '"';
        }
        
        switch ($currentPage) {
            default:
                $title = 'Młodzi Bogowie';
                $desc = '';
            break;
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

            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700%7COswald:400,300,700&amp;subset=latin,latin-ext">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/bootstrap-theme.min.css">
            <link rel="stylesheet" href="css/main.css">
    
            <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        </head>

        <body<?php echo $bodyClass; ?>>
        
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
        
        <nav class="navbar" role="navigation">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Przełącz nawigację</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="<?php echo App::APP_URL; ?>" rel="home"><img src="img/logo-prudential.png" alt="Prudential"></a>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li<?php $currentPage == 'mit-o-emeryturze-moge-pomyslec-pozniej' ? print ' class="active"' : null; ?>><a href="mit-o-emeryturze-moge-pomyslec-pozniej">Mity</a></li>
                            <li<?php $currentPage == 'kalkulator' ? print ' class="active"' : null; ?>><a href="kalkulator">Kalkulator</a></li>
                            <li<?php $currentPage == 'produkt' ? print ' class="active"' : null; ?>><a href="produkt">Produkt</a></li>
                            <li<?php $currentPage == 'kontakt' ? print ' class="active"' : null; ?>><a href="kontakt">Kontakt</a></li>
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
    
    
    public static function footer()
    {
        ?>
        
        <footer class="row row-padded">
            <div class="row-height">
                <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                    Copyright © 2015 Prudential <span>|</span>
                    <a href="#" data-hover="Zastrzeżenia prawne">Zastrzeżenia prawne</a> <span>|</span>
                    <a href="#">Polityka cookies</a>
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
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','','auto');ga('send','pageview');
        </script>-->
        
        </body>
        </html>
        
        <?php
    }
}
