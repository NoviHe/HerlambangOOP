<?php 


// define('NAMA', "Novi Herlambang");

// echo NAMA;

// echo "<br>";

// const UMUR = 17;
// echo UMUR;

// class Coba{
// 	const NAMA = "novi";
// }

// echo Coba::NAMA;
// echo __LINE__;
// echo "<br>";
// echo __FILE__;
// echo "<br>";
// echo __DIR__;

// function cobamejik(){
// 	return __FUNCTION__;
// }
// echo cobamejik();

class CobaMejikuhibiniu{
	public $kelas =__CLASS__;
}

$obj = new CobaMejikuhibiniu;
echo $obj->kelas;





 ?>