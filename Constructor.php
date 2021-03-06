<?php 

// jualan Produk
// Komik
// Game

class Produk{
	public  $judul, 
			$penulis ,
			$penerbit ,
			$harga;

public function __construct( $judul = "judul", $penulis = "penulis",$penerbit ="penerbit",$harga=0){
	$this->judul = $judul;
	$this->penulis = $penulis;
	$this->penerbit = $judul;
	$this->harga = $harga;
}

	public function getLabel(){
		return "$this->judul, $this->penulis, $this->penerbit, $this->harga,";
	}
}

$produk1 = new Produk("Black Clover","Yuki Tabata","Shonen Jump", 20000);

$produk2 = new Produk("Final Fantasy VII", "Yoshinori Kitase","Square Enix", 250000);

echo "Komik : ".$produk1->getLabel();
echo "<hr>";
echo "Game : ".$produk2->getLabel();