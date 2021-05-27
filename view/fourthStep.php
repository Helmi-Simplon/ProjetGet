<!-- Etape 4 : A afficher uniquement si "non" a été répondu à l\'étape 3 -->
<p>Votre problème n'a pas été résolu.</p>
<p>Pour être rappelé, entrez votre numéro de téléphone dans le clavier virtuel et validez :</p>
<!-- Coder ici un clavier numérique permettant de saisir le numéro de téléphone -->

<div class="row">
    <?php
    $tab = array();
    for ($x = 0; $x < 10; $x++) {

        if ($x < 5) {
    ?>
            <div class="thumbnail">
                <a href="?step=4&result=<?= ($_GET["result"]) ?>&btn=<?= $btn . $x ?>" role="button" class="btn btn-secondary"><?= $x ?></a>
            </div>
        <?php             }
        if ($x >= 5) {
        ?> <div class="thumbnail">
                <a href="?step=4&result=<?= ($_GET["result"]) . '&btn=' . $btn . $x ?>" role="button" class="btn btn-secondary"><?= $x ?></a>
            </div>
    <?php            }
    }
    ?>
</div>

<!-- Afficher ici le numéro de téléphone qui s\'affiche au fur et à mesure de la saisie-->
<?php if (!preg_match('#^0[6-7]{1}\d{8}$#', $tab[] = $btn)) {
?>
    <p>Votre numéro : <?php echo ($tab[] = $btn) ?> &#10060;</p>
    <button class="btn btn-danger" disabled>Valider</button>

<?php        } else {
?>
    <p>Votre numéro : <?= ($tab[] = $btn) ?> &#9989;</p>
    <a href="?step=4bis&result=<?= ($_GET["result"]) ?>&btn=<?= $btn ?>" role="button" class="btn btn-success">Valider</a> <!-- Validation du numéro de téléphone -->

<?php        }

?> <a href="?step=4&result=<?= ($_GET["result"]) ?>" role="button" class="btn btn-warning">Réinitialiser</a>
<a href="?step=4&result=<?= ($_GET["result"]) ?>&btn=<?= substr($_GET["btn"], 0, -1) ?>" role="button" class="btn btn-info">Corriger</a><br><br>
<a href="?step=5&result=<?= ($_GET["result"]) ?>" role="button" class="btn btn-danger text-center">Je ne souhaiterais pas être rappelé(e)</a>