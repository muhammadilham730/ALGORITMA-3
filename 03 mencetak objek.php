<?php
class hewan {
  public $nama;
  public $warna;

  public function __construct($nama, $warna){
    $this->nama = $nama;
    $this->warna = $warna;
  }
}

$harimau = new hewan("kucing", "hitam");
$singa = new hewan("singa", "kuning");
print_r($singa);
print "<p>";
print_r($harimau);