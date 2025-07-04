<?php

 echo "=== Daftar Nilai Siswa ===" . PHP_EOL;
 echo PHP_EOL;
 $siswa = [
  "Andi" => 78,
  "Budi" => 65,
  "Citra" => 90,
  "Dina" => 45
];

function cekKelulusan($nilai){
    if ($nilai >= 70){
        return "lulus";
    }else {
        return "tidak lulus";
    }
}

$totalNilai = 0;
$jumlahSiswa = 0;
$jumlahLulus = 0;
$jumlahTidakLulus = 0;

foreach($siswa as $nama => $nilai) {
    if ($nilai < 0 || $nilai > 100) {
    continue; // lewati siswa ini
    } 

    $totalNilai += $nilai;
    $jumlahSiswa++;
    $status = cekKelulusan($nilai);
    echo "$nama : $nilai - $status" . PHP_EOL;

    if ($status == "lulus"){
        $jumlahLulus++;
    }else{
        $jumlahTidakLulus++;
    }
}
    $rataRata = $totalNilai / $jumlahSiswa;
    echo PHP_EOL;
    echo "Total siswa : $jumlahSiswa" . PHP_EOL;
    echo "Rata-rata nilai : " . number_format($rataRata, 1) . PHP_EOL;
    echo "Jumlah lulus : $jumlahLulus" . PHP_EOL;
    echo "jumlah tidak lulus : $jumlahTidakLulus" . PHP_EOL;

 

