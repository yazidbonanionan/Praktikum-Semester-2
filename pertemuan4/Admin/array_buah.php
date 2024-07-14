<?php
include_once 'top.php';
include_once 'menu.php';
?>
<?php
$ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];

//Cetak buah index ke-2
echo $ar_buah[2];

//Cetak jumlah buah
echo '</br>Jumlah Buah : ' . count(value: $ar_buah);

//Cetak seluruh buah
echo '<ol>';
foreach ($ar_buah as $buah) {
    echo '<li>' . $buah . '</li>';
}
echo '</ol>';

// Tambahkan buah
$ar_buah[] = "Durian";
array_push($ar_buah, "Apel", "Salak");
print_r(value: $ar_buah);
echo '</br>';

// Hapus buahidex ke-1
unset($ar_buah[1]);
print_r(value: $ar_buah);

// Ubah index ke-2 menjadi manggis
$ar_buah[2] = "Manggis";
print_r(value: $ar_buah);

// Cetak Seluruh buah dengan indexnya
echo '<ul>';
foreach ($ar_buah as $k => $v) {
    echo "<li>Buah index - $k adalah $v";
}
?>
<?php
include_once 'bottom.php';
?>