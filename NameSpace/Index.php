<?php

require_once 'App/init.php';

// $produk1 = new Komik("Black Clover","Yuki Tabata","Shonen Jump", 20000, 100);
 
// $produk2 = new Game("Final Fantasy VII", "Yoshinori Kitase","Square Enix", 250000, 500);


// $cetakProduk = new cetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();