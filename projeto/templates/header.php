<?php

include_once("config/url.php");
include_once("config/process.php");

if (isset($_SESSION["msg"])) {
    $printMsg = $_SESSION["msg"];
    $_SESSION["msg"] = "";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Países e capitais</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <div class="navbar-nav">
            <a href="<?= $BASE_URL ?>index.php" id="home-link" class="nav-link active">Países</a>
            <a href="<?= $BASE_URL ?>create.php" class="nav-link active">Adicionar país</a>
          </div>
        </nav>
    </header>