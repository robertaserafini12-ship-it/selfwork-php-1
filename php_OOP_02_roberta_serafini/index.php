<?php

// Classe Base
abstract class Vertebrate {
    public function __construct() {
        $this->printVertebrate();
    }

    protected function printVertebrate() {
        echo "Sono un animale Vertebrato\n";
    }
}

// Classe Intermedia
abstract class ColdBlooded extends Vertebrate {
    public function __construct() {
        parent::__construct();
        $this->printColdBlooded();
    }

    protected function printColdBlooded() {
        echo "Sono un animale a Sangue Freddo\n";
    }
}

// Classe Finale
class Fish extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        $this->printFish();
    }

    protected function printFish() {
        echo "Splash!\n";
    }
}

// Esecuzione
$magikarp = new Fish();