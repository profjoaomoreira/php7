<?php

$conn = new PDO("mysql: dbname=teste;host=localhost","root","");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row){
	
	foreach($row as $key => $value){
		
		        echo $value;		
		
	}
	echo "================================<br>";
}

?>