<?php 

// jualan Produk
// Komik
// Game

class Produk{
	private $judul, 
			$penulis,
			$penerbit,
			$harga,
			$diskon = 0;

	public function __construct( $judul = "judul", $penulis = "penulis",$penerbit ="penerbit",$harga=0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $judul;
		$this->harga = $harga;
	}

	public function setJudul( $judul){
		$this->judul =$judul;
	}

	public function getJudul(){
		return $this->judul;
	}

	public function setPenulis( $penulis){
		$this->penulis =$penulis;
	}

	public function getPenulis(){
		return $this->penulis;
	}

	public function setPenerbit( $penerbit){
		$this->penerbit =$penerbit;
	}

	public function getPenerbit(){
		return $this->penerbit;
	}

	public function setHarga( $harga){
		$this->harga =$harga;
	}

	public function getHarga(){
		return $this->harga - ($this->harga * $this->diskon /100);
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit,";
	}

	public function getInfoProduk(){
		$str ="{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	public function getDiskon(){
		return $this->diskon;
	}
}


class Komik extends Produk {
	public $jmlHal;

	public function __construct($judul = "judul", $penulis = "penulis",$penerbit ="penerbit",$harga=0, $jmlHal = 0){
		parent::__construct($judul, $penulis,$penerbit ,$harga);

		$this->jmlHal =$jmlHal;
	}

	public function getInfoProduk(){
		$str ="Komik : ". parent::getInfoProduk() ." - {$this->jmlHal} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis",$penerbit ="penerbit",$harga=0, $waktuMain = 0){
		parent::__construct($judul, $penulis,$penerbit ,$harga);
		
		$this->waktuMain =$waktuMain;
	}

	

	public function getInfoProduk(){
		$str ="Game : ". parent::getInfoProduk() ." - {$this->waktuMain} Jam.";
		return $str;
	}
}

class cetakInfoProduk{
	
	public function cetak( Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Komik("Black Clover","Yuki Tabata","Shonen Jump", 20000, 100);
 
$produk2 = new Game("Final Fantasy VII", "Yoshinori Kitase","Square Enix", 250000, 500);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(10);
echo $produk2->getHarga();
echo"<hr>";


$produk1->setPenulis("kaizoku");
echo $produk1->getPenulis();