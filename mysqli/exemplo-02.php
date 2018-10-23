<?php

$conn = new mysqli("localhost","root","","teste");
if($conn->connect_error){
	echo "Error:" . $conn->connect_error;	
}
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

/* while ($row = $result->fetch_array()){ //esse comando mostra os parametros com os rótulos*/
while ($row = $result->fetch_array(MYSQLI_ASSOC)){

	var_dump($row);
}

?>