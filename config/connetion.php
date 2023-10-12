<?php

$host = "db-atividade";
$user = "root";
$password = "123@docker";
$db = "paises";

try {
    $conn = new mysqli($host, $user, $password, $db);
}catch (Exception $e) {
    echo "$e";
}
