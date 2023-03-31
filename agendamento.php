<?php
session_start();

//Leitura de dados

$name = $_POST['name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$inicio = $_POST['inicio'];
$fim = $_POST['fim'];
$quarto = $_POST['quarto'];
$pessoa = $_POST['pessoa'];

if(($email != "") && ($cpf != "") && ($rg != "")){
    header('Location: Cadastro_efetuado.html');
}else{ 
header('Location: index.html?Erro');
}

?>
