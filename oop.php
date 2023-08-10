<?php

// membuat class
class Kalkulator{

    public float $dayaBatrai; // membuat attribute

    public function __construct(float $dayaBatrai) // constructor
    {
        $this->dayaBatrai = $dayaBatrai;      
    }

    public function tambah(int $a, int $b){ // membuat method
        return $a + $b;
    }
}

class KalkulatorTambah extends Kalkulator{ // membuat child class

}

$kalkulator = new KalkulatorTambah(99.9); // membuat object
//echo $kalkulator->dayaBatrai;
echo $kalkulator->tambah(5, 10);
?>