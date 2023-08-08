<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

class BasicPhpController extends Controller
{
    public function dasarVariabel()
    {
        $nama = "Bambang";
        $no_punggung = 10;
        $apakahTimnas = true;

        var_dump($nama);
        var_dump($no_punggung);
        var_dump($apakahTimnas);
    }

    public function operatorAritmatika()
    {
        $pertambahan = 15 + 15;
        var_dump(($pertambahan));

        $pengurangan = 15 - 5;
        var_dump($pengurangan);
    }

    public function operatorPenugasan()
    {
        $total = 0;

        $apel = 1000;
        $ayam = 25000;
        $coca_cola = 7500;

        $total += $apel;
        $total *= $coca_cola;
        $total /= $ayam;

        var_dump($total);
    }

    public function operatorPerbandingan()
    {
        var_dump("10" == 10);
        var_dump("11" === 11);

        var_dump(5 > 4);
        var_dump(3 <= 4);
    }

    public function operatorLogika()
    {
        var_dump(true && true);
        var_dump(true && false);

        var_dump(true || false);
        var_dump(false || false);

        var_dump(!true);
        var_dump(!false);
    }

    public function operatorIncrementDecrement()
    {
        $a = 10;
        $b = ++$a;

        var_dump($b);
        var_dump($a);

        $c = 5;
        $d = $c++;

        var_dump($d);
        var_dump($c);
    }

    public function percabanganIf()
    {
        $kegiatan = "Pergi keluar";

        $hujan = true;

        if($hujan)
        {
            $kegiatan = $kegiatan." membawa payung";
        }

        return $kegiatan;
    }

    public function percabanganIfElse()
    {
        $umur = 25;

        if($umur < 18)
        {
            $hasil = "Belum cukup umur";
        }
        else
        {
            $hasil = "Cukup umur";
        }

        return $hasil;
    }

    public function percabanganIfElseifElse()
    {
        $angka = 33;

        if ($angka == 0)
        {
            $hasil = "Bilangan 0";
        }
        elseif ($angka % 2 == 0)
        {
            $hasil = "Bilangan genap";
        }
        else
        {
            $hasil = "Bilangan ganjil";
        }

        return $hasil;
    }

    public function percabanganNestedif()
    {
        $cintaku = 15;
        $cintadia = 11;

        if ($cintaku > $cintadia)
        {
            $usahadia = 5;
            $cintadia = $cintadia + $usahadia;

            if ($cintaku > $cintadia)
            {
                $hasil = "Aku mencintainya";
            }
            else
            {
                $hasil = "Dia mencintaiku";
            }
        }
        else
        {
            $hasil = "Kamu mencintai dia";
        }
        
        return $hasil;
    }

    public function switchCase()
    {
        $nilai = "C";

        switch($nilai)
        {
            case "A":
                $hasil = "Sangat baik";
                break;
            case "B":
                $hasil = "Baik";
                break;
            case "C":
                $hasil = "Cukup";
                break;
            case "D":
                $hasil = "Kurang";
                break;
            default:
                $hasil = "Nilai tidak ada";
        }

        return $hasil;
    }

    public function arrayPertama()
    {
        $makananFavorit = ['ayam', 'pecel'];
        $minumanFavorit = array('teh', 'kopi');

        foreach($makananFavorit as $makanan){
            echo "$makanan, ";
        }

        echo "<br>";

        foreach($minumanFavorit as $key => $minuman){
            echo "$key. $minuman, ";
        }
    }

    public function arrayKedua()
    {
        $makanan = ['ayam', 'pecel', 'sate'];

        echo "Saya suka makanan ".$makanan[0]." dan ".$makanan[2];
    }

    public function arrayKetiga()
    {
        $makananFavorit = [
            'Budi' => 'ayam',
            'Ayah' => 'pecel'
        ];

        echo "Budi suka makan".$makananFavorit['Budi']." dan Ayah suka makan ".$makananFavorit['Ayah'];
    }

    public function arrayKeempat()
    {
        $dataStatus = [
            ['Budi', 12, 'jomblo'],
            ['Joko', 24, 'menikah', ['wiraswasta']]
        ];

        echo $dataStatus[0][0]." berumur ".$dataStatus[0][1]." berstatus ".$dataStatus[0][2];

        echo "<br>";

        echo $dataStatus[1][0]." berumur ".$dataStatus[1][1]." berstatus ".$dataStatus[1][2]." pekerjaan ".$dataStatus[1][3][0];
    }

    public function stringPertama()
    {
        $word = "Hello";

        echo strlen($word);
    }

    public function stringKedua()
    {
        $word = "Selamat pagi kakak...";

        echo str_replace("pagi", "malam", $word);
    }

    public function stringKetiga()
    {
        $setences = "Kucing suka makan ikan goreng 5";

        echo str_word_count($setences);
    }

    public function stringKeempat()
    {
        $setences = "Selamat siang dengan bapak ...";

        echo strpos($setences, "bapak");
    }

    public function perulanganPertama()
    {
        $total = 9;
        $hasilFaktorial = 1;

        for ($i=1; $i <= $total; $i++)
        {
            $hasilFaktorial = $hasilFaktorial * $i;
            echo $i." hasil faktorial ".$hasilFaktorial."<br>";
        }

        return $hasilFaktorial;
    }

    public function perulanganKedua()
    {
        $counter = 0;

        while ($counter < 5)
        {
            echo "Saya menyesal <br>";

            $counter++;
        }
    }

    public function perulanganKetiga()
    {
        $angka = -2;

        do {
            $angka --;
        }
        while ($angka > 0);

        return "angka = ".$angka;
    }

    public function pertama()
    {
        $this->printHello("Dunia", 21);
    }

    public function printHello(string $nama, int $angka)
    {
        echo "Halo ".$nama.", dengan angka ".$angka;
    }

    public function kedua()
    {
        $this->makan();
    }

    public function makan(bool $lapar = false)
    {
        if ($lapar)
        {
            echo "Ayo makan";
        }
        else
        {
            echo "Sudah kenyang";
        }
    }

    public function ketiga()
    {
        return $this->menjumlahkanDuaAngka(25, 75);
    }

    public function menjumlahkanDuaAngka(int $angka1, int $angka2)
    {
        $hasil = $angka1 + $angka2;
        return $hasil;
    }

    public function keempat()
    {
        //$hasilPembagian = $this->pembagianDuaAngka(45, 9);
        $hasilPembagian = $this->pembagianDuaAngka(45, 0);
        return $hasilPembagian;
    }

    public function pembagianDuaAngka(int $angka1, $angka2)
    {
        $iniNol = $this->cekNilaiNol($angka2);

        if ($iniNol)
        {
            return "Angka kedua tidak boleh 0";
        }

        $hasil = $angka1 / $angka2;

        return $hasil;
    }
   
    public function cekNilaiNol(int $angka)
    {
        if ($angka == 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}