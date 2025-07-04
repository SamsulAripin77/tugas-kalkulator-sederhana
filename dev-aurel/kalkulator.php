<?php

echo "=== Kalkulator Mini ===" . PHP_EOL;
echo PHP_EOL;
// menggunakan variabel untuk menyimpan input dari pengguna
echo "Masukkan angka pertama:";
$angka1 = (float) readline();

echo "Masukkan operator (+, -, *, /, %) :";
$operator = readline();

echo "Masukkan angka kedua:";
$angka2 = (float) readline();

// menggunakan konstanta untuk pesan error pembagian dengan nol
const PESAN_ERROR = "Error: Pembagian dengan nol tidak diperbolehkan.";

//Buat function bernama hitung($angka1, $angka2, $operator):
//Menerima 3 parameter
//Mengembalikan hasil operasi

function hitung($angka1, $angka2, $operator) {
    switch($operator){
    case "+":
        return $angka1 + $angka2;
    case "-":
        return $angka1 - $angka2;
    case "*":
        return $angka1 * $angka2;
    case "/":
        return ($angka2 == 0) ? PESAN_ERROR : $angka1 / $angka2;
    case "%":
        return ($angka2 == 0) ? PESAN_ERROR : $angka1 % $angka2;
    default:
        return "operator tidak valid";
}}

// Validasi operator pakai if
if (
    $operator != '+' &&
    $operator != '-' &&
    $operator != '*' &&
    $operator != '/' &&
    $operator != '%'
) {
    echo "Operator tidak valid. Harus salah satu dari +, -, *, /, %." . PHP_EOL;
    exit;
}

$hasil = hitung($angka1, $angka2, $operator);

// Gunakan ternary operator untuk menampilkan hasil negatif 
$output = is_numeric($hasil)
? (($hasil < 0) ? "Hasil Negatif : $hasil" : $hasil)
: $hasil;
echo PHP_EOL;
echo "Hasil dari $angka1 $operator $angka2 adalah: $output" . PHP_EOL;
?>