<?php

$conn = new mysqli("localhost","root","","teste");
if($conn->connect_error){
	echo "Error:" . $conn->connect_error;	
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";
$stmt->execute();

$login = "root";
$pass = "534%$$#%#";
$stmt->execute();


$login = "joao";
$pass = "testando";
$stmt->execute();


echo "informações inseridas com sucesso";

?>