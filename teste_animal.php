<?php
require_once "Mamifero.php";
require_once "Ave.php";
require_once "Peixe.php";
require_once "Reptil.php";
require_once "Animal.php";

$animal1 = new Mamifero();
$animal1-> setPeso(15);
$animal1-> setIdade(2);
$animal1-> setMembro(4);

echo "Esse animal pesa" . $animal1->getPeso() . ", ele(a) também tem " . $animal1->getIdade() . " anos e possui" . $animal1->getMembro() . " membros.";
echo "<br> <br>";

$animal2 = new Ave();
$animal2-> setPeso(15);
$animal2-> setIdade(3);
$animal2-> setMembro(2);

echo "Esse animal pesa" . $animal2->getPeso() . ", ele(a) também tem " . $animal2->getIdade() . " anos e possui" . $animal2->getMembro() . " membros.";
echo "<br> <br>";

$animal3 = new Peixe();
$animal3-> setPeso(5);
$animal3-> setIdade(1);
$animal3-> setMembro(5);

echo "Esse animal pesa" . $animal3->getPeso() . ", ele(a) também tem " . $animal3->getIdade() . " anos e possui" . $animal3->getMembro() . " membros.";
echo "<br> <br>";

$animal4 = new Reptil();
$animal4-> setPeso(2);
$animal4-> setIdade(5);
$animal4-> setMembro(6);

echo "Esse animal pesa" . $animal4->getPeso() . ", ele(a) também tem " . $animal4->getIdade() . " anos e possui" . $animal4->getMembro() . " membros.";
echo "<br> <br>";



?>
