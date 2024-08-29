<?php
class hewan {
public $merk;
public $model;
}

$hewan_baru = new hewan();
$hewan_baru ->merk = "<br>sumatra";
$hewan_baru ->model = "<br>kalimantan";

var_dump($hewan_baru);
?>