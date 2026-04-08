<?php
error_reporting(-1);
ini_set('display_errors', 1);

require_once 'Mahasiswa.php';
require_once 'Dosen.php';
require_once 'MataKuliah.php';
require_once 'Nilai.php';

// objek
$mhs = new Mahasiswa("Anita Ayu Wahyuni", "I43250559");
$dosen = new Dosen("Bu Prisil", "67068");

$mk1 = new MataKuliah("Pemrograman", 2);
$mk2 = new MataKuliah("Basis Data", 3);

// input nilai
$mhs->tambahNilai(3.0);
$mhs->tambahNilai(4.0);

// output
echo $mhs->info();
echo "<br>";
echo $dosen->info();
echo "<hr>";

echo "Mata Kuliah:<br>";
echo $mk1->getInfo() . "<br>";
echo $mk2->getInfo() . "<br>";

echo "<hr>";
echo $mhs->cetak();
?>