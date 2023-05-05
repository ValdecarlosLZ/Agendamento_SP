<?php
include "conexao.php";

$buscar_cadastro = "SELECT * FROM Dados_pessoais WHERE iddados_pessoais = 10";

$stmt = $conexao->prepare($buscar_cadastro);

$stmt->execute();

$receber_cadastro = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($receber_cadastro);


include "Cadastro_efetuado.php"
?>
