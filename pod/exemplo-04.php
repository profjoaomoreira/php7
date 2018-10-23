<?php

$conn = new PDO("mysql:host=localhost;dbname=teste","root","");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "alana";
$password = "querte";
$id =2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "dados alterados ok!"

?>