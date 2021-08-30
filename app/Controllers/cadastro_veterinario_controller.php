<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$banco = new PDO("mysql:host=localhost;dbname=projeto", "root", "");
$nome = $_GET["nome"];
$cpf = $_GET["cpf"];
$crmv = $_GET["crmv"];
$usuario = $_GET["usuario"];
$email = $_GET["email"];
$password = $_GET["password"];
$stmt = $banco->prepare("INSERT INTO usuario (nome, cpf, crmv, usuario, email, password) VALUES(?, ?, ?, ?, ?, ?)");
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $cpf);
$stmt->bindParam(3, $crmv);
$stmt->bindParam(4, $usuario);
$stmt->bindParam(5, $email);
$stmt->bindParam(6, md5($password));
$stmt->execute();
header("location: tela_cadastro.php");
?>