<?php 

// jualan Produk
// Komik
// Game

class Produk{
	public  $judul, 
			$penulis ,
			$penerbit ,
			$harga,
			$jmlHal,
			$waktuMain;

	public function __construct( $judul = "judul", $penulis = "penulis",$penerbit ="penerbit",$harga=0, $jmlHal = 0, $waktuMain = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $judul;
		$this->harga = $harga;
		$this->jmlHal = $jmlHal;
		$this->waktuMain = $waktuMain;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit,";
	}

	public function getInfoProduk(){
		$str ="{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}
}


class Komik extends Produk {
	public function getInfoProduk(){
		$str ="Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHal} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	
	function getInfoProduk(){
		$str ="Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
		return $str;
	}
}

class cetakInfoProduk{
	
	public function cetak( Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Komik("Black Clover","Yuki Tabata","Shonen Jump", 20000, 100, 0);

$produk2 = new Game("Final Fantasy VII", "Yoshinori Kitase","Square Enix", 250000,0, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();