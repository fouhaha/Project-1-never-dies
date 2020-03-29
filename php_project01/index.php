<?php
$pageTitle = 'index';
$teamPictures = ['Brice' => 'images/brice.jpg',
                'Francois' => 'images/francois.jpg',
                'Baptiste' => 'images/baptiste.jpeg',
                'Hugo' => 'images/hugo.jpg',
                'Armin' => 'images/armin.png',
                'Riri' => 'images/riri.jpg'];
require_once '_header.php';
?>

    <section>
        <!--BANNIERE-->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/dev.jpg" class="d-block w-100" alt="desktop">
                </div>
            </div>
        </div>
    </section>
</header>
<main>
    <br><br>
    <section id="pourquoi">
        <!--SECTION 1 POURQUOI CE SITE -->
        <h2 class="text-center wrapper">Pourquoi ce site ?</h2>
        <p class="pl-5 pr-5 pt-4 text-justify">How to learn to code rassemble des passionnés du développement web. Notre mission à travers ce
            site est de vous aider à vous orienter face à la diversités des moyens de devenir développeur, et de ressources
            disponibles sur internet.En bons passionnés, nous avons passé de longues heures à fouiller, et tester, les
            différents ressources free
            acces.</p>
        <p class="pl-5 pr-5 text-justify">À travers ce site, vous trouverez une multitude de ressources web, et outils, pour parfaire vos
            compétences de
            développeur, ou encore pour vous aider à trouver un moyen de vous former.Vous trouverez aussi des explications sur le
            métier de
            <a class=hyperlink href="roadmap.php">frontend </a> et de <a class=hyperlink href="roadmap.php">backend </a>,
            accompagné de leurs roadmap respectives. </p>
    </section>
    <br><br>
    <section>
        <!--Pictures 1-->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/aze.png" class="d-block w-100" alt="quote">
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="qui">
        <!--SECTION 2 À qui s'adresse-t-il ? -->
        <h2 class="text-center wrapper">À qui s'adresse-t-il ?</h2>
        <p class="pl-5 pr-5 pt-4 text-justify">Si tu recherches des informations sur le métier de développeur, des
            <a class=hyperlink href="ressources.php">ressources </a>
            pour apprendre à coder, ou encore des outils pour faciliter ton écosystème de futur développeur, alors tu es au
            bon endroit ! Garde en tête qu'il existe différents <a class=hyperlink href="howto.php">moyens </a> de devenir
            développeur.</p>
    </section>
    <br><br>
    <section>
        <!--Pictures 2-->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="container ">
                    <img src="images/edc.jpg" class="d-block w-100" alt="desktop">
                    <div class="centered">
                        <h2>Coding is for <br> ANYONE, not just for <br> engineers</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="team">
        <!--SECTION 3 Presentation de l'equipe-->
        <h2 class="text-center wrapper">La Team</h2>
        <p class="pl-5 pr-5 pt-4 text-justify">Voici les six têtes qui participe à te faciliter la vie de développeur, tu peux nous
            contacter via le <a class=hyperlink href="infos.php">formulaire </a> :</p>
    </section>
    <br><br>
    <section>
        <div id="pading-photo" class="container-fluid text-center">
            <div class="row">
                <?php
                foreach ($teamPictures as $name => $picture) {
                    echo "<div class='col-lg-4'>
                            <img src='$picture' width='200' height='200' class='rounded-circle' alt='picture'>
                            <p>$name</p>
                        </div>";
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php
require_once '_footer.php';
?>