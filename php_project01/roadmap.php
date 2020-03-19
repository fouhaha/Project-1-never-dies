<!DOCTYPE html>

<?php

$pageTitle = 'roadmap';
include '_header.php';

?>





</header>

<main id="pako_main">
    <header>
        <h1>Step by Step</h1>

        <div>
            <button type="button" class="button_pako button_pako_front">Front-end</button>
            <button type="button" class="button_pako button_pako_back" disabled >Back-end</button>
        </div>
    </header>


    <section id="jquery">

        <!-- ////////////////////////////////////////////////////////////////////////////////// WEB /////// -->
        <svg height="100" width="100" data-toggle="modal" data-target="#modal_web" style="margin-top: 100px;">
            <circle cx="50" cy="50" r="40" stroke="black" stroke-width="1" fill="#ffc100" />
            Sorry, your browser does not support inline SVG.

            <text x="32" y="56" fill="black">WEB</text>
        </svg>

        <!-- ////////////////////////////////////////////////////////////////////////////////// LEARN /////// -->


        <svg height="100" width="100" style="align-self: flex-start;" data-toggle="modal" data-target="#modal_learn">
            <circle cx="50" cy="50" r="40" stroke="black" stroke-width="1" fill="#ffc100" />
            Sorry, your browser does not support inline SVG.

            <text x="24" y="56" fill="black">LEARN</text>
        </svg>

        <!-- ////////////////////////////////////////////////////////////////////////////////// HTML /////// -->


        <svg height="100" width="100" data-toggle="modal" data-target="#modal_html">
            <circle cx="50" cy="50" r="40" stroke="black" stroke-width="1" fill="#ffc100" />
            Sorry, your browser does not support inline SVG.

            <text x="30" y="56" fill="black">HTML</text>
        </svg>

        <svg height="50" width="100">
            <line x1="50" y1="0" x2="50" y2="50" style="stroke:rgb(0,0,0);stroke-width:2" />
        </svg>

        <!-- ////////////////////////////////////////////////////////////////////////////////// CSS /////// -->

        <span id="c_s_s">

                    <svg height="30" width="50" style="margin-left: 50px;" data-toggle="modal" data-target="#modal_sass">
                        <text x="5" y="20" fill="black">Sass</text>
                    </svg>

                    <svg height="50" width="50">
                        <line x1="0" y1="0" x2="50" y2="0" style="stroke:rgb(0,0,0);stroke-width:2" />
                    </svg>


                    <svg height="100" width="100" data-toggle="modal" data-target="#modal_css">
                        <circle cx="50" cy="50" r="40" stroke="black" stroke-width="1" fill="#ff9a00" />
                        Sorry, your browser does not support inline SVG.

                        <text x="32" y="56" fill="black">CSS</text>
                    </svg>

                    <svg height="50" width="50">
                        <line x1="0" y1="0" x2="50" y2="0" style="stroke:rgb(0,0,0);stroke-width:2" />
                    </svg>

                    <svg height="30" width="100">
                        <text x="10" y="20" fill="black">Bootstrap</text>
                    </svg>

                </span>


        <svg height="50" width="100">
            <line x1="50" y1="0" x2="50" y2="50" style="stroke:rgb(0,0,0);stroke-width:2" />
        </svg>

        <!-- ////////////////////////////////////////////////////////////////////////////////// JS /////// -->
        <span id="j_s_">
                    <svg height="80" width="100" data-toggle="modal" data-target="#modal_ES6">
                        <polygon points="50,0 100,75 0,75" style="fill:#ff9a00;stroke:black;stroke-width:1;" />
                        Sorry, your browser does not support inline SVG.

                        <text x="32" y="60" fill="black" style="font-size:18px;">ES6</text>
                    </svg>

                    <svg height="150" width="200" data-toggle="modal" data-target="#modal_js" style="margin: 10px -40px;">
                        <polygon points="0,0 200,0 100,150" style="fill:#ff7400;stroke:black;stroke-width:1;" />
                        Sorry, your browser does not support inline SVG.

                        <text x="50" y="40" fill="black" style="font-size:22px;">JavaScript</text>
                    </svg>

                    <svg height="80" width="100" data-toggle="modal" data-target="#modal_TS">
                        <polygon points="50,0 100,75 0,75" style="fill:#ff9a00;stroke:black;stroke-width:1;" />
                        Sorry, your browser does not support inline SVG.


                        <text x="37" y="60" fill="black" style="font-size:18px;">TS</text>
                    </svg>

                </span>

        <svg height="150" width="100">
            <line x1="50" y1="0" x2="50" y2="140" style="stroke:rgb(0,0,0);stroke-width:2x" />
        </svg>

        <!-- ////////////////////////////////////////////////////////////////////////////////// GIT /////// -->

        <span id="git_solo">
                    <svg id="g_i_t_" height="120" width="120" data-toggle="modal" data-target="#modal_git">
                        <circle cx="50" cy="50" r="40" stroke="black" stroke-width="1" fill="#ffc100" />
                        <circle cx="50" cy="50" r="50" stroke="black" stroke-width="2" fill=none />
                        Sorry, your browser does not support inline SVG.

                        <text x="35" y="56" fill="black">GIT</text>
                    </svg>
                </span>


        <!-- //////////////////////////////////////////////////////////////////////////// FrameWork /////// -->
        <div id="div_frames">
            <svg height="160" width="200" data-toggle="modal" data-target="#modal_react">
                <polygon points="90,0 180,135 0,135" style="fill:#ff7400;stroke:black;stroke-width:1;" />
                Sorry, your browser does not support inline SVG.


                <text x="56" y="120" fill="black" style="font-size:22px;">ReactJS</text>
            </svg>


            <span id="frameWorks">
                        <svg height="160" width="200" id="angularTS" data-toggle="modal" data-target="#modal_angular">
                            <polygon points="90,0 180,135 0,135" style="fill:#ff7400;stroke:black;stroke-width:1;" />
                            Sorry, your browser does not support inline SVG.


                            <text x="45" y="120" fill="black" style="font-size:22px;">ANGULAR</text>
                        </svg>


                        <svg height="160" width="200" id="vueJS" data-toggle="modal" data-target="#modal_vue">
                            <polygon points="90,0 180,135 0,135" style="fill:#ff7400;stroke:black;stroke-width:1;" />
                            Sorry, your browser does not support inline SVG.


                            <text x="65" y="120" fill="black" style="font-size:22px;">VueJS</text>
                        </svg>
                    </span>

            <p id="pako_choose">Choose your Framework</p>
        </div>


        <svg height="200" width="100" style="z-index: 1;">
            <line x1="50" y1="0" x2="50" y2="200" style="stroke:rgb(0,0,0);stroke-width:2x" />
        </svg>

        <svg height="80" width="440" style="z-index: 2;margin-top: -170px; margin-left: -20px;">
            <g fill="none" stroke="black" stroke-width="4">

                <path stroke-dasharray="40,20" d="M0 80 l440 0" />

            </g>
            Sorry, your browser does not support inline SVG.
        </svg>
        <section id="get_deep">
            <p>Getting</p>
            <p>Deeper</p>
        </section>


        <!-- //////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ////////////////////////////////////////////////////////////////////////////////// MODAL /////// -->
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////// -->


        <section class="container_pako">
            <!-- The Modal -->
            <div class="modal fade" id="modal_web">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <header class="modal-header">
                            <h4 class="modal-title"> <img style="width: 128px;" src="images/cloud.png" alt="LOGO cloud">Internet ?</h4>

                        </header>

                        <!-- Modal body -->
                        <section>
                            <ul class="modal-body">
                                <li>
                                    <i class='fas fa-question' style='font-size:36px;margin-right: 15px;'></i>
                                    Comprendre le Web pour en devenir artisan
                                </li>
                                <hr>
                                <li>
                                    <blockquote>
                                        <ul>
                                            <li>Histoire du web</li>
                                            <li>Les langages et frameworks</li>
                                            <li>Le rôle des développeurs</li>
                                        </ul>
                                    </blockquote>
                                </li>
                            </ul>
                            <cite>source:  <a href="https://openclassrooms.com/fr/courses/4312781-apprenez-a-apprendre/exercises/3792">openclassrooms.com</a></cite>
                        </section>


                        <!-- Modal footer -->
                        <footer class="modal-footer">
                            <a href="ressources.html">
                                <h6>Ressources</h6>
                                <i class='fas fa-plus'></i>
                            </a>
                        </footer>
                    </div>


                </div>
            </div>
        </section>
        <!-- ////////////////////////////////////////////////////////////////////////////////// LEARN /////// -->

        <section class="container_pako">
            <!-- The Modal -->
            <div class="modal fade" id="modal_learn">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <header class="modal-header">
                            <h4 class="modal-title"> <img style="width: 128px;" src="https://thumbs.dreamstime.com/b/brain-icon-logo-design-element-can-be-used-as-as-complement-to-95229355.jpg" alt="LOGO HTML5">Apprendre à apprendre</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </header>

                        <!-- Modal body -->
                        <section>
                            <ul class="modal-body">
                                <li>
                                    <i class='fas fa-question' style='font-size:36px;margin-right: 15px;'></i>
                                    Apprendre vite et bien n'est pas un privilège, un don ou un talent réservé aux bons élèves nés avec "des facilités"</li>
                                <hr>
                                <li>
                                    <blockquote>
                                        Pour en faire pleinement l'expérience, vous aurez besoin de maitriser différentes stratégies et tactiques d'apprentissages. Grâce à celles-ci, vous pourrez facilement surmonter des barrières comme :
                                        <ul>
                                            <li>les blocages psychologiques ;</li>
                                            <li>les erreurs d'orientation ;</li>
                                            <li> le manque d'organisation et la procrastination ;</li>
                                            <li>ou les difficultés de mémorisation.</li>
                                        </ul>
                                    </blockquote>
                                </li>
                            </ul>
                            <cite>source:  <a href="https://openclassrooms.com/fr/courses/4312781-apprenez-a-apprendre/exercises/3792">openclassrooms.com</a></cite>
                        </section>


                        <!-- Modal footer -->
                        <footer class="modal-footer">
                            <a href="ressources.html">
                                <h6>Ressources</h6>
                                <i class='fas fa-plus'></i>
                            </a>
                        </footer>
                    </div>

                </div>
            </div>
        </section>


        <!-- ////////////////////////////////////////////////////////////////////////////////// HTML /////// -->

        <section class="container_pako">
            <!-- The Modal -->
            <div class="modal fade" id="modal_html">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <header class="modal-header">
                            <img style="width: 100px;" src="images/html5.ico" alt="LOGO HTML5">
                            <h4 class="modal-title" style="margin-top: 30px;">HyperText Mark-up Langage</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </header>

                        <!-- Modal body -->
                        <section>
                            <ul class="modal-body">
                                <li>
                                    <i class='fas fa-question' style='font-size:36px;margin-right: 15px;'></i>
                                    Langage descriptif qui définit la structure d'une page web</li>
                                <hr>
                                <li><blockquote>Un document HTML est un document texte brut structuré par des éléments. Les éléments sont encadrés par des balises ouvrantes et fermantes associées.</blockquote></li>
                                <li><blockquote>On peut préciser les balises HTML avec des attributs pour fournir des informations complémentaires qui vont modifier la façon dont le navigateur va interpréter l'élément</blockquote></li>
                            </ul>
                            <img id="anatomie" src="https://media.prod.mdn.mozit.cloud/attachments/2019/04/30/16605/062cb4fe603e903b23cb074b25623a67/anatomie-element-html.png" alt="https://media.prod.mdn.mozit.cloud/attachments/2019/04/30/16605/062cb4fe603e903b23cb074b25623a67/anatomie-element-html.png" >
                            <cite>source:  <a href="https://developer.mozilla.org/fr/docs/Glossaire/HTML">developer.mozilla.org</a></cite>
                        </section>


                        <!-- Modal footer -->
                        <footer class="modal-footer">
                            <a href="ressources.html">
                                <h6>Ressources</h6>
                                <i class='fas fa-plus'></i>
                            </a>
                        </footer>
                    </div>

                </div>
            </div>
        </section>

        <!-- ////////////////////////////////////////////////////////////////////////////////// CSS /////// -->

        <section class="container_pako">
            <!-- The Modal -->
            <div class="modal fade" id="modal_css">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <header class="modal-header">
                            <img style="width: 128px;" src="images/css.ico" alt="logo CSS">
                            <h4 class="modal-title" style="margin-top: 50px;">Cascading Style Sheets</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </header>

                        <!-- Modal body -->
                        <section>
                            <ul class="modal-body">
                                <li>
                                    <i class='fas fa-question' style='font-size:36px;margin-right: 15px;'></i>
                                    <p style="margin: -10px auto;">Langage de feuille de style utilisé pour décrire la présentation d'un document écrit en HTML ou en XML</p>
                                </li>
                                <hr>
                                <li><blockquote>CSS décrit la façon dont les éléments doivent être affichés à l'écran, sur du papier, en vocalisation, ou sur d'autres supports.</blockquote></li>
                                <li><blockquote>CSS est l'un des langages principaux du Web ouvert et a été standardisé par le W3C. Ce standard évolue sous forme de niveaux; CSS2.1 correspond à la recommandation et CSS3, qui est découpé en modules plus petits, est en voie de standardisation.</blockquote></li>
                            </ul>
                            <pre>
                                    <var>règle-de-style-basique <strong>::=</strong></var>
                                    <var >liste-de-sélecteurs <strong>{</strong></var>
                                    <var style="padding-left: 20px;">liste-de-propriétés</var>
                                    <strong>}</strong>
                                </pre>
                            <cite style="padding-left: 25px;">source:  <a href="https://sass-lang.com/">sass-lang.com</a></cite>
                        </section>


                        <!-- Modal footer -->
                        <footer class="modal-footer">
                            <a href="ressources.html">
                                <h6>Ressources</h6>
                                <i class='fas fa-plus'></i>
                            </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- /////////////////////////////////////////////////////////////////////////////// Sass /////// -->

        <section class="container_pako">
            <!-- The Modal -->
            <div class="modal fade" id="modal_sass">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <header class="modal-header">
                            <img style="width: 128px; margin-right: 20px;" src="images/sass.png" alt="logo sass">

                            <h4 class="modal-title">Syntactically Awesome Stylesheets</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </header>

                        <!-- Modal body -->
                        <section>
                            <ul class="modal-body">
                                <li>
                                    <i class='fas fa-question' style='font-size:36px;margin-right: 15px;'></i>
                                    <p>Langage dynamique de génération de feuilles de style en cascade </p>
                                </li>
                                <hr>
                                <li><blockquote>
                                        <p>Sass est un préprocesseur CSS.</p>
                                        <p>C'est un langage de description compilé en CSS</p>
                                    </blockquote></li>
                                <li>
                                    <blockquote>
                                        <p>SassScript est un langage de script pouvant être utilisé à l’intérieur du code Sass.</p>
                                        <p>Deux syntaxes existent. La syntaxe originale, nommée « syntaxe indentée », est proche de Haml. La nouvelle syntaxe se nomme SCSS. Elle a un formalisme proche de CSS.</p>
                                        <p>Sass peut être étoffé avec Compass (pratique pour les préfixes des différents navigateurs).</p>
                                    </blockquote>
                                </li>
                            </ul>
                            <pre>
                                    <var>règle-de-style-basique <strong>::=</strong></var>
                                    <var >liste-de-sélecteurs <strong>{</strong></var>
                                    <var style="padding-left: 20px;">liste-de-propriétés</var>
                                    <strong>}</strong>
                                </pre>
                            <cite style="padding-left: 25px;">Site officiel:  <a href="https://developer.mozilla.org/fr/docs/Glossaire/HTML">developer.mozilla.org</a></cite>
                        </section>


                        <!-- Modal footer -->
                        <footer class="modal-footer">
                            <a href="ressources.html">
                                <h6>Ressources</h6>
                                <i class='fas fa-plus'></i>
                            </a>
                        </footer>
                    </div>

                </div>
            </div>
        </section>

        <!-- ///////////////////////////////////////////////////////////////////// Bootstrap /// /////// -->

        <section class="container_pako">
            <!-- The Modal -->
            <div class="modal fade" id="modal_boot">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <header class="modal-header">
                            <h4 class="modal-title"> <img style="width: 128px;" src="images/css.ico" alt="">Cascading Style Sheets</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </header>

                        <!-- Modal body -->
                        <section>
                            <ul class="modal-body">
                                <li>
                                    <i class='fas fa-question' style='font-size:36px;margin-right: 15px;'></i>
                                    <p>Langage de feuille de style utilisé pour décrire la présentation d'un document écrit en HTML ou en XML</p>
                                </li>
                                <hr>
                                <li><blockquote>CSS décrit la façon dont les éléments doivent être affichés à l'écran, sur du papier, en vocalisation, ou sur d'autres supports.</blockquote></li>
                                <li><blockquote>CSS est l'un des langages principaux du Web ouvert et a été standardisé par le W3C. Ce standard évolue sous forme de niveaux (levels), CSS1 est désormais considéré comme obsolète, CSS2.1 correspond à la recommandation et CSS3, qui est découpé en modules plus petits, est en voie de standardisation.</blockquote></li>
                            </ul>
                            <pre>
                                    <var>règle-de-style-basique <strong>::=</strong></var>
                                    <var >liste-de-sélecteurs <strong>{</strong></var>
                                    <var style="padding-left: 20px;">liste-de-propriétés</var>
                                    <strong>}</strong>
                                </pre>
                            <cite style="padding-left: 25px;">source:  <a href="https://developer.mozilla.org/fr/docs/Glossaire/HTML">developer.mozilla.org</a></cite>
                        </section>


                        <!-- Modal footer -->
                        <footer class="modal-footer">
                            <h6>Ressources</h6>
                            <i class='fas fa-plus'></i>
                        </footer>
                    </div>

                </div>
            </div>
        </section>



        <!-- ////////////////////////////////////////////////////////////////////////////////// JS /////// -->

        <section class="container_pako">
            <!-- The Modal -->
            <div class="modal fade" id="modal_js">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <header class="modal-header">
                            <h4 class="modal-title"> <img style="width: 128px;" src="images/js.ico" alt="">JavaScript</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </header>

                        <!-- Modal body -->
                        <section>
                            <ul class="modal-body">
                                <li style="display: flex; margin-top: 20px;">
                                    <i class='fas fa-question' style='font-size:36px;margin-right: 15px;'></i>
                                    <p>Langage de programmation principalement utilisé côté client pour générer des pages web dynamiquement, mais également côté serveur, depuis l'arrivée de Node JS.</p>
                                </li>
                                <hr>
                                <li><blockquote>JavaScript est principalement utilisé dans le navigateur, permettant aux développeurs de manipuler le contenu des pages internet à travers le DOM, manipuler les données avec AJAX et IndexedDB, dessiner avec canvas, interargir avec le périphérique qui pilote le navigateur via de nombreuses APIs, etc.. </blockquote></li>
                                <li>
                                    <blockquote>JavaScript est l'un des langages les plus utilisés au monde, grâce au développement et à l'amélioration des performances des APIs dans les navigateurs.</blockquote>
                                </li>
                            </ul>

                            <cite style="padding-left: 25px;">source:  <a href="https://developer.mozilla.org/fr/docs/Glossaire/HTML">developer.mozilla.org</a></cite>
                        </section>


                        <!-- Modal footer -->
                        <footer class="modal-footer">
                            <h6>Ressources</h6>
                            <i class='fas fa-plus'></i>
                        </footer>
                    </div>

                </div>
            </div>
        </section>

        <!-- ////////////////////////////////////////////////////////////////////////////////// ES6 /////// -->


        <section class="container_pako">
            <!-- The Modal -->
            <div class="modal fade" id="modal_ES6">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <header class="modal-header">
                            <h4 class="modal-title"> <img style="width: 128px;" src="https://raw.githubusercontent.com/wingsuitist/ecmascript-logo/master/es-ecmascript-logo.png" alt="LOGO HTML5"> ECMAScript 6</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </header>

                        <!-- Modal body -->
                        <section>
                            <ul class="modal-body">
                                <li>
                                    <i class='fas fa-question' style='font-size:36px;margin-right: 15px;'></i>
                                    Langage de script qui forme la base de JavaScript</li>
                                <hr>
                                <li><blockquote>ECMAScript est un ensemble de normes concernant les langages de programmation de type script et standardisées par Ecma International dans le cadre de la spécification ECMA-262</blockquote></li>
                                <li><blockquote> Il s'agit donc d'un standard, dont les spécifications sont mises en œuvre dans différents langages de script, comme JavaScript ou ActionScript. C'est un langage de programmation orienté prototype</blockquote></li>
                            </ul>
                            <img id="anatomie" src="https://media.prod.mdn.mozit.cloud/attachments/2019/04/30/16605/062cb4fe603e903b23cb074b25623a67/anatomie-element-html.png" alt="https://media.prod.mdn.mozit.cloud/attachments/2019/04/30/16605/062cb4fe603e903b23cb074b25623a67/anatomie-element-html.png" >
                            <cite>source:  <a href="https://fr.wikipedia.org/wiki/ECMAScript"><wikipedia class="org">wikipedia.org</wikipedia></a></cite>
                        </section>


                        <!-- Modal footer -->
                        <footer class="modal-footer">
                            <h6>Ressources</h6>
                            <i class='fas fa-plus'></i>
                        </footer>
                    </div>

                </div>
            </div>
        </section>

        <!-- ////////////////////////////////////////////////////////////////////////////////// TS /////// -->


        <section class="container_pako">
            <!-- The Modal -->
            <div class="modal fade" id="modal_TS">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <header class="modal-header">
                            <h4 class="modal-title"> <img style="width: 128px;" src="https://blog.cellenza.com/wp-content/uploads/2018/10/1-mn6bOs7s6Qbao15PMNRyOA-300x300.png" alt="LOGO HTML5">TypeScript</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </header>

                        <!-- Modal body -->
                        <section>
                            <ul class="modal-body">
                                <li>
                                    <i class='fas fa-question' style='font-size:36px;margin-right: 15px;'></i>
                                    Langage de programmation libre et open source développé par Microsoft qui a pour but d'améliorer et de sécuriser la production de code JavaScript</li>
                                <hr>
                                <li>
                                    <blockquote>C'est un sur-ensemble de JavaScript (c'est-à-dire que tout code JavaScript correct peut être utilisé avec TypeScript)</blockquote>
                                </li>
                                <li>
                                    <blockquote>TypeScript permet un typage statique optionnel des variables et des fonctions, la création de classes et d'interfaces, l'import de modules, tout en conservant l'approche non-contraignante de JavaScript. Il supporte la spécification ECMAScript 6.</blockquote>
                                </li>
                            </ul>
                            <img id="anatomie" src="https://media.prod.mdn.mozit.cloud/attachments/2019/04/30/16605/062cb4fe603e903b23cb074b25623a67/anatomie-element-html.png" alt="https://media.prod.mdn.mozit.cloud/attachments/2019/04/30/16605/062cb4fe603e903b23cb074b25623a67/anatomie-element-html.png" >
                            <cite>source:  <a href="https://fr.wikipedia.org/wiki/TypeScript"><wikipedia class="org">wikipedia.org</wikipedia></a></cite>
                        </section>


                        <!-- Modal footer -->
                        <footer class="modal-footer">
                            <h6>Ressources</h6>
                            <i class='fas fa-plus'></i>
                        </footer>
                    </div>

                </div>
            </div>
        </section>

        <!-- //////////////////////////////////////////////////////////////////////////// GIT /////// -->


        <section class="container_pako">
            <!-- The Modal -->
            <div class="modal fade" id="modal_git">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <header class="modal-header">
                            <img style="width: 128px;" src="images/git.png" alt="LOGO GIT">
                            <h4 class="modal-title" style="margin-top: 40px; margin-left: 40px; font-size: 32px;">GIT</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </header>

                        <!-- Modal body -->
                        <section>
                            <ul class="modal-body">
                                <li>
                                    <i class='fas fa-question' style='font-size:36px;margin-right: 15px;'></i>
                                    Logiciel de gestion de versions décentralisé</li>
                                <hr>
                                <li>
                                    <blockquote>C'est un système de contrôle de version distribué gratuitement et open source, conçu pour tout gérer, des petits aux très grands projets, avec rapidité et efficacité.</blockquote>
                                </li>
                                <li>
                                    <blockquote>Git est facile à apprendre et a une petite empreinte avec des performances rapides. Il surpasse les outils SCM comme Subversion, CVS, Perforce et Clearcase avec des fonctionnalités telles que des branchements locaux bon marché, des zones de transit pratiques et des flux de travail multiples. </blockquote>
                                </li>
                            </ul>
                            <img id="anatomie" src="https://media.prod.mdn.mozit.cloud/attachments/2019/04/30/16605/062cb4fe603e903b23cb074b25623a67/anatomie-element-html.png" alt="https://media.prod.mdn.mozit.cloud/attachments/2019/04/30/16605/062cb4fe603e903b23cb074b25623a67/anatomie-element-html.png" >
                            <cite>source:  <a href="https://git-scm.com/">git-scm.com</a></cite>
                        </section>


                        <!-- Modal footer -->
                        <footer class="modal-footer">
                            <h6>Ressources</h6>
                            <i class='fas fa-plus'></i>
                        </footer>
                    </div>

                </div>
            </div>
        </section>

        <!-- //////////////////////////////////////////////////////////////////////////// FrameWork /////// -->


        <section class="container_pako">
            <!-- The Modal -->
            <div class="modal fade" id="modal_react">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <header class="modal-header">
                            <h4 class="modal-title"> <img style="width: 128px;" src="images/react.svg" alt="LOGO GIT">ReactJS</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </header>

                        <!-- Modal body -->
                        <section>
                            <ul class="modal-body">
                                <li>
                                    <i class='fas fa-question' style='font-size:36px;margin-right: 15px;'></i>
                                    Bibliothèque JavaScript pour créer des interfaces utilisateurs intéractives</li>
                                <hr>
                                <li>
                                    <blockquote>
                                        <p>Développée par Facebook depuis 2013.</p>
                                        <p>Le but principal de cette bibliothèque est de faciliter la création d'application web monopage, via la création de composants dépendant d'un état et générant une page (ou portion) HTML à chaque changement d'état.</p>
                                    </blockquote>
                                </li>
                                <li>
                                    <blockquote>React peut aussi être utilisé côté serveur avec Node, ou pour créer des applications mobiles grâce à React Native.</blockquote>
                                </li>
                            </ul>
                            <cite>source:  <a href="https://fr.wikipedia.org/wiki/React_(JavaScript)">wikipedia.org</a></cite>
                        </section>


                        <!-- Modal footer -->
                        <footer class="modal-footer">
                            <h6>Ressources</h6>
                            <i class='fas fa-plus'></i>
                        </footer>
                    </div>

                </div>
            </div>
        </section>


        <section class="container_pako">
            <!-- The Modal -->
            <div class="modal fade" id="modal_angular">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <header class="modal-header">
                            <h4 class="modal-title"> <img style="width: 128px;" src="images/angular.png" alt="LOGO ANGULAR">Angular</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </header>

                        <!-- Modal body -->
                        <section>
                            <ul class="modal-body">
                                <li>
                                    <i class='fas fa-question' style='font-size:36px;margin-right: 15px;'></i>
                                    Cadriciel côté client, open source, basé sur TypeScript</li>
                                <hr>
                                <li>
                                    <blockquote>
                                        <p>Co-dirigé par l'équipe du projet « Angular » chez Google et par une communauté de particuliers et de sociétés depuis 2016.</p>
                                    </blockquote>
                                </li>
                                <li>
                                    <blockquote>
                                        <p>Utilisez les capacités modernes de la plate-forme Web pour offrir des expériences semblables à des applications.</p>
                                        <p>Haute performance, hors ligne, et zéro étape d’installation.</p>
                                    </blockquote>
                                </li>
                            </ul>
                            <cite>source:  <a href="https://fr.wikipedia.org/wiki/React_(JavaScript)">wikipedia.org</a></cite>
                        </section>


                        <!-- Modal footer -->
                        <footer class="modal-footer">
                            <h6>Ressources</h6>
                            <i class='fas fa-plus'></i>
                        </footer>
                    </div>

                </div>
            </div>
        </section>

        <section class="container_pako">
            <!-- The Modal -->
            <div class="modal fade" id="modal_vue">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <header class="modal-header">
                            <h4 class="modal-title"> <img style="width: 128px;" src="images/vue.png" alt="LOGO Vue">Vue</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </header>

                        <!-- Modal body -->
                        <section>
                            <ul class="modal-body">
                                <li>
                                    <i class='fas fa-question' style='font-size:36px;margin-right: 15px;'></i>
                                    Framework JavaScript open-source utilisé pour construire des interfaces utilisateur</li>
                                <hr>
                                <li>
                                    <blockquote>
                                        <p>La bibliothèque est notamment utilisée par Adobe, Alibaba et Gitlab</p>
                                    </blockquote>
                                </li>
                                <li>
                                    <blockquote>
                                        <p>Vue a été créé par Evan You après avoir travaillé pour Google en utilisant AngularJS dans plusieurs projets</p>
                                    </blockquote>
                                </li>
                            </ul>
                            <cite>source:  <a href="https://fr.wikipedia.org/wiki/Vue.js">wikipedia.org</a></cite>
                        </section>


                        <!-- Modal footer -->
                        <footer class="modal-footer">
                            <h6>Ressources</h6>
                            <i class='fas fa-plus'></i>
                        </footer>
                    </div>

                </div>
            </div>
        </section>

    </section>
</main>

<!-- Footer -->
<footer class="page-footer font-small">

    <!-- Footer Links -->
    <div class="container">

        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5 mb-3">

            <!-- Grid column -->
            <div class="col-lg-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#!">À PROPOS</a>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="ressources.html">RESSOURCES</a>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="infos.html">CONTACT</a>
                </h6>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->
        <hr class="rgba-white-light" style="margin: 0 15%;">

        <!-- Grid row-->
        <div class="row d-flex text-center justify-content-center mb-lg-0 mb-4">

            <!-- Grid column -->
            <div class="col-lg-8 col-12 mt-5">
                <p style="line-height: 1.7rem">Parce que c'est chiant de tout chercher par soi-même</p>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->
        <hr class="clearfix d-lg-none rgba-white-light" style="margin: 10% 15% 5%;">

    </div>
    <!-- Grid row-->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright :
        <a href="index.html"> How To Learn To Code</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="script.js"></script>

</body>
</html>