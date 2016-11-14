<?php
require_once('libs/App.class.php');

Tpl::htmlHead();
Tpl::nav();

// określamy, jaką treść wyświetlić użytkownikowi, zależy to od parametru w URL (?s=tak, ?s=nie)
$submission_status = 'option_true'; // defaultowo "tak"

if (isset($_GET['s']) && $_GET['s'] == 'nie') { // user wybrał "nie"
    $submission_status = 'option_false';
}
?>

<div class="jumbotron border-bottom-rsg" id="jumbotron-video">
    <div id="intro-placeholder">
        <?php
        switch($submission_status) {
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
        }
        ?>

        <button class="btn btn-link btn-video" data-trigger="startTopVideo"><img src="img/btn-play.png" alt="Start"></button>
    </div>

    <?php
    switch($submission_status) {
        case 'option_false':
            ?>

            <video poster="img/placeholder-video-nie-serio.jpg" preload>
                <source src="video/prudential-mlodzi-bogowie.mp4"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                <source src="video/prudential-mlodzi-bogowie.webm" type='video/webm; codecs="vp8, vorbis"'>
                <source src="video/prudential-mlodzi-bogowie.ogv"  type='video/ogg; codecs="theora, vorbis"'>
            </video>

            <?php
            break;

        default:
            ?>

            <video poster="img/placeholder-video-super-ekstra.jpg" preload>
                <source src="video/prudential-mlodzi-bogowie.mp4"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                <source src="video/prudential-mlodzi-bogowie.webm" type='video/webm; codecs="vp8, vorbis"'>
                <source src="video/prudential-mlodzi-bogowie.ogv"  type='video/ogg; codecs="theora, vorbis"'>
            </video>

            <?php
            break;
    }
    ?>
</div>

<div class="container-fluid">
    <header class="row">
        <h1 class="h1-mod-2">
            <?php
            switch($submission_status) {
                case 'option_false':
                    ?>

                    Nie chcesz pomóc Młodemu Bogowi.<br>
                    <em>No cóż, każdy dba o&nbsp;siebie.</em>

                    <?php
                    break;

                default:
                    ?>

                    Pomogłeś Młodemu Bogowi zająć się emeryturą.<br>
                    <em>To super mega miło z&nbsp;Twojej strony!</em>

                    <?php
                    break;
            }
            ?>
        </h1>

        <p>
            Zajmij się zatem własną przyszłością.<br>
            Umów się z&nbsp;konsultantem Prudentialu.<br>
            Razem znajdziecie Twój sposób na odkładanie.<br>
            Im szybciej zaczniesz, tym mniej będziesz poświęcał,<br>
            żeby zebrać zaplanowaną kwotę.<br>
            Wypełnij formularz, odezwiemy się wkrótce!
        </p>
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
