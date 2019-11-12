<?php
require_once "Animal.php";
class Reptil extends Animal{
	private $corEscama;


	public function locomover(){
    echo "rastejando ou andando";
	}

    public function alimentar(){
    echo "comendo";
    }
   
    public function emitirSom(){
    echo "ssssssssss";
    }


}

  ?>
