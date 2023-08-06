<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
