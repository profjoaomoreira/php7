<?php

$conn = new PDO("mysql:host=localhost;dbname=teste","root","");

$conn-> beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id =1;

$stmt->bindParam(":ID",$id);

$stmt->execute(array($id));
//$conn->rollback();
$conn->commit();

echo "Delete ok!"

?>