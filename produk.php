<?php 

// jualan Produk
// Komik
// Game

class Produk{
	public  $judul = "judul", 
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;

	public function getLabel(){
		return "$this->judul, $this->penulis, $this->penerbit, $this->harga,";
	}
}

$produk1 = new Produk();
$produk1->judul = "Black Clover";
$produk1->penulis = "Yuki Tabata";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 25000;

$produk2 = new Produk();
$produk2->judul = "Metal Gear Solid";
$produk2->penulis = "Hideo Kojima";
$produk2->penerbit = "KONAMI";
$produk2->harga = 250000;

echo "Komik : ".$produk1->getLabel();
echo "<hr>";
echo "Game : ".$produk2->getLabel();