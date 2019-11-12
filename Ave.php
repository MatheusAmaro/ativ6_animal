<?php
require_once "Animal.php";
class Ave extends Animal{
	private $corPena;


	public function locomover(){
    echo "voando ou andando";
	}

    public function alimentar(){
    echo "comendo";
    }
   
    public function emitirSom(){
    echo "asobio sei la";
    }
    
    public function fazerNinho(){
    echo "contruinindo";
    }

}

  ?>
