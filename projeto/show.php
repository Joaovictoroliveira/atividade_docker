<?php
include_once("templates/header.php");
?>

<div class="container" id="view-pais-container">
    <?php include_once("templates/backbtn.php"); ?>

    <h1 id="main-title"><?= $paises["nome"] ?></h1>

    <p class="bold">Capital:</p>
    <p><?= $paises["capital"] ?></p>
</div>

<?php
include_once("templates/footer.php");
?>