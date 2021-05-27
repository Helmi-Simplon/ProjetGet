
        <?php
        if ($_GET == null) {
            include("view/nullStep.php");
        } elseif (isset($_GET["step"]) && $_GET["step"] == 1) {
            include("view/firstStep.php");
        }
        if (isset($_GET["step"]) && $_GET["step"] == 2) {
            include("view/secondStep.php");
        }
        if (isset($_GET["step"]) && $_GET["step"] == 3) {
            include("view/thirdStep.php");
        }
        if (isset($_GET["step"]) && $_GET["step"] === '4') {
            $btn = isset($_GET['btn']) ? $_GET['btn'] : NULL;
            include("view/fourthStep.php");
        }
        if (isset($_GET["step"]) && $_GET["step"] === '4bis') {
            include("view/fourthStepbis.php");
        }
        if (isset($_GET["step"]) && $_GET["step"] == 5) {
            $btn = isset($_GET['btn']) ? $_GET['btn'] : NULL;
            include("view/fifthStep.php");
        }
        ?>
