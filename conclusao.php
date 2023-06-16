<?php
include "conexao.php";

 
 $buscar_cadastro = "SELECT * FROM Dados_pessoais ORDER BY iddados_pessoais DESC LIMIT 1";

$stmt = $conexao->prepare($buscar_cadastro);

if ($result->num_rows > 0) {
   
    $row = $result->fetch_assoc();}

$stmt->execute();

$receber_cadastro = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($receber_cadastro);



?>
