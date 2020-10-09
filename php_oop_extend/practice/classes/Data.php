<?php

// /** Base Class */
// class Data {
//   private $nama;
//   private $alamat;
  
//   public function __($nama, $alamat) {
//     $this->nama = $nama;
//     $this->alamat = $alamat;
//   }
//   public function intro() {
//     echo "Nama saya adalah {$this->nama} dan alamat saya adalah {$this->alamat}.";
//   }
// }
class induk
{
  public $nama="Munif Soleh";
  private $alamat="Wonocoyo";
  protected $kelas="XI TKJ B";

  public function intro() {
    echo "Nama saya adalah {$this->nama} dan alamat saya adalah {$this->alamat}.";
  }
  // public function SetNama($nama_baru){
  //   $this->nama=$nama_baru;
  // }
  // private function PrivateFunction(){
  //   echo "Ini Fungsi Private";
  // }
  // protected function ProtectedFunction(){
  //   echo "Ini Fungsi Protected";
  // }
}

