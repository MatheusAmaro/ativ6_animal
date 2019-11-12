<?php
require_once "Animal.php";
class Peixe extends Animal{
	private $corEscama;


	public function locomover(){
    echo "nadando";
	}

    public function alimentar(){
    echo "comendo";
    }
   
    public function emitirSom(){
    echo "olha não tenho a minima ideia de como é o barulho do peixe entonces blee";
    }

    public function soltarBolha(){
    echo "borbulando";
    }
}

  ?>
