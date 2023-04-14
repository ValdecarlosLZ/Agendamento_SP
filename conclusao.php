<?php

if (!isset($_SESSION)) {
    session_start();
}
$name = $_SESSION['name'];
$last_name = $_SESSION['last_name'];
$email = $_SESSION['email'];
$cpf = $_SESSION['cpf'];
$rg = $_SESSION['rg'];
$tempo = $_SESSION['tempo'];
$quarto1 = $_SESSION['quarto1'];
$QT1 = $_SESSION['QT1'];
$quarto2 = $_SESSION['quarto2'];
$QT2 = $_SESSION['QT2'];
$quarto3 = $_SESSION['quarto3'];
$QT3 = $_SESSION['QT3'];
$conclusao = $_SESSION['conclusao'];


if ($quarto1 = true) {
    echo $name;
    echo $last_name;
    echo $email;
    echo $cpf;
    echo $rg;
    echo $tempo;
    echo $conclusao;
}
if ($quarto2 = true) {
    echo $name;
    echo $last_name;
    echo $email;
    echo $cpf;
    echo $rg;
    echo $tempo;
    echo $conclusao;
}
if ($quarto3 = true) {
    echo $name;
    echo $last_name;
    echo $email;
    echo $cpf;
    echo $rg;
    echo $tempo;
    echo $conclusao;
}

if (isset($_GET["sair"])) {
    unset($_SESSION["sessao_iniciada"]);
    header("Location: index.html");
}
include "Cadastro_efetuado.php";
?>