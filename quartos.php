<?php
include "conexao.php";

$buscar_cadastro = "SELECT * FROM quartos";

$stmt = $conexao->prepare($buscar_cadastro);

$stmt->execute();

$receber_cadastro = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
