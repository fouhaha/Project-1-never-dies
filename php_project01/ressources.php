<?php

$pageTitle = 'ressources';
include '_header.php';

?>





</header>

<main class>
    <!--/////////////////// TITRE + INTRO //////////////////  -->
    <section class="intro">
        <h2 class="mt-5 text-center">Les ressources et outils</h2>
        <p class="intro-ressources text-justify">Nous allons regrouper ici différentes ressources qui vont grandement vous servir. On y
            retrouvera des cours en ligne, des documentations, et des outils indispensables.<br> On vous a déja préparer le
            terrain en séparant les contenus selon leur sujet.</p>
        <article class="img-container">
            <img class="mb-4 p-3" src="https://cdn.pixabay.com/photo/2015/12/04/14/05/code-1076536_960_720.jpg"/>
        </article>
    </section>
    <!--/////////////////// DEBUT ACCORDEON //////////////////  -->
    <section class="accordion" id="accordion-ressources">
        <!--/////////////////// DEBUT HTML CSS JS //////////////////  -->
        <section class="card mb-3 mt-5">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="false" aria-controls="collapseOne">
                        Bien débuter HTML / CSS / JavaScript
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-ressources">
                <div class="card-body">
                    <ul>
                        <li class="d-flex align-items-center">
                            <h3 class="col-8 font-weight-bold">HTML</h3>
                            <i class="col-4 fab fa-html5 fa-6x"></i>
                        </li>
                        <li>
                            <h4 class="p-3">Bien débuter :</h4>
                            <p>Pour débuter votre découverte du HTML rien ne vaut une belle définition et un tour d'horizon. On vous
                                conseille donc deux ressources pour bien débuter : </p>
                            <p>Une page appartenant à la documentations de Mozilla vous définissant le langage et son fonctionnment
                                :<br>
                                <a href="https://developer.mozilla.org/fr/docs/Apprendre/Commencer_avec_le_web/Les_bases_HTML"
                                   target="_blank">Les bases du HTML</a></p>
                            <p>Deuxièmement il va falloir mettre en pratique ces notions. Cette introduction à HTML vous guidera
                                dans votre découverte de ce langage (ressources en anglais) : <br>
                                <a href="https://www.codecademy.com/learn/learn-html" target="_blank">Introduction to HTML</a></p>

                        </li>
                        <li>
                            <h4 class="p-3">Aller plus ploin avec HTML :</h4>
                            <p>Pour aller plus loin et continuer la pratique, voici un bon cours avec ces exercices pour commencer à
                                coder (ce cours utilisera CSS, évoquer dans la partie suivante) : <br>
                                <a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3"
                                   target="_blank">Apprenez à créer votre site web avec HTML5 et CSS3</a></p>
                        </li>
                    </ul>
                    <hr class="m-5">
                    <ul>
                        <li class="d-flex align-items-center">
                            <h3 class="col-8 font-weight-bold">CSS</h3>
                            <i class="col-4 fab fa-css3-alt fa-6x"></i>
                        </li>
                        <li>
                            <h4 class="p-3">Bien débuter :</h4>
                            <p>Pour débuter à utiliser du CSS il faudra déjà quelques bases en HTML. Car sans html pas de CSS. Pour
                                bien comprendre comment il fonctionne.</p>
                            <p>La première ressource que nous vous présentons est tirer de la documentation de Mozilla et vous
                                donnera une bonne vue d'ensemble pour comprendre le fonctionnement de CSS : <br>
                                <a href="https://developer.mozilla.org/fr/docs/Apprendre/Commencer_avec_le_web/Les_bases_CSS"
                                   target="_blank">Les bases des CSS</a></p>
                            <p>Une autre ressources intéressante et très complète pour approfondir ses connaissances. Il s'agit d'un
                                répertoire de toutes les fonctions de CSS : <br>
                                <a href="https://www.w3schools.com/css/" target="_blank">CSS Tutorial</a></p>

                        </li>
                        <li>
                            <h4 class="p-3">Aller plus loin avec CSS :</h4>
                            <p>Une autre ressource avec que du contenu sur CSS. Des bonnes présentations des fonctions du CSS avec
                                des schéma (par exemple sur Flexbox) et pleins de news sur CSS: <br>
                                <a href="https://css-tricks.com/" target="_blank">CSS Tricks</a></p>
                        </li>
                    </ul>
                    <hr class="m-5">
                    <ul>
                        <li class="d-flex align-items-center">
                            <h3 class="col-8 font-weight-bold">JavaScript</h3>
                            <i class="col-4 fab fa-js-square fa-6x"></i>
                        </li>
                        <li>
                            <h4 class="p-3">Bien débuter :</h4>
                            <p>Encore une fois la documentation de Mozilla sera un bon début. Très complète, elle permettra de
                                définir clairement le JavaScript et ses utilisations : <br>
                                <a href="https://developer.mozilla.org/fr/docs/Web/JavaScript" target="_blank">MDN - JavaScript</a>
                            </p>
                            <p>Pour commencer la pratique facilement, le parcours JavaScript de Sololearn est très bien fait
                                (ressource en anglais): <br>
                                <a href="https://www.sololearn.com/Course/JavaScript" target="_blank">JavaScript Tutorial</a></p>
                        </li>
                        <li>
                            <h4 class="p-3">Aller plus loin avec JavaScript :</h4>
                            <p>Un répertoire très complet de W3C avec tutoriel et détails de toutes les fonctions : <br>
                                <a href="https://www.w3schools.com/js/" target="_blank">JavaScript Tutorial</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--/////////////////// DEBUT RESSOURCES //////////////////  -->
        <section class="card mb-3">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                        Les ressources indispensables
                    </button>
                </h2>
            </div>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-ressources">
                <div class="card-body">
                    <ul>
                        <li class="d-flex align-items-center">
                            <h3 class="col-8 font-weight-bold">Les ressources indispensables</h3>
                            <i class="col-4 fas fa-book-open fa-3x"></i>
                        </li>
                        <li>
                            <h4 class="p-4">Documentations et tutoriels</h4>
                            <p>Plusieurs documentations sont très complètes pour toutes ce qui concerne le développement web. Les
                                deux que l'on vous conseille sont :</p>
                            <p>La documentation de W3Schools qui est super complète avec et qui reprend quasiment tous les outils
                                qu'un.e développeur.s.e pourra utiliser :<br>
                                <a href="https://www.w3schools.com/" target="_blank">W3Schools Online Web Tutorials</a></p>
                            <p>La documentation pour les développeur.s.e de la fondation Mozilla. Elle a l'avantage d'être traduite
                                en français et de définir clairement les notions abordés :<br>
                                <a href="https://developer.mozilla.org/fr/docs/Web" target="_blank">MDN - Mozilla</a></p>
                        </li>
                        <li>
                            <h4 class="p-4">Cours en ligne et parcours d'apprentissage :</h4>
                            <p>Un site super et très complet, en français, pour apprendre sur plein de sujet dont le développement
                                web :<br>
                                <a id="openclass" href="https://openclassrooms.com/fr/" target="_blank">OpenClassrooms</a></p>
                            <p>Deux autres super ressources pour être guider dans son apprentissage et apprendre progressivement
                                (ressources en anglais) :<br>
                                <a href="https://www.codecademy.com/" target="_blank">Codecademy</a><br>
                                <a href="https://www.sololearn.com/" target="_blank">SoloLearn</a></p>
                            <p>Une autres ressources intéressantes pour des formations en ligne (ressource payante) : <br>
                                <a href="https://dyma.fr/" target="_blank">Dyma</a></p>
                        </li>
                        <li>
                            <h4 class="p-4">Pour aller plus loin :</h4>
                            <p>Pour les plus téméraires, un site français permettant de s'initier aux joies de l'algorithmie :<br>
                                <a href="http://www.france-ioi.org/" target="_blank">France-IOI</a></p>
                            <p>Et pour valider ses acquis un site regroupant plein de katas (petit exercice) dans plein de langages
                                différents :<br>
                                <a href="https://www.codewars.com/" target="_blank">Codewars</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--/////////////////// DEBUT OUTILS //////////////////  -->
        <section class="card mb-3">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                        Les outils indispensables
                    </button>
                </h2>
            </div>

            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-ressources">
                <div class="card-body">
                    <ul>
                        <li class="d-flex align-items-center">
                            <h3 class="col-8 font-weight-bold">Les outils indispensables</h3>
                            <i class="col-4 fas fa-tools fa-3x"></i>
                        </li>
                        <p class="p-3">Plusieurs outils vont être indispensable pour faire du développement web. Dans cette
                            section nous vous en présenterons quelques-uns que vous aller utiliser très rapidement.</p>
                        <li>
                            <h4 class="p-4">Navigateur et inspecteur :</h4>
                            <p>Outils indispensables du développeur.s.e, il permet d'afficher nos projets web et surtout de les
                                analyser avec l'outils inspecteur compris dans les meilleurs navigateurs. Vous avez plus qu'a choisir
                                celui qui vous convient le mieux : <br>
                                <a href="https://www.mozilla.org/fr/firefox/new/" target="_blank">Mozilla Firefox</a><br>
                                <a href="https://www.google.com/intl/fr_fr/chrome/" target="_blank">Google Chrome</a></p>
                        </li>
                        <li>
                            <h4 class="p-4">Editeur de texte / IDE</h4>
                            <p>Tout développeur.s.e aura besoin d'un éditeur de texte pour travailler son code. Ils permettront de
                                faciliter la lecture du code via la coloration syntaxique et possèdent multitudes de petits
                                raccourcis. Certains permettent des fonctions encore plus avancées</p>
                            <p>On vous propose un aperçu des plus populaires :<br>
                                <a href="https://atom.io/" target="_blank">Atom</a><br>
                                <a href="https://code.visualstudio.com/" target="_blank">Visual Studio Code</a><br>
                                <a href="https://www.sublimetext.com/" target="_blank">Sublime Text</a></p>
                        </li>
                        <li>
                            <h4 class="p-4">Git et GitHub</h4>
                            <p>Un outils que vous serez amener à utiliser rapidement sera Git. Système de gestion de version très
                                pratique pour gérer des projets à plusieurs et dans le temps. GitHub permet d'utiliser Git avec une
                                interface web graphique :<br>
                                <a href="https://github.com/" target="_blank">GitHub</a></p>
                        </li>
                    </ul>
                </div>
            </div>

        </section>

    </section>
    <!--/////////////////// FIN ACCORDEON //////////////////  -->
</main>





<?php

include '_footer.html';

?>