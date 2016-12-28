<?php
require_once('libs/App.class.php');

Tpl::htmlHead();
Tpl::nav();

// określamy, jaką treść wyświetlić użytkownikowi, zależy to od parametru w URL (?s=tak, ?s=nie)
$submission_status = 'option_true'; // defaultowo "tak"

if (isset($_GET['s']) && $_GET['s'] == 'nie') { // user wybrał "nie"
    $submission_status = 'option_false';
}

$file_video_yes = null;
$file_video_no = null;
$file_video_yes_placeholder = null;
$file_video_no_placeholder = null;
$placeholder_video_class = null;

if (!isset($_GET['f'])) { // który film wyświetlić
    $_GET['f'] = null;
}

switch ($_GET['f']) {
    case 'p':
        $file_video_yes = 'video/preroll/Prudential_Preroll_puenta_TAK_Pilka_25s_BIG';
        $file_video_no = 'video/preroll/Prudential_Preroll_puenta_NIE_Pilka_25s_BIG';
        $file_video_yes_placeholder = 'video/preroll/video-placeholder-pilka.jpg';
        $file_video_no_placeholder = 'video/preroll/video-placeholder-pilka.jpg';
        $placeholder_video_class = 'video-placeholder-pilka';

        break;

    case 'k':
    default:
        $file_video_yes = 'video/preroll/Prudential_Preroll_puenta_TAK_Kosiarka_25s_BIG'; // without extension
        $file_video_no = 'video/preroll/Prudential_Preroll_puenta_NIE_Kosiarka_25s_BIG'; // without extension
        $file_video_yes_placeholder = 'video/preroll/video-placeholder-kosiarka.jpg';
        $file_video_no_placeholder = 'video/preroll/video-placeholder-kosiarka.jpg';
        $placeholder_video_class = 'video-placeholder-kosiarka';

        break;
}

switch ($submission_status) {
    case 'option_false':
        ?>

        <!-- Google Code for Konwersja Nie Conversion Page -->
        <script type="text/javascript">
            /* <![CDATA[ */
            var google_conversion_id = 1013748706;
            var google_conversion_language = "en";
            var google_conversion_format = "3";
            var google_conversion_color = "ffffff";
            var google_conversion_label = "PQHpCMaFrmwQ4qey4wM";
            var google_remarketing_only = false;
            /* ]]> */
        </script>
        <script src="https://www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
            <div style="display:inline;">
                <img height="1" width="1" style="border-style:none;" alt="" src="https://www.googleadservices.com/pagead/conversion/1013748706/?label=PQHpCMaFrmwQ4qey4wM&amp;guid=ON&amp;script=0"/>
            </div>
        </noscript>

        <?php
        switch ($_GET['f']) {
            case 'p': // pilka
                ?>

                <!-- Adform Tracking Code BEGIN -->
                <script type="text/javascript">
                    window._adftrack = Array.isArray(window._adftrack) ? window._adftrack : (window._adftrack ? [window._adftrack] : []);
                    window._adftrack.push({
                        pm: 530973,
                        divider: encodeURIComponent('|'),
                        pagename: encodeURIComponent('Pilka.NIE.LP')
                    });
                    (function () { var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'https://track.adform.net/serving/scripts/trackpoint/async/'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); })();

                </script>
                <noscript>
                    <p style="margin:0;padding:0;border:0;">
                        <img src="https://track.adform.net/Serving/TrackPoint/?pm=530973&ADFPageName=Pilka.NIE.LP&ADFdivider=|" width="1" height="1" alt="" />
                    </p>
                </noscript>
                <!-- Adform Tracking Code END -->

                <?php
                break;

            case 'k': // kosiarka
            default:
                ?>

                <!-- Adform Tracking Code BEGIN -->
                <script type="text/javascript">
                    window._adftrack = Array.isArray(window._adftrack) ? window._adftrack : (window._adftrack ? [window._adftrack] : []);
                    window._adftrack.push({
                        pm: 530973,
                        divider: encodeURIComponent('|'),
                        pagename: encodeURIComponent('Kosiarka.NIE.LP')
                    });
                    (function () { var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'https://track.adform.net/serving/scripts/trackpoint/async/'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); })();

                </script>
                <noscript>
                    <p style="margin:0;padding:0;border:0;">
                        <img src="https://track.adform.net/Serving/TrackPoint/?pm=530973&ADFPageName=Kosiarka.NIE.LP&ADFdivider=|" width="1" height="1" alt="" />
                    </p>
                </noscript>
                <!-- Adform Tracking Code END -->

                <?php

            break;
        }

        break;

    case 'option_true':
        ?>

        <?php
        /* <!-- Google Code for Konwersja Tak Conversion Page -->
        <script type="text/javascript">
            var google_conversion_id = 1013748706;
            var google_conversion_language = "en";
            var google_conversion_format = "3";
            var google_conversion_color = "ffffff";
            var google_conversion_label = "f4MFCN_EqWwQ4qey4wM";
            var google_remarketing_only = false;
        </script>
        <script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
            <div style="display:inline;">
                <img height="1" width="1" style="border-style:none;" alt="" src="https://www.googleadservices.com/pagead/conversion/1013748706/?label=f4MFCN_EqWwQ4qey4wM&amp;guid=ON&amp;script=0"/>
            </div>
        </noscript>
        */
        ?>

        <?php
        switch ($_GET['f']) {
            case 'p': // pilka
                ?>

                <!-- Adform Tracking Code BEGIN -->
                <script type="text/javascript">
                    window._adftrack = Array.isArray(window._adftrack) ? window._adftrack : (window._adftrack ? [window._adftrack] : []);
                    window._adftrack.push({
                        pm: 530973,
                        divider: encodeURIComponent('|'),
                        pagename: encodeURIComponent('Pilka.TAK.LP')
                    });
                    (function () { var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'https://track.adform.net/serving/scripts/trackpoint/async/'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); })();

                </script>
                <noscript>
                    <p style="margin:0;padding:0;border:0;">
                        <img src="https://track.adform.net/Serving/TrackPoint/?pm=530973&ADFPageName=Pilka.TAK.LP&ADFdivider=|" width="1" height="1" alt="" />
                    </p>
                </noscript>
                <!-- Adform Tracking Code END -->

                <?php
                break;

            case 'k': // kosiarka
            default:
                ?>

                <!-- Adform Tracking Code BEGIN -->
                <script type="text/javascript">
                    window._adftrack = Array.isArray(window._adftrack) ? window._adftrack : (window._adftrack ? [window._adftrack] : []);
                    window._adftrack.push({
                        pm: 530973,
                        divider: encodeURIComponent('|'),
                        pagename: encodeURIComponent('Kosiarka.TAK.LP')
                    });
                    (function () { var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'https://track.adform.net/serving/scripts/trackpoint/async/'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); })();

                </script>
                <noscript>
                    <p style="margin:0;padding:0;border:0;">
                        <img src="https://track.adform.net/Serving/TrackPoint/?pm=530973&ADFPageName=Kosiarka.TAK.LP&ADFdivider=|" width="1" height="1" alt="" />
                    </p>
                </noscript>
                <!-- Adform Tracking Code END -->

                <?php

                break;
        }

        break;
}
?>

