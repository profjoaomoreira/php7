<?php
$conn = new PDO("mysql:host=localhost;dbname=teste","root","");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "jose";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "inserido ok!"

?>