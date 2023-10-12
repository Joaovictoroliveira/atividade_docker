<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

if (!empty($data)) {

    if ($data["type"] === "create") {
        $nome = $data["nome"];
        $capital = $data["capital"];

        $query = ("INSERT INTO pais (nome, capital) VALUES (?, ?)");
        $statement = $conn->prepare($query);
        $statement->bind_param("ss", $nome, $capital);

        try {
            $statement->execute();
            $_SESSION["msg"] = "Pais adicionado com sucesso.";
        }catch (Exception $e) {
            echo "$e";
        }
    }else if ($data["type"] === "edit") {
        $nome = $data["nome"];
        $capital = $data["capital"];
        $id = $data["id"];

        $query = "UPDATE pais SET nome = ?, capital = ? WHERE id = ?";
        $statement = $conn->prepare($query);
        $statement->bind_param("ssi", $nome, $capital, $id);

        try {
            $statement->execute();
            $_SESSION["msg"] = "Pais editado com sucesso.";
        }catch (Exception $e) {
            echo "$e";
        }
    }else if ($data["type"] === "delete") {
        $id = $data["id"];

        $query = "DELETE FROM pais WHERE id = ?";
        $statement = $conn->prepare($query);
        $statement->bind_param("i", $id);

        try {
            $statement->execute();
            $_SESSION["msg"] = "Pais excluído com sucesso.";
        }catch (Exception $e) {
            echo "e";
        }
    }
}else {
    $id;

    if (!empty($_GET)) {
        $id = $_GET["id"];
    }

    if (!empty($id)) {
        $query = "SELECT * FROM pais WHERE id = ?";
        $statement = $conn->prepare($query);
        $statement->bind_param("i", $id);
        $statement->execute();

        $result = $statement->get_result();
        $paises = $result->fetch_row();
    }else {
        $paises = [];
        $query = "SELECT * FROM pais";
        $statement = $conn->prepare($query);
        $statement->execute();

        $result = $statement->get_result();
        $paises = $result->fetch_all();
    }
}
 
$statement->close();