<div class="jumbotron border-bottom-rsg" id="jumbotron-video">
    <div id="intro-placeholder">
        <?php
        /*switch($submission_status) {
            case 'option_false':
                ?>
                <img src="img/txt-serio-nie.png" alt="Nie?! Serio?! No weź! Mógłbyś wybrać lepiej." class="img-responsive">
                <?php
                break;

            default:
                ?>
                <img src="img/txt-super-mega-extra-fajnisty.png" alt="Super mega ekstra fajnisty i najlepszy możliwy wybór!" class="img-responsive">
                <?php
                break;
        }*/
        ?>

        <button class="btn btn-link btn-video" data-trigger="startTopVideo"><img src="img/btn-play.png" alt="Start"></button>
    </div>

    <?php
    switch($submission_status) {
        case 'option_false':
            ?>

            <video poster="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" preload class="js-autostart-delayed <?php echo $placeholder_video_class; ?>">
                <source src="<?php echo $file_video_no; ?>.mp4?v2"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                <source src="<?php echo $file_video_no; ?>.webm?v2" type='video/webm; codecs="vp8, vorbis"'>
                <source src="<?php echo $file_video_no; ?>.ogv?v2"  type='video/ogg; codecs="theora, vorbis"'>
            </video>

            <?php
            break;

        default:
            ?>

            <video poster="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" preload class="js-autostart-delayed <?php echo $placeholder_video_class; ?>">
                <source src="<?php echo $file_video_yes; ?>.mp4"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                <source src="<?php echo $file_video_yes; ?>.webm" type='video/webm; codecs="vp8, vorbis"'>
                <source src="<?php echo $file_video_yes; ?>.ogv"  type='video/ogg; codecs="theora, vorbis"'>
            </video>

            <?php
            break;
    }
    ?>
</div>

<div class="container-fluid">
    <header class="row">
        <?php
        switch($submission_status) {
            case 'option_false':
                ?>

                <h1 class="h1-mod-2">
                    Nie chcesz pomóc Młodemu Bogowi.<br>
                    <em>Cóż, każdy dba o siebie.</em>
                </h1>

                <p>
                    Już teraz zadbaj o własną przyszłość.<br>
                    Nie czekaj i umów się z Konsultantem Prudential<br>
                    na niezobowiązujące spotkanie.<br>
                    Im wcześniej zaczniesz oszczędzać na emeryturę<br>
                    tym mniej będzie Cię to kosztowało.<br>
                    Wypełnij formularz, odezwiemy się wkrótce!
                </p>

                <?php
                break;

            default:
                ?>

                <h1 class="h1-mod-2">
                    Pomogłeś Młodemu Bogowi.<br>
                    <em>Dzięki Tobie zacznie oszczędzać na emeryturę.</em>
                </h1>

                <p>
                    Teraz Twoja kolej.<br>
                    Nie czekaj i umów się z Konsultantem Prudential<br>
                    na niezobowiązujące spotkanie.<br>
                    Im wcześniej zaczniesz oszczędzać na emeryturę<br>
                    tym mniej będzie Cię to kosztowało.<br>
                    Wypełnij formularz, odezwiemy się wkrótce!
                </p>

                <?php
                break;
        }
        ?>
    </header>

    <div class="row">
        <div class="col-xs-12">
            <?php
            switch($submission_status) {
                case 'option_false':
                    ?>

                    <iframe class="iframe-camino" src="https://formularz.prudential.pl/lead?lid=64418" id="iframe-camino-1"></iframe>

                    <?php
                    break;

                default:
                    ?>

                    <iframe class="iframe-camino" src="https://formularz.prudential.pl/lead?lid=64320" id="iframe-camino-1"></iframe>

                    <?php
                    break;
            }
            ?>
        </div>
    </div>

</div>

<?php
Tpl::bottom();
Tpl::htmlFooter();
?>
