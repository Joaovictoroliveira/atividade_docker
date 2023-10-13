<?php
include_once("templates/header.php");
?>

<div class="container">
    <?php include_once("templates/backbtn.php"); ?>

    <h1 id="main-title">Editar País</h1>

    <form action="<?= $BASE_URL ?>config/process.php" id="create-form" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $paises["id"] ?>">

        <div class="form-group">
            <label for="nome">Nome do País:</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome do país" value="<?= $paises["nome"] ?>" required>
        </div>

        <div class="form-group">
            <label for="capital">Capital do País:</label>
            <input type="text" name="capital" id="capital" class="form-control" placeholder="Digite a capital do país" value="<?= $paises["capital"] ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>