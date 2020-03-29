<?php
$pageTitle = 'thanks';

require_once '_header.php';
?>

</header>

<main>
    <section class="thanks-section">
        <h2>Merci <?php echo $_GET['userName'] ?> pour le message concernant : <br><small><?php echo $_GET['topic'] ?></small></h2>
        <p>L'équipe vous recontactera très bientôt, à l'adresses <u><?php echo $_GET['userMail'] ?></u>, pour traiter du sujet :</p>
        <textarea class="thanks-textarea" disabled><?php echo $_GET['userMessage'] ?></textarea>
        <a href="index.php" class="thanks-button">Retour à l'acceuil?</a>
    </section>
</main>

<?php
require_once '_footer.php';
?>