<?php

require_once 'Rettangolo.php';

$rettangolo = new Rettangolo(4, 3);

echo "Base: 4, Altezza: 3<br>";
echo "Area: " . $rettangolo->getArea() . "<br>";
echo "Perimetro: " . $rettangolo->getPerimetro() . "<br>";
echo "Diagonale: " . $rettangolo->getDiagonale() . "<br>";