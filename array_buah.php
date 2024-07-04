<?php
$ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];

//cetak buah index ke 2
echo $ar_buah[2];

//cetak jumlah buah
echo '</br>Jumlah Buah : ' . count($ar_buah);

//cetak seluruh buah
echo '<ol>';
foreach ($ar_buah as $buah) {
    echo '<li>' . $buah . '</li>';
}
echo '</ol>';

// Tambahkan Buah 
$ar_buah[]="Durian";
array_push($ar_buah, "Apel", "Salak");
print_r($ar_buah);
echo '</br>';

//Hapus Buah Index Ke-1
unset($ar_buah[1]);
print_r($ar_buah);
echo '</br>';

//ubah index ke-2 menjadi manggis 
$ar_buah[2]= "Manggis";
print_r($ar_buah);

// Cetak seluruh buahnya dengan index-nya
echo '<ul>';
foreach($ar_buah as $k => $v) {
    echo "<li>Buah index - $k adalah $v";
}
echo '</ul>';
