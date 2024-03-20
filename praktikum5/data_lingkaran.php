<?php
require_once('class_Lingkaran.php');
echo "Nilai PHI: " . Lingkaran::PHI;

// instansiasi object Lingkaran
$Lingkar1 = new Lingkaran(20);
$Lingkar2 = new Lingkaran(8);

// memanggil method dari object
echo "<br> Luas Lingkaran 1: " . $Lingkar1->getLuas();
echo "<br> Luas Lingkaran 2: " . $Lingkar2->getLuas();

echo '<br>';

echo "<br> Keliling Lingkaran 1: " . $Lingkar1->getKeliling();
echo "<br> Keliling Lingkaran 2: " . $Lingkar2->getKeliling();