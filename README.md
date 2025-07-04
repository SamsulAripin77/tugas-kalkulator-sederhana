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
```

---

# 📊 Tugas 2: Sistem Nilai Raport Siswa (PHP Console App)

## 🎯 Tujuan

Melatih konsep pemrograman dasar PHP:
- Array dan associative array
- Perulangan (`foreach`, `for`)
- Function (parameter, return value)
- Operator perbandingan dan logika
- Scope variabel (`global` dan `local`)

---

## 📄 Deskripsi Tugas

Buat aplikasi berbasis **console/terminal** yang menampilkan **daftar nilai siswa** dan status **kelulusan** berdasarkan nilai.

---

## ✅ Fitur Wajib

1. Gunakan **associative array** untuk menyimpan data siswa dan nilai:

```php
$siswa = [
  "Andi" => 78,
  "Budi" => 65,
  "Citra" => 90,
  "Dina" => 45
];
```

2. Buat function bernama cekKelulusan($nilai):

    - Kembalikan "Lulus" jika nilai >= 70

    - Kembalikan "Tidak Lulus" jika nilai < 70

3. Gunakan perulangan foreach untuk:

    Mencetak nama siswa, nilai, dan status kelulusan

4. Hitung dan tampilkan:

    - Total siswa

    - Nilai rata-rata

    - Jumlah yang lulus dan tidak lulus

5. Gunakan variabel global untuk menyimpan total nilai atau jumlah siswa.
```
   === Daftar Nilai Siswa ===

Andi   : 78 - Lulus
Budi   : 65 - Tidak Lulus
Citra  : 90 - Lulus
Dina   : 45 - Tidak Lulus

Total siswa     : 4
Rata-rata nilai : 69.5
Jumlah Lulus    : 2
Jumlah Tidak Lulus : 2
```

 ### Validasi Wajib

   - Nilai harus antara 0 - 100

   - Jangan cetak data jika nilainya tidak valid (gunakan if)

   - Gunakan number_format() untuk menampilkan rata-rata dengan 1 angka desimal
