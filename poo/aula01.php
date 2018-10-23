<?php

class Pessoa {
public $nome; //atributo
public function falar(){ //metodo

return "o meu nome é" .$this->nome;

	}

}
$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();
?>