<?php 

// $panjang = 10;
// $lebar = 5;

// $luas = $panjang * $lebar;
// $keliling = 2 * $panjang * $lebar;

// echo "Luas          : " . $luas . "</br>";
// echo "Keliling      : " . $keliling . "</br>"

// $jariJariBola = 3 ;
// $volumeBola = (4/3) * M_PI * pow($jariJariBola, 3);
// $keliling = 2 * M_PI * $jariJariBola;
// $Luas = M_PI * $jariJariBola * $jariJariBola;

// echo    "VolumeBola    : ". round($volumeBola, 2) . "</br>";
// echo "KelilingLingkaran = " .round($keliling, 2) . "</br>";
// echo "Luas = " .round($Luas, 2) . "</br>";

// $luasTanah = 144;
// $panjangSisiTanah = sqrt($luasTanah);

// echo "Panjang sisi tanah       : " .$panjangSisiTanah . "m</br>";

$alas = 6;
$tinggi = 8;

$sisi_miring = sqrt(pow($alas, 2) + pow($tinggi, 2));

$luas = 0.5 * $alas * $tinggi;
$keliling = $alas + $tinggi + $sisi_miring;

echo "Sisi miring           : " . $sisi_miring . "</br>";
echo "Luas segitiga         : " . $luas . "</br>";
echo "Keliling segitiga     : " .$keliling . "</br>";



?>