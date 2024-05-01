<?php

class Ape extends Animal {
    public function __construct($name) {
        parent::__construct($name); // Memanggil constructor dari parent class
        $this->legs = 2; // Ubah jumlah kaki menjadi 2
    }

    function yell() {
        echo "Auooo";
    }
}