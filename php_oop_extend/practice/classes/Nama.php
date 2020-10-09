<?php
include 'Data.php';
// class Nama extends Data
// {
    // public function message() {
    //     echo "Perkenalkan diri? ";
    //   }   
// }
// $Nama = new Nama("Munif Soleh","Wonocoyo");
// $Nama->message();
// $Nama->intro();

class anak extends induk
{
  //property yang dap
  public function message() {
    echo "Perkenalkan diri? ";
  }
  public function TesProperty(){
    echo $this->nama;
    // echo $this->alamat;   //private hanya bisa diacses dari dalam class 
    echo $this->kelas.PHP_EOL;
  }
}
$nama = new anak("Munif Soleh","Wonocoyo");
$nama->TesProperty();
$nama->intro();
// echo $nama->nama;  // Public bisa diacses dari mana saja
// echo $nama->alamat; // protected hanya dalam class dan turunan tidak global
