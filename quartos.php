<?php
session_start();

$quarto1 = $_POST ['quarto1'];
$quarto2 = $_POST ['quarto2'];
$quarto3 = $_POST ['quarto3'];
$QT1 = $_POST['QT1'];
$QT2 = $_POST['QT2'];
$QT3 = $_POST['QT3'];
$conclusao = $_POST['conclusao'];

if ($quarto1 = true) {
    $conclusão = 100 * $QT1;
    header('Location: Cadastro_efetuado.html');
    
}
if ($quarto2 = true){
    $conclusão = 150 * $QT2;
    header('Location: Cadastro_efetuado.html');
}
if($quarto3 = true){
    $conclusao = 200 * $QT3;
    header('Location: Cadastro_efetuado.html');
    
}

$_SESSION ['quarto1'] = $quarto1;
$_SESSION ['quarto2'] = $quarto2;
$_SESSION ['quarto3'] = $quarto3;
$_SESSION ['QT1'] = $QT1;
$_SESSION ['QT2'] = $QT2;
$_SESSION ['QT3'] = $QT3;
$_SESSION ['conclusao'] = $conclusao;


?>
