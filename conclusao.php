<?php
session_start();

$_SESSION['sessao_iniciada'] = $name;

if (!isset($_SESSION["sessao_iniciada"])) {
    header("Location: Cadastro_efetuado.html");
}

if (isset($_GET["sair"])) {
    unset($_SESSION["sessao_iniciada"]);
    header("Location: index.html");
}

if ($quarto1 = true) {
    $name = $_GET['name'];
    $last_name = $_GET['last_name'];
    $email = $_GET['email'];
    $cpf = $_GET['cpf'];
    $rg = $_GET['rg'];
    $inicio = $_GET['inicio'];
    $fim = $_GET['fim'];
    $pessoa = $_GET['pessoa'];
    $quarto1 = $_GET['quarto1'];
    $QT1 = $_GET['QT1'];
    $conclusao = $_GET['conclusao'];
}
if ($quarto2 = true) {
    $name = $_GET['name'];
    $last_name = $_GET['last_name'];
    $email = $_GET['email'];
    $cpf = $_GET['cpf'];
    $rg = $_GET['rg'];
    $inicio = $_GET['inicio'];
    $fim = $_GET['fim'];
    $pessoa = $_GET['pessoa'];
    $quarto2 = $_GET['quarto2'];
    $QT2 = $_GET['QT2'];
    $conclusao = $_GET['conclusao'];
}
if ($quarto3 = true) {
    $name = $_GET['name'];
    $last_name = $_GET['last_name'];
    $email = $_GET['email'];
    $cpf = $_GET['cpf'];
    $rg = $_GET['rg'];
    $inicio = $_GET['inicio'];
    $fim = $_GET['fim'];
    $pessoa = $_GET['pessoa'];
    $quarto3 = $_GET['quarto3'];
    $QT3 = $_GET['QT3'];
    $conclusao = $_GET['conclusao'];
}





?>