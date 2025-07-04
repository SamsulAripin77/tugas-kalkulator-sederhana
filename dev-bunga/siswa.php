<?php
 echo "=== Daftar Nilai Siswa ===\n";

 //Function(paraemeter, return value) - Scope variabel lokal
function cekKelulusan($nilai){
     if ($nilai >= 70) {  //Perbandingan nilai
         return "Lulus";
     } else {
        return "Tidak Lulus";
    }
}

//Associative Array
$siswa = [ 
     "Rafly" => 85,
     "Jeff" => 47,
     "Mega" => 90,
     "Kaye" => 67,
 ];

 //Variabel global
 $totalNilai = 0;
 $lulus = 0;            
 $tidakLulus = 0;

 //Perulangan (foreach,for)
 foreach ($siswa as $nama => $nilai) {
    $status = cekKelulusan($nilai);
     echo "$nama: $nilai - $status\n";

     $totalNilai += $nilai;

     if ($status == "Lulus") {  //Operator perbandingan
         $lulus++;
     } else {   //Logika else
         $tidakLulus++;
     }
 }

 $totalSiswa = count($siswa);
 $rataRata = $totalNilai / $totalSiswa;

echo "Total siswa: $totalSiswa\n";
echo "Rata-rata nilai: " . number_format($rataRata, 1, ',', '.') . "\n";
echo "Jumlah Lulus: $lulus\n";
echo "Jumlah Tidak Lulus: $tidakLulus\n";
?>