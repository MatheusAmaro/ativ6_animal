<?php
require_once "Animal.php";

class Mamifero extends Animal{
	private $corPelo;


	public function locomover(){
    echo "andando";
	}

    public function alimentar(){
    echo "comendo";
    }
   
    public function emitirSom(){
    echo "sei lá, grunindo";
    }


}

  ?>
