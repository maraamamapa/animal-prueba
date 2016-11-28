<?php
class Animal{
	public $tipo;
	public $numPatas;
public function __construct($tipo,$numPatas){
			
	$this->tipo = $tipo;
	$this->numPatas = $numPatas;
	
}
public function getTipo(){
	 return $this->tipo;
}
public function getNumPatas(){
	return $this->numPatas;
}
public function setTipo($tipo){
	$this->tipo=$tipo;
}
public function setNumPatas($numPatas){
	$this->numPatas=$numPatas;
}

}


