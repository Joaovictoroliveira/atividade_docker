<?php
    include_once("templates/header.php");
?>

    <div class="container">
        <?php if (isset($printMsg) && $printMsg != ""): ?>
            <p id="msg"><?= $printMsg ?></p>
        <?php endif; ?>
    

        <h1 id="main-title">Países e capitais</h1>
        <?php if (count($paises) > 0): ?>
            <table class="table" id="paises-table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Capital</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($paises as $pais): ?>
                        <tr>
                            <td scope="row" class="col-id"><?= $pais["id"] ?></td>
                            <td scope="row"><?= $pais["nome"] ?></td>
                            <td scope="row"><?= $pais["capital"] ?></td>
                            <td class="actions">
                                <a href="<?= $BASE_URL ?>show.php?id=<?= $pais["id"] ?>">
                                    <i class="bi bi-eye-fill"></i>
                                </a>

                                <a href="<?= $BASE_URL ?>edit.php?id=<?= $pais["id"] ?>">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>

                                <form action="<?= $BASE_URL ?>config/process.php" class="delete-form" method="POST">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="hidden" name="id" value="<?= $pais["id"] ?>">
                                    <button type="submit" class="delete-btn">
                                        <i class="bi bi-archive-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p id="empty-list-text">
                Ainda não há países cadastrados,
                <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>
            </p>
        <?php endif; ?>
    </div>
<?php
include_once("templates/footer.php");
?>