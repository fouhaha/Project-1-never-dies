<!DOCTYPE html>

<?php

$pageTitle = 'infos';
include '_header.php';

?>





</header>

<main>

    <!-- Votre Contenu -->

    <section class="infos-section">
        <h2 class="mt-5">Contactez-nous</h2>
        <h3>Nos valeurs</h3>
        <p>Nous sommes une équipe de développeurs en herbe.
            Tous réunis par la passion du code, nous avons décidé de fournir une aide que nous espérons précieuse pour tous ceux qui souhaitent relever le défi et entrer dans le monde du développement.</p>
        <hr class="m-4">
    </section>
    <section>
        <form class="infos-form">
            <input type="text" placeholder="Nom :" required>
            <input type="email" placeholder="@ :" required>
            <select class=infos-select id="infos-motif" required>
                <option value="" disabled selected hidden>Une question/remarque?</option>
                <option value="métier dev.">Plus de renseignements sur le métier de dev.</option>
                <option value="formation">Question sur les formations, les organismes?</option>
                <option value="suggestion">Suggestion concernant le site</option>
                <option value="contact">Entrer en contact avec l'équipe</option>
            </select>
            <textarea label="Message" placeholder="Message :" rows="5"></textarea>
            <input type="submit" value="Envoyer !" class="button">
        </form>
    </section>

</main>





<?php

include '_footer.html';

?>