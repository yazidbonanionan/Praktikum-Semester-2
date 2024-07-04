<?php
define(constant_name: 'PHI', value:3.14);
const DBNAME = 'inventori';
const DBSERVER = 'localhost';

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo "Luas Lingkaran dengan Jari $jari : $luas";
echo "</br>Kelilingnya : $kll";

echo '</br>Nama Databasenya : ' . DBNAME;
echo '</br>Nama Databasenya : ' . DBSERVER;