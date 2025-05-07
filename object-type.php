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
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

}
class CetakInfo
{
    // method cetak berfungsi untuk mencetak isi dari objek produk agar lebih modular. Di dalam method cetak paramter diberi isi nama dari class dan nama objek yang sudah diinstansiasi 
    public function cetak(Produk $produk)
    // Produk -> nama class | $produk -> paramter dari objek yang telah diinstasiasi dalam contoh kita namakan $produk1 & $produk 2
    {
        $str = "{$produk->judul} | {$produk->getLabel()} | {$produk->harga}";
        return $str;
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


$infoProduk1 = new CetakInfo();
//  dapat diperhatikan ketika kita memanggil method cetak, paramternya berisi objek yang telah diinstasiasi
echo $infoProduk1->cetak($produk1);
?>