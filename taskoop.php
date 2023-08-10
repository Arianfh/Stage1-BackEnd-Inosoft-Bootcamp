<?php

class BangunDatar{
    
    public function name()
    {
        // mencetak nama bangun datar
    }

    public function description()
    {
        // mencetak parameter bangun datar
    }

    public function area()
    {
        // menghitung luas bangun datar
    }

    public function circumference()
    {
        // menghitung keliling bangun datar
    }

    public function enlarge($scale)
    {
        // memperbesar bangun datar sesuai scale
    }

    public function shrink($scale)
    {
        // memperkecil bangun datar sesuai scale
    }
}

class Lingkaran extends BangunDatar{
    
    private $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function name()
    {
        return "Lingkaran";
    }

    public function description()
    {
        return "dengan jari-jari ".$this->jari_jari;
    }

    public function area()
    {
        return round(M_PI * $this->jari_jari * $this->jari_jari, 2);
    }

    public function circumference()
    {
        return round(2 * M_PI * $this->jari_jari, 2);
    }

    public function enlarge($scale)
    {
        $this->jari_jari *= $scale;
    }

    public function shrink($scale)
    {
        $this->jari_jari /= $scale;
    }
}

class Persegi extends BangunDatar{
    
    private $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function name()
    {
        return "Persegi";
    }

    public function description()
    {
        return "dengan panjang sisi ".$this->sisi;
    }

    public function area()
    {
        return $this->sisi * $this->sisi;
    }

    public function circumference()
    {
        return 4 * $this->sisi;
    }

    public function enlarge($scale)
    {
        $this->sisi *= $scale;
    }

    public function shrink($scale)
    {
        $this->sisi /= $scale;
    }
}

class PersegiPanjang extends BangunDatar{
    
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function name()
    {
        return "Persegi Panjang";
    }

    public function description()
    {
        return "dengan panjang ".$this->panjang." serta lebar ".$this->lebar;
    }

    public function area()
    {
        return $this->panjang * $this->lebar;
    }

    public function circumference()
    {
        return 2 * ($this->panjang + $this->lebar);
    }

    public function enlarge($scale)
    {
        $this->panjang *= $scale;
        $this->lebar *= $scale;
    }

    public function shrink($scale)
    {
        $this->panjang /= $scale;
        $this->lebar /= $scale;
    }
}

class Descriptor {
    public static function describe($bangun_datar){
        if ($bangun_datar instanceof BangunDatar){
            return "Bangun datar ini adalah ".$bangun_datar->name()." ".$bangun_datar->description().
            " yang memiliki luas ".$bangun_datar->area()." dan keliling ".$bangun_datar->circumference();
        } else {
            return "Bangun datar tidak ditemukan";
        }
    }
}

$lingkaran = new Lingkaran(10);
$persegi = new Persegi(20);
$persegi_panjang = new PersegiPanjang(25, 15);
$descriptor = new Descriptor();

echo $descriptor->describe($lingkaran)."\n";
echo $descriptor->describe($persegi)."\n";
echo $descriptor->describe($persegi_panjang)."\n";

// memeperbesar

$lingkaran->enlarge(4);
$persegi->enlarge(4);
$persegi_panjang->enlarge(4);

echo "\n";
echo "Memperbesar \n";
echo $descriptor->describe($lingkaran)."\n";
echo $descriptor->describe($persegi)."\n";
echo $descriptor->describe($persegi_panjang)."\n";

// memperkecil

$lingkaran->shrink(8);
$persegi->shrink(8);
$persegi_panjang->shrink(8);

echo "\n";
echo "Memperkecil \n";
echo $descriptor->describe($lingkaran)."\n";
echo $descriptor->describe($persegi)."\n";
echo $descriptor->describe($persegi_panjang)."\n";

//$trapesium = "Trapesium";
//echo $descriptor->describe($trapesium);
?>