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
			$waktuMain,
			$type;

	public function __construct( $judul = "judul", $penulis = "penulis",$penerbit ="penerbit",$harga=0, $jmlHal = 0, $waktuMain = 0, $type){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $judul;
		$this->harga = $harga;
		$this->jmlHal = $jmlHal;
		$this->waktuMain = $waktuMain;
		$this->type = $type;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit,";
	}

	public function getInfoLengkap(){
		$str ="{$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if ($this-> type == "komik") {
			$str.= " -{$this->jmlHal} Halaman.";
		}else{
			$str .= " ~ {$this->waktuMain} Jam.";
		}
		return $str;
	}
}

/**
* 
*/
class cetakInfoProduk{
	
	public function cetak( Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Black Clover","Yuki Tabata","Shonen Jump", 20000, 100, 0, "komik");

$produk2 = new Produk("Final Fantasy VII", "Yoshinori Kitase","Square Enix", 250000,0, 50, "game");

// Komik : Black Clover, Yuki Tabata, Black Clover, 20000,
// Game : Final Fantasy VII, Yoshinori Kitase, Final Fantasy VII, 250000,
// Black Clover | Black Clover, Yuki Tabata, Black Clover, 20000, (Rp. 20000)

// $infoProduk1 = new cetakInfoProduk();
// echo "komik : ". $infoProduk1->cetak($produk1);
// echo "<hr>";
// echo "Game : " .$infoProduk1->cetak($produk2);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();