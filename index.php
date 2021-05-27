<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- meta référencement -->
    <meta name="description" content="Web Dev PHP : Conditions, requêtes GET">
    <meta name="author" content="Camile Ghastine">

    <title>Questionnaire de satisfaction du service client Amazin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <div class="container">

        <h1 class="mb-5">AMAZIN</h1>

        <h2>Questionnaire de satisfaction</h2>
        <?php
        if ($_GET == null) {
            include("./view/nullStep.php");
        } elseif (isset($_GET["step"]) && $_GET["step"] == 1) {
            include("./view/firstStep.php");
        }
        if (isset($_GET["step"]) && $_GET["step"] == 2) {
            include("./view/secondStep.php");
        }
        if (isset($_GET["step"]) && $_GET["step"] == 3) {
            include("./view/thirdStep.php");
        }
        if (isset($_GET["step"]) && $_GET["step"] === '4') {
            $btn = isset($_GET['btn']) ? $_GET['btn'] : NULL;
            include("./view/fourthStep.php");
        }
        if (isset($_GET["step"]) && $_GET["step"] === '4bis') {
            include("./view/fourthStepbis.php");
        }
        if (isset($_GET["step"]) && $_GET["step"] == 5) {
            $btn = isset($_GET['btn']) ? $_GET['btn'] : NULL;
            include("./view/fifthStep.php");
        }
        ?>

    </div>

</body>

</html>