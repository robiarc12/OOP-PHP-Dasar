<?php
class Produk
{
    // Ini adalaha sebuah Properti
    public $judul = "Judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;


    public function sayHello()
    {
        return "hello World";
    }

}


// ini bagaimana cara kita memanggil class yang sudah kita buat
$produk1 = new Produk();

// cara memanggil dan menimpa isi default pada sebuah class
$produk1->judul = "ill Principe";
$produk1->penulis = "Machieveli";

$produk2 = new Produk();
$produk2->statusPembelian = "Pre-Order";
var_dump($produk2);



?>