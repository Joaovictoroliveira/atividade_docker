<?php
include_once("templates/header.php");
?>

<div class="container">
    <?php include_once("templates/backbtn.php"); ?>

    <h1 id="main-title">Adicionar País</h1>

    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">

        <div class="form-group">
            <label for="nome">Nome do País:</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome do país" required>
        </div>

        <div class="form-group">
            <label for="capital">Capital do País:</label>
            <input type="text" name="capital" id="capital" class="form-control" placeholder="Digite a capital do páis" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<?php
include_once("templates/footer.php");
?>