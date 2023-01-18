<?php

class Lingkaran 
{
    public float $pi = 0;
    public float $jari;
    public string $bangunDatar;

    public function __construct(float $jari)
    {
        $this->pi = 3.14;
        $this->bangunDatar = "Lingkaran";
        $this->jari = $jari;

    }

    public function area() //Menghitung Luas
    {
       $hasil = $this->pi * $this->jari * $this->jari;
       echo "Area Lingkaran : " . $hasil . PHP_EOL;
       return $hasil;
    }

    public function circumference() //Menghitung Keliling
    {
       $hasil = 2 * $this->pi * $this->jari;
       echo "Circumference Lingkaran : " . $hasil . PHP_EOL;
       return $hasil;
    }

    public function enlarge(float $scale) //Memperbesar Bangun Datar
    {
       $hasil = $this->jari * $scale;
       echo "Enlarge Jari-Jari linkaran dari " . $this->jari . " menjadi " . $hasil . PHP_EOL;
       $this->jari = $hasil;
    }

    public function shrink(float $scale) //Memperkecil Bangun Datar
    {
       $hasil = $this->jari / $$scale;
       echo "Shrink Jari-Jari linkaran dari " . $this->jari . " menjadi " . $hasil . PHP_EOL;
       $this->jari = $hasil;
    }
}

class Persegi
{
    public float $sisi;
    public string $bangunDatar;

    public function __construct(float $sisi)
    {
        $this->bangunDatar = "Persegi";
        $this->sisi = $sisi;
    }

    public function area() //Menghitung Luas
    {
       $hasil = $this->sisi * $this->sisi;
       echo "Area Persegi : " . $hasil . PHP_EOL;
       return $hasil;
    }

    public function circumference() //Menghitung Keliling
    {
       $hasil = 4 * $this->sisi;
       echo "Circumference Persegi : " . $hasil . PHP_EOL;
       return $hasil;
    }

    public function enlarge(float $scale) //Memperbesar Bangun Datar
    {
       $hasil = $this->sisi * $scale;
       echo "Enlarge sisi persegi dari " . $this->sisi . " menjadi " . $hasil . PHP_EOL;
       $this->sisi = $hasil;
    }

    public function shrink(float $scale) //Memperkecil Bangun Datar
    {
       $hasil = $this->sisi / $scale;
       echo "Shrink sisi persegi dari " . $this->sisi . " menjadi " . $hasil . PHP_EOL;
       $this->sisi = $hasil;
    }
}

class PersegiPanjang
{
    public float $panjang;
    public float $lebar;
    public string $bangunDatar;

    public function __construct(float $panjang, float $lebar)
    {
        $this->bangunDatar = "PersegiPanjang";
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function area() //Menghitung Luas
    {
       $hasil = $this->panjang * $this->lebar;
       echo "Area Persegi Panjang : " . $hasil . PHP_EOL;
       return $hasil;
    }

    public function circumference() //Menghitung Keliling
    {
       $hasil = 2 * ($this->panjang + $this->lebar);
       echo "Circumference Persegi Panjang : " . $hasil . PHP_EOL;
       return $hasil;
    }

    public function enlarge(float $scale) //Memperbesar Bangun Datar
    {
       $hasilP = $this->panjang * $scale;
       $hasilL = $this->lebar * $scale;
       echo "Enlarge panjang Persegi Panjang dari " . $this->panjang . " menjadi " . $hasilP . PHP_EOL . "<br>";
       echo "Enlarge lebar Persegi Panjang dari " . $this->lebar . " menjadi " . $hasilL . PHP_EOL;
       $this->panjang = $hasilP;
       $this->lebar = $hasilL;
    }

    public function shrink(float $scale) //Memperkecil Bangun Datar
    {
       $hasilP = $this->panjang / $scale;
       $hasilL = $this->lebar / $scale;
       echo "Shrink panjang Persegi Panjang dari " . $this->panjang . " menjadi " . $hasilP . PHP_EOL . "<br>";
       echo "Shrink lebar Persegi Panjang dari " . $this->lebar . " menjadi " . $hasilL . PHP_EOL;
       $this->panjang = $hasilP;
       $this->lebar = $hasilL;
    }
}

class Descriptor
{
    public static function description(string $bangunDatar, float $luas, float $keliling)
    {
        echo "Bangun datar ini adalah ". $bangunDatar ." yang memiliki luas ". $luas. " dan keliling " . $keliling . PHP_EOL;
    }
}

$deskripsi = new Descriptor();

$lingkaran = new Lingkaran(20);
$luasLingkaran = $lingkaran->area();
$kelilingLingkaran = $lingkaran->circumference();
$bangunLingkaran = $lingkaran->bangunDatar;
$deskripsi->description($bangunLingkaran, $luasLingkaran, $kelilingLingkaran);
echo "===========". PHP_EOL;
$lingkaran->enlarge(5);
$luasLingkaran = $lingkaran->area();
$kelilingLingkaran = $lingkaran->circumference();
$deskripsi->description($bangunLingkaran, $luasLingkaran, $kelilingLingkaran);
echo "===========". PHP_EOL;

$persegi = new Persegi(20);
$luasPersegi = $persegi->area();
$kelilingPersegi = $persegi->circumference();
$bangunPersegi = $persegi->bangunDatar;
$deskripsi->description($bangunPersegi, $luasPersegi, $kelilingPersegi);
echo "===========". PHP_EOL;
$persegi->shrink(4);
$luasPersegi = $persegi->area();
$kelilingPersegi = $persegi->circumference();
$deskripsi->description($bangunPersegi, $luasPersegi, $kelilingPersegi);
echo "===========". PHP_EOL;

$persegiPanjang = new PersegiPanjang(20,50);
$luasPersegiPanjang = $persegiPanjang->area();
$kelilingPersegiPanjang = $persegiPanjang->circumference();
$bangunPersegiPanjang = $persegiPanjang->bangunDatar;
$deskripsi->description($bangunPersegiPanjang, $luasPersegiPanjang, $kelilingPersegiPanjang);
echo "===========". PHP_EOL;
