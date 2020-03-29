<?php
$pageTitle = 'infos';
$nameErr = $mailErr = $topicErr = $messageErr = $actionPage = "";
$userName = $userMail = $topic = $userMessage = "";
$selectOption = ["\"\" disabled selected hidden>Une question/remarque?",
                    "\"le métier de dev.\">Plus de renseignements sur le métier de dev.",
                    "\"les formations\">Question sur les formations, les organismes?",
                    "\"une suggestion\">Suggestion concernant le site",
                    "\"une prise de contact avec l'équipe\">Entrer en contact avec l'équipe"];

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $userName = trim($_POST["userName"]);
    $userMail = trim($_POST["userMail"]);
    $userMessage = trim($_POST["userMessage"]);
    $topic = $_POST["topic"];
    if (empty($userName)) {
        $nameErr = "!! champ oblibatoire !!";
    }

    if (empty($_POST["userMail"])) {
        $mailErr = "!! champ oblibatoire !!";
    }

    if (!filter_var($_POST["userMail"], FILTER_VALIDATE_EMAIL)) {
        $mailErr = "!! format adresse mail non valide !!";
    }

    if (empty($_POST["topic"])) {
        $topicErr = "!! champ oblibatoire !!";
    }

    if (empty($_POST["userMessage"])) {
        $messageErr = "!! champ oblibatoire !!";
    }

    if ($nameErr != "" OR $mailErr != "" OR $topicErr != "" OR $messageErr != "") {
        $actionPage = "infos.php";
    } else {
        header('location: thanks.php?userName=' . $userName . '&topic=' . $topic . '&userMail=' . $userMail . '&userMessage=' . $userMessage);
    }
}

require_once '_header.php';
?>

</header>

<main>

    <section class="infos-section">
        <h2 class="mt-5">Contactez-nous</h2>
        <h3>Nos valeurs</h3>
        <p>Nous sommes une équipe de développeurs en herbe.
            Tous réunis par la passion du code, nous avons décidé de fournir une aide que nous espérons précieuse pour tous ceux qui souhaitent relever le défi et entrer dans le monde du développement.</p>
        <hr class="m-4">
    </section>
    <section>
        <form class="infos-form" method="POST" action="<?php echo $actionPage; ?>">
            <input type="text" placeholder="Nom :" name="userName" required>
            <input type="email" placeholder="@ :" name="userMail" required>
            <select class=infos-select id="infos-motif" name="topic" required>
                <?php
                foreach ($selectOption as $optionChoice) {
                    echo ("<option value=$optionChoice</option>");
                }
                ?>
            </select>
            <textarea label="Message" placeholder="Message :" rows="5" name="userMessage"></textarea>
            <input type="submit" value="Envoyer !" class="button">
        </form>
    </section>

</main>

<?php
require_once '_footer.php';
?>