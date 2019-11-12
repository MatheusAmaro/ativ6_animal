<?php

abstract class Animal
{
	protected $peso;
	protected $idade;
	protected $membros;


	public function setPeso($peso){
		$this->peso = $peso;
	}

	public function getPeso(){
		return $this->peso;
	}


	public function setIdade($idade){
		$this->idade = $idade;
	}

	public function getIdade(){
		return $this->idade;
	}


	public function setMembro($membros){
		$this->membros = $membros;
		
	}

	public function getMembro(){
		return $this->membros;
	}



    abstract function locomover();
    
    abstract function alimentar();
    
    abstract function emitirSom();


}

?>
