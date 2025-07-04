# 🧮 Tugas 1: Kalkulator Mini Sederhana (PHP Console App)

## 🎯 Tujuan

Melatih dasar-dasar pemrograman PHP:
- Variabel dan tipe data
- Operator aritmetika, penugasan, perbandingan, dan logika
- Input dari terminal atau browser (pilih salah satu)
- Percabangan (`if`, `switch`, dan ternary operator)
- Function (dengan parameter dan return value)

---

## 📄 Deskripsi Tugas

Buat aplikasi kalkulator sederhana berbasis **console/terminal** (CLI), yang dapat melakukan operasi berikut:

- Penjumlahan (`+`)
- Pengurangan (`-`)
- Perkalian (`*`)
- Pembagian (`/`)
- Sisa bagi (`%`)

Aplikasi akan meminta pengguna untuk:
1. Memasukkan **angka pertama**
2. Memasukkan **operator**
3. Memasukkan **angka kedua**

Lalu tampilkan hasilnya di terminal.

---

## ✅ Syarat dan Ketentuan

1. Gunakan **variabel dan konstanta** untuk menyimpan nilai input dan hasil.
2. Gunakan **`switch`** untuk menentukan jenis operasi.
3. Gunakan **`if`** untuk validasi input (misalnya: operator tidak valid, pembagian dengan nol).
4. Gunakan **ternary operator** untuk menentukan apakah hasil negatif akan ditampilkan atau diganti dengan teks.
5. Buat function bernama `hitung($angka1, $angka2, $operator)`:
   - Menerima 3 parameter
   - Mengembalikan hasil operasi
6. Cetak hasil akhir ke layar:
   - Format: `Hasil dari 5 + 3 adalah: 8`
7. Tambahkan komentar di setiap bagian penting kode.

---

## 💡 Contoh Interaksi Program

```bash
=== Kalkulator Mini ===

Masukkan angka pertama: 10
Masukkan operator (+, -, *, /, %): /
Masukkan angka kedua: 2

Hasil dari 10 / 2 adalah: 5
