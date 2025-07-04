<?php

echo "=== KALKULATOR MINI UNGA ===\n";

//Variable & FUNCTION
$angka1 = readline("Masukan angka pertama: ");
$operator = readline("Masukan operator (+, -, *, /, %): ");
$angka2 = readline("Masukan angka kedua: ");

    // Validasi input   

    //IF
    if (!is_numeric ($angka1) || !is_numeric($angka2)) {
        echo "Input tidak valid. Pastikan anda memasukkan angka. \n";
        exit;
    }

    if ($operator != "+" && $operator != "-" && $operator != "*" && $operator != "/" && $operator != "%") {
        echo "Operator tidak valid. Silakan gunakan salah satu dari +, -, *, /, %.\n";
        exit;
    }

    if (($operator == "/" || $operator == "%") && $angka2 == 0) {
        echo "Pembagian atau modulus dengan nol tidak valid. \n";
        exit;
    }

//SWITCH
switch ($operator) {
    case "+":
        $hasil = $angka1 + $angka2;
        echo ($hasil < 0) ? "Hasil negatif: $hasil\n" : "Hasil dari: $angka1 + $angka2 = $hasil\n"; //TERNARY OPERATOR
        break;

         case "-":
        $hasil = $angka1 - $angka2;
        echo ($hasil < 0) ? "Hasil negatif: $hasil\n" : "Hasil dari: $angka1 - $angka2 = $hasil\n"; //TERNARY OPERATOR
        break;

        case "*":
        $hasil = $angka1 * $angka2;
        echo ($hasil < 0) ? "Hasil negatif: $hasil\n" : "Hasil dari: $angka1 * $angka2 = $hasil\n"; //TERNARY OPERATOR
        break;

        case "/":
        $hasil = $angka1 / $angka2;
        echo ($hasil < 0) ? "Hasil negatif: $hasil\n" : "Hasil dari: $angka1 / $angka2 = $hasil\n"; //TERNARY OPERATOR
        break;

       case "%":
       $hasil = $angka1 % $angka2;
       echo ($hasil < 0) ? "Hasil negatif: $hasil\n" : "Hasil dari: $angka1 % $angka2 = $hasil\n"; //TERNARY OPERATOR
        break;

        default:
        echo "Operator tidak dikenali.\n";
       break;
    }

  echo "Terimakasih telah menggunakan kalkulator mini ini! \n";
?>