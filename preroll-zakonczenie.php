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
