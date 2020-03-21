<?php

$pageTitle = 'howto';
include '_header.php';

?>





</header>

<main>

    <section class="intro">
        <h2 class="text-center mt-5">Comment s'y retrouver dans le choix de sa méthode de formation ?</h2>
        <p class="intro-howto text-justify">Pour commencer à faire du développement web plusieurs solutions s'offre à vous : se former en autodidacte, se former dans un cursus classique ou via des formations professionnelles. On va essayer d'éclaircir tout ça dans cette section. Let's go !</p>
        <article class="img-container">
            <img class="mb-4 p-3" src="https://cdn.pixabay.com/photo/2018/04/18/09/57/icon-3329995_960_720.jpg" alt="illustration-tableau-langages"/>
        </article>
    </section>

    <section class="container-fluid" id="accordion-howto">

        <div id="accordion">
            <!-- Card one online lessons -->
            <div class="card mb-3 mt-5">
                <div class="card-header" id="headingOne">
                    <h3 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                            Les formations pour débuter en autodidacte
                        </button>
                    </h3>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="row p-4">
                        <!-- Gratuit -->
                        <div class="col-lg-6">
                            <div class="card card-body m-3">
                                <h4 class="text-center">Gratuites</h4>
                                <p class="text-justify">
                                    Vous trouverez de nombreuses ressources gratuites pour vous former en autodidacte. Des sites comme OpenClassroom, Codeacademy et autres peuvent être des bonnes solutions. Allez faire un tour dans notre section <a href="ressources.php">ressources</a> pour en découvrir plus !
                                </p>
                            </div>
                        </div>
                        <!-- Payant -->
                        <div class="col-lg-6">
                            <div class="card card-body m-3">
                                <h4 class="text-center">Payantes</h4>
                                <p class="text-justify">
                                    D'autres sites proposent des formations payantes comme <a href="https://www.udemy.com/">Udemy</a> ou Digma (que l'on évoque aussi dans notre page <a href="ressources.php">ressources</a>)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 2 School -->
        <div class="card mb-3">
            <div class="card-header" id="headingTwo">
                <h3 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                        Les écoles et universités
                    </button>
                </h3>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="row p-4">
                    <!-- Gratuit -->
                    <div class="col-lg-6">
                        <div class="card card-body m-3">
                            <h4 class="text-center">Gratuites</h4>
                            <p class="text-justify">
                                Des organismes comme le CNAM, le GRETA ou des écoles comme Simplon, dispensent des formations dans le domaine du développement web gratuitement. Les universités proposent aussi des cursus enseignant ce domaine.
                            </p>
                        </div>
                    </div>
                    <!-- Payant -->
                    <div class="col-lg-6">
                        <div class="card card-body m-3">
                            <h4 class="text-center">Payantes</h4>
                            <p class="text-justify">
                                Des écoles comme Epitech proposent des cursus sur plusieurs années pour se former au métier de développeur.s.e web.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 2 End -->
        <!-- Card 3  -->
        <div class="card mb-3">
            <div class="card-header" id="headingTree">
                <h3 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTree"
                            aria-expanded="false" aria-controls="collapseTwo">
                        Les formations professionnelles
                    </button>
                </h3>
            </div>
            <div id="collapseTree" class="collapse" aria-labelledby="headingTree" data-parent="#accordion">
                <div class="row p-4">
                    <!-- Gratuit -->
                    <div class="col-lg-12">
                        <div class="card card-body m-3">
                            <h4 class="text-center">Les formations professionelles</h4>
                            <p class="text-justify">
                                Les formations professionelles sont adaptés pour des personne en reconversion ou qui veulent simplement rentrer rapidement dans le vif du sujet. <br>
                                Une école comme la <a href="https://www.wildcodeschool.com/fr-FR" target="_blank">Wild Code School</a> fournit une formation en 5 mois suivi d'un stage qui permet à ses élèves d'obtenir des bases solides pour débuter comme développeur.s.e junior.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Card 3 End -->
        </div>
        <!-- Accordion End -->
    </section>

</main>





<?php

include '_footer.php';

?>
