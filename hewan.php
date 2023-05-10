<?php
// ini class yaitu kerangka dalam pembuatan program
class Handphone{
    // ini properti 
    public $pemilik;
    public $merk;
    public $ukuranLayar;

    // ini method yaitu fungsi atau aksi
    public function setpemilik($pemilik){
        $this->pemilik=$pemilik;
    }
    public function setmerk($merk){
        $this->merk=$merk;
    }
    public function setukuranLayar($ukuranLayar){
        $this->ukuranLayar=$ukuranLayar;
    }

    public function getCetak(){
        echo "Nama Pemilik: ". $this->pemilik;
        echo "<br>";
        echo "Merk Handphone: ".$this->merk;
        echo "<br>";
        echo "Ukuran Layar: ".$this->ukuranLayar;
        echo "<br>  <br>";
    }
}
// ini objek yaitu hasil atau penciptaan dari sebuah class
//object adalah uti
$uti = new Handphone();
$uti->setpemilik("Uti");
$uti->setmerk("Vivo");
$uti->setukuranLayar("6,35 inc");
$uti->getCetak();

$nia = new Handphone();
$nia->setpemilik("Nia");
$nia->setmerk("Oppo");
$nia->setukuranLayar("6,2 inc");
$nia->getCetak();

$fania = new Handphone();
$fania->setpemilik("Fania");
$fania->setmerk("Xiaomi");
$fania->setukuranLayar("5,45 inc");
$fania->getCetak();

?>