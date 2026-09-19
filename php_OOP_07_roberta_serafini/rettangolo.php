<?php

require_once 'Calculator.php';

class Rettangolo {
    use Calculator;

    private $b;
    private $h;

    public function __construct($b, $h) {
        $this->b = $b;
        $this->h = $h;
    }

    public function getArea() {
        return $this->mul($this->b, $this->h);
    }

    public function getPerimetro() {
        $doppioBase = $this->mul(2, $this->b);
        $doppioAltezza = $this->mul(2, $this->h);
        return $this->sum($doppioBase, $doppioAltezza);
    }

    public function getDiagonale() {
        $bQuad = $this->mul($this->b, $this->b);
        $hQuad = $this->mul($this->h, $this->h);
        $somma = $this->sum($hQuad, $bQuad);
        return $this->sqr($somma);
    }
}