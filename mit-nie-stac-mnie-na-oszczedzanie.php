<?php
// mit 5
require_once('libs/App.class.php');

Tpl::htmlHead(null, [
    'title' => 'Prudential | Mit | Nie stać mnie na oszczędzanie.',
    'desc' => 'A jednak odkładając codziennie drobne kwoty możemy dojść do dużych oszczędności. Pieniądze zaoszczędzone dzisiaj mogą zarabiać na Twoją przyszłość i długoterminowe cele.'
]);
Tpl::nav();
?>


<div class="jumbotron border-top">
    <img src="img/mity/mit-nie-stac-mnie-na-oszczedzanie.jpg" alt="Mit. Nie stać mnie na oszczędzanie." class="img-responsive full-width hidden-xs hidden-sm">
    <img src="img/mity/mit-nie-stac-mnie-na-oszczedzanie-mobile.jpg" alt="Mit. Nie stać mnie na oszczędzanie." class="img-responsive full-width visible-xs visible-sm">

    <a href="mit-na-emeryturze-moje-potrzeby-beda-mniejsze" class="btn btn-left">
        <img src="img/icon-arrow-left.png" alt="">
        Poprzedni<br>mit
    </a>

    <a href="mit-ubezpieczenie-na-zycie-to-strata-pieniedzy" class="btn btn-right">
        <img src="img/icon-arrow-right.png" alt="">
        Następny<br>mit
    </a>
</div>

<div class="container-fluid">
    <div class="row row-flex row-centered row-margin">
        <div class="hidden-xs hidden-sm hidden-md col-lg-2 col-lg-offset-2">
            <img src="img/icon-wallet.png" alt="" class="headline-image img-responsive pull-right">
        </div>

        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-6">
            <div class="headline headline-left">
                <div>
                    A jednak odkładając codziennie drobne kwoty, <strong>możemy dojść do dużych oszczędności.</strong>
                    I&nbsp;wcale nie kosztem wielkich wyrzeczeń. Wiadomo, początki bywają trudne.
                    Pieniądze zaoszczędzone dzisiaj mogą zarabiać na Twoją przyszłość i&nbsp;wyznaczone długoterminowe cele,
                    jak edukacja dzieci, budowa domu czy też zabezpieczenie emerytalne.
                </div>

                <div>
                    Im szybciej zaczniesz systematycznie i&nbsp;konsekwentnie inwestować określoną kwotę,
                    tym większy będzie zgromadzony kapitał po latach.
                </div>
            </div>
        </div>
    </div>

    <header class="row border-top">
        <h1>
            <strong>Poradnik:</strong> na czym najłatwiej zaoszczędzić?
        </h1>

        <hr>
    </header>

    <div class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1">
            <div class="row main-info-table">
                <div class="col-xs-12 col-md-6 special-line-height">
                    <div class="row">
                        <div class="row-height">
                            <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                                <img src="img/icon-chart.png" alt="" class="img-responsive center-block">
                            </div>

                            <div class="col-xs-12 col-md-8 col-md-height col-md-middle">
                                <h2>1. Zacznij od przyjrzenia się swoim rachunkom.</h2>

                                <p>
                                    Pamiętasz, kiedy ostatnio przeglądałeś ofertę dostawców domowych multimediów albo operatorów komórkowych?
                                    Pewnie dawno temu. Technologia idzie do przodu i często to, za co płacisz,
                                    teraz jest tańsze u innego dostawcy. Warto się temu przyjrzeć.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="row-height">
                            <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                                <img src="img/icon-bicycle.png" alt="" class="img-responsive center-block">
                            </div>

                            <div class="col-xs-12 col-md-8 col-md-height col-md-middle">
                                <h2>2. Myśl ekonomicznie.</h2>

                                <p>
                                    Samochodem wygodnie jeździ się do pracy, całkiem wygodnie siedzi się też w korkach.
                                    A silnik cały czas pracuje, spalając przy tym paliwo – czyli Twoje pieniądze.
                                    Może na wiosnę czas przesiąść się na rower? Spala kalorie, nie oszczędności.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="row-height">
                            <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                                <img src="img/icon-burger.png" alt="" class="img-responsive center-block">
                            </div>

                            <div class="col-xs-12 col-md-8 col-md-height col-md-middle">
                                <h2>3. Fast food Twój wróg (i&nbsp;Twojego portfela)!</h2>

                                <p>
                                    Złe nawyki żywieniowe nie służą ani Tobie, ani Twojemu portfelowi. Drobne wydatki należą do
                                    tych „niekontrolowanych” i często z małych kwot zmieniają się w zawrotne sumy. Pomyśl, że 20 złotych dziennie wydane na gotowe dania od
                                    Pana Kanapki w pracy, słodzone napoje i batoniki to nawet 600 złotych w skali miesiąca. Nie wspominając o dodatkowych kilogramach i ubytkach zdrowotnych.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="row">
                        <div class="row-height">
                            <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                                <img src="img/icon-mug.png" alt="" class="img-responsive center-block">
                            </div>

                            <div class="col-xs-12 col-md-8 col-md-height col-md-middle">
                                <h2>4. Ładna, droga kawa z&nbsp;sieciówki.</h2>

                                <p>
                                    Nie możesz żyć bez kubka kawy w dłoni? Ale chodzi o image czy pragnienie kofeiny?
                                    Bo jeśli to drugie, to istnieje kilka tańszych sposobów na parzenie kawy i nieprzepłacanie
                                    za logo na styropianowym kubku. Ulubioną kawę można przygotować w domu i nosić
                                    przy sobie w kubku termicznym bądź stylowym termosie.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="row">
                        <div class="row-height">
                            <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                                <img src="img/icon-flow.png" alt="" class="img-responsive center-block">
                            </div>

                            <div class="col-xs-12 col-md-8 col-md-height col-md-middle">
                                <h2>5. Bądź eko!</h2>

                                <p>
                                    Eko jest trendy. Podobnie jak oszczędzanie. A jak już nauczysz się łączyć jedno z drugim, to w ogóle szacunek i&nbsp;podziw.
                                    Przykład? Zakręcaj wodę, myjąc zęby. Gaś światło w pokojach, w których nie przebywasz.
                                    Na czas dłuższej nieobecności w domu odłączaj z&nbsp;gniazdka urządzenia, np. router.
                                    Zapłacisz mniejsze rachunki i&nbsp;dasz odetchnąć środowisku.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="row-height">
                            <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                                <img src="img/icon-man.png" alt="" class="img-responsive center-block">
                            </div>

                            <div class="col-xs-12 col-md-8 col-md-height col-md-middle">
                                <h2>6. Wyprzedaże garażowe.</h2>

                                <p>
                                    Zanim kupisz nowe ubrania – pozbądź się starych. Zrób przegląd szafy i pomyśl, co
                                    jest Ci naprawdę niezbędne w nowym sezonie. Rzeczy w dobrym stanie możesz wystawić na
                                    internetowe aukcje albo urządzić „garażówkę”, na której oprócz ubrań możesz pozbyć się
                                    zbędnych drobiazgów z mieszkania.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="row-height">
                            <div class="col-xs-12 col-md-4 col-md-height col-md-middle">
                                <img src="img/icon-plane.png" alt="" class="img-responsive center-block">
                            </div>

                            <div class="col-xs-12 col-md-8 col-md-height col-md-middle">
                                <h2>7. Poluj na okazje.</h2>

                                <p>
                                    Bilety lotnicze kupione z wyprzedzeniem kosztują dużo mniej. Najmniej też zapłacimy
                                    za rzeczy kupione zimą, które mogą przydać się latem. Wtedy nikt nie zwraca na
                                    nie uwagi, ale ceny poza sezonem mogą zdziałać cuda dla domowego budżetu.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-filled-red">
        <div class="col-xs-12">
            <div class="text-center">
                <span class="btn-near-cta">Nie zwlekaj!</span>
                <p>
                    <a href="https://formularz.prudential.pl/lead?lid=46432" class="btn btn-primary btn-white" target="_blank">Zrób plan oszczędzania <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                </p>
            </div>
        </div>
    </div>

    <div class="row row-filled-lightgray main-info-table row-no-margins">
        <div class="container-fluid">
            <header class="row">
                <h1>
                    <strong>Poradnik:</strong> jak zacząć oszczędzać?
                </h1>

                <hr>
            </header>
        </div>

        <div class="row-height">
            <div class="hidden-xs hidden-sm col-md-2">&nbsp;</div>
            <div class="col-xs-12 col-md-2 col-md-height col-md-middle">
                <img src="img/piggybox.png" alt="" class="img-responsive center-block">
            </div>

            <div class="col-xs-12 col-md-5 col-md-height">
                <h2 class="h2-mod-1">1. Wybierz cel i trzymaj się planu</h2>
                <p>
                    Pomyśl, na co zbierasz pieniądze albo jakie marzenie chciałbyś spełnić,
                    a następnie zaplanuj oszczędzanie według swoich możliwości.
                </p>


                <h2 class="h2-mod-1">2. Mądrze wydawaj</h2>
                <p>
                    Pod koniec miesiąca na koncie powinno zostać więcej?
                    Zacznij zbierać paragony lub zapisywać wydatki, by pozbyć się „dziury”, którą uciekają pieniądze.
                </p>


                <h2 class="h2-mod-1">3. Uwierz w siebie</h2>
                <p>
                    Po prostu zacznij odkładać. Najpierw małe kwoty, żeby się nie zniechęcić.
                    Z czasem będziesz dumny ze swojej napchanej świnki-skarbonki.
                </p>

                <h2 class="h2-mod-1">4. Oszczędzanie jest fajne</h2>
                <p>
                    Zmień podejście. Nie myśl o tym jak o&nbsp;ograniczaniu, ale o&nbsp;inwestowaniu.
                    Oszczędzając, jesteś jak strateg-zdobywca, nie jak pustelnik.
                </p>

                <h2 class="h2-mod-1">5. Każdy sposób jest dobry</h2>
                <p>
                    Na przykład z aplikacją do zapisywania codziennych wydatków. Niezwykle pomocna przy prowadzeniu prywatnej księgowości na bieżąco.
                </p>

                <h2 class="h2-mod-1">6. Realizacja celu = nagroda za włożony wysiłek</h2>
                <p>
                    Znasz to. Im trudniejszy cel, tym większa satysfakcja. Z&nbsp;oszczędzaniem jest tak samo.
                </p>
            </div>

            <div class="hidden-xs hidden-sm col-md-3">&nbsp;</div>
        </div>
    </div>

    <?php
    Tpl::products();
    ?>

    <div class="row row-padded-vertical">
        <header>
            <h1>Zmierz się z <strong>innymi mitami</strong></h1>
        </header>
    </div>

    <div class="row myths-multibox">
        <div class="col-md-6">
            <figure>
                <a href="mit-na-emeryturze-moje-potrzeby-beda-mniejsze">
                    <img src="img/mity/mit-4-wide.jpg" alt="Mit. Na emeryturze moje potrzeby będą mniejsze" class="img-responsive full-width" />
                </a>
            </figure>
        </div>

        <div class="col-md-6">
            <figure>
                <a href="mit-ubezpieczenie-na-zycie-to-strata-pieniedzy">
                    <img src="img/mity/mit-6-wide.jpg" alt="Mit. Ubezpieczenie na życie to strata pieniędzy" class="img-responsive full-width" />
                </a>
            </figure>
        </div>
    </div>
</div>

<?php
Tpl::bottom();
Tpl::htmlFooter();
?>

