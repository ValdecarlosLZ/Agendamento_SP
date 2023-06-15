<?php
include "conexao.php";

$buscar_cadastro = "SELECT * FROM Dados_pessoais ORDER BY id DESC LIMIT 1";

$stmt = $conexao->prepare($buscar_cadastro);

$stmt->execute();

$receber_cadastro = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($receber_cadastro);



?>
