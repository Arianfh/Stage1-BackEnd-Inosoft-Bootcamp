<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskPHPDasarController extends Controller
{
    public function task()
    {
        for ($angka=1; $angka<=100; $angka++)
        {
            if (($angka % 3) === 0 && ($angka % 5) === 0){  // jika bilangan kelipatan 3 dan 5
                $panjang = $angka / 3;
                $lebar = $angka / 5;
                $hasil = $this->luasPersegi($panjang, $lebar);
            }
            elseif (($angka % 3) === 0){    // jika bilangan kelipatan 3
                $jari_jari = $angka / 3;
                $hasil = $this->luasLingkaran($jari_jari);
            }
            elseif (($angka % 5) === 0){ // jika bilangan kelipatan 5
                $jari_jari = $angka / 5;
                $hasil = $this->kelilingLingkaran($jari_jari);
            }
            else {
                $hasil = $angka."<br>";
            }
            
            //var_dump($hasil); => tipe data menjadi string

            $num = (float) $hasil; // mengubah tipe data menjadi float

            echo number_format($num, 2)."<br>"; // menetapkan format 2 angka dibelakang koma
        }
    }

    public function luasLingkaran($jari_jari)
    {
        return round(M_PI * $jari_jari * $jari_jari, 2);
    }

    public function kelilingLingkaran($jari_jari)
    {
        return round(2 * M_PI * $jari_jari, 2);
    }

    public function luasPersegi($panjang, $lebar)
    {
        return round($panjang * $lebar, 2);
    }
}
