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
$pessoa = $_POST['pessoa'];

if(($email != "") && ($cpf >= 11) && ($rg >= 6)){
    header('Location: cadastro2.html');
}else{ 
header('Location: index.html?Erro');
}
$_SESSION ['session_iniciada'] = $name;

?>

