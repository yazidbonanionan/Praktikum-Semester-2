<?php
if (isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $matkul = $_POST['matkul'];
  $nilai_uts = $_POST['nilai_uts'];
  $nilai_uas = $_POST['nilai_uas'];
  $nilai_tugas = $_POST['nilai_tugas'];

  echo "Nama Lengkap : $nama</br>";
  echo "Matkul : $matkul</br>";
  echo "Nilai UTS : $nilai_uts</br>";
  echo "Nilai UAS : $nilai_uas</br>";
  echo "Nilai Tugas/Praktikum : $nilai_tugas</br>";
}

  /* Siswa Bakal Di Nyatakan Lulus Jika Nilai Totalnya Presentase 30% UTS, 35% UAS dan 35% Tugas Melebihi 55. */

  $total_nilai = floor(($nilai_uts * 0.30) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35));

  echo "Total Nilai Siswa Adalah : $total_nilai</br>";
  if ($total_nilai > 55 && $total_nilai <= 100) { 
    echo "Siswa Lulus Mata Kuliah!</br>";
  } else if ( $total_nilai >= 0 && $total_nilai <= 55) { 
    echo "Maaf Siswa Belum Lulus Mata Kuliah!</br>";
  }  else {
    echo "Maaf, Nilai Yang Anda Miliki Tidak Terdefinisi";
  }

  switch (true) {
    case ($total_nilai >= 0 && $total_nilai <= 35):
        $grade = "E";
        break;
    case ($total_nilai >= 36 && $total_nilai <= 55):
        $grade = "D";
        break;
    case ($total_nilai >= 56 && $total_nilai <= 69):
        $grade = "C";
        break;
    case ($total_nilai >= 70 && $total_nilai <= 84):
        $grade = "B";
        break;
    case ($total_nilai >= 85 && $total_nilai <= 100):
        $grade = "A";
        break;
        default:
        $grade = "I";
        break;
    }
        echo "Grade Nilai Anda : $grade";