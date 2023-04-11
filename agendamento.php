<?php
session_start();

//Leitura de dados

$name = $_POST['name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$tempo = $_POST['tempo'];


if(($email != "") && ($cpf >= 11) && ($rg >= 6)){
    header('Location: cadastro2.html');
}else{ 
header('Location: index.html?Erro');
}
$_SESSION ['name'] = $name;
$_SESSION ['last_name'] = $last_name;
$_SESSION ['email'] = $email;
$_SESSION ['cpf'] = $cpf;
$_SESSION ['rg'] = $rg;
$_SESSION ['tempo'] = $tempo;


?>

