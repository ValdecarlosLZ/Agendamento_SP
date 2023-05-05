<?php

$host = "localhost";
$dbNome = "sonho_pantaneiro";
$admin = "root";
$senha = "";
// if(($email != "") && ($cpf >= 11) && ($rg >= 6)){
$conexao = new PDO("mysql:host=$host:3307;dbname=$dbNome", $admin, $senha);

?>
