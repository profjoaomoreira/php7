<?php

$conn = new PDO("mysql:host=localhost;dbname=teste","root","");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id =10;

$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "dados excluidos com sucesso."

?>