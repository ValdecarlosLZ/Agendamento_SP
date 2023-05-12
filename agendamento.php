<?php
session_start();

include "conexao.php";


//Leitura de dados

$name = $_POST['name'];

$last_name = $_POST['last_name'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];


$nome_completo = $name." ".$last_name;


$sql = "INSERT INTO Dados_pessoais (Nome_completo,Email,Cpf,Rg) VALUES (:nome_completo,:email,:cpf,:rg)";

$stmt = $conexao->prepare($sql);

$stmt->bindValue(':nome_completo',$nome_completo);
$stmt->bindValue(':email',$email);
$stmt->bindValue(':cpf',$cpf);
$stmt->bindValue(':rg',$rg);


$stmt->execute();

    header('Location: cadastro2.php');
    exit;
    ?>
