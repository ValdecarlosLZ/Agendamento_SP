<?php
session_start();

$_SESSION['sessao_iniciada'] = $name;

if (!isset($_SESSION["sessao_iniciada"])){
    header("Location: Cadastro_efetuado.html");
}

if (isset($_GET["sair"])){
    unset($_SESSION["sessao_iniciada"]);
    header("Location: index.html");
}

$name = $_GET['name'];
$last_name = $_GET['last_name'];
$email = $_GET['email'];
$cpf = $_GET['cpf'];
$rg = $_GET['rg'];
$inicio = $_GET['inicio'];
$fim = $_GET['fim'];
$quarto = $_GET['quarto'];
$pessoa = $_GET['pessoa'];
?>
