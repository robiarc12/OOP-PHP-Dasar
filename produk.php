<?php
class Produk
{
    // Ini adalaha sebuah Properti
    public $judul = "Judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;


    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        echo "Judul: " . $this->judul = $judul;
        echo "Penulis: " . $this->penulis = $penulis;
        echo "Penerbit: " . $this->penerbit = $penerbit;
        echo "Harga: " . $this->harga = $harga;
        echo "<br>";

    }
    public function sayHello()
    {
        return "hello World";
    }

}


// ini bagaimana cara kita memanggil class yang sudah kita buat
$produk1 = new Produk("Ill Principe ", "Niccolo Machiaveli ", "Gramedia ", 73000);

// cara memanggil dan menimpa isi default pada sebuah class tanpa constructor
// $produk1->judul = "ill Principe";
// $produk1->penulis = "Machieveli";

// membuat properti baru tanpa menginstansiasi di dalam class
$produk2 = new Produk("Makannya Mikir!", "abigail & Cannia", "gramedia", 135000);
$produk2->statusPembelian = "Pre-Order";
var_dump($produk1);
var_dump($produk2);



?>