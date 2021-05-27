<!-- Etape finale : A afficher si "oui" a été répondu à la question 3 ou si l\'étape 4bis a été résolue -->
<p class="mt-5">Merci pour votre notation :
    <?php

    for ($i = 0; $i < $_GET["result"] && $i < 5; $i++) {
        echo '&#11088';
    }
    for ($i = 0; $i < (5 - $_GET["result"]) && $i < 5; $i++) {
        echo '&#9899';
    }

    ?>
</p> <!-- le nombre d\'étoiles représente le nombre de points cumulés -->

<!-- Si un téléphone à été saisi, afficher "Vous serez rappelé très prochainement au #numéro de téléphone#" -->
<?php

if ($btn != null) { ?>
    <p style="box-shadow: 8px 8px 0px green;background-color:black; color:white;font-size:16pt; font-weight:bold;width:fit-content;height:40px;padding:5px">Le problème n'est pas résolu? Pas de panique! Vous serez rappelé très prochainement au : <?= $_GET["btn"] ?> </p>
<?php
}

?>
<p class="mt-5">
    <a href="?" role="button" class="btn btn-danger">Recommencer</a>
</p>