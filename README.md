# Panduan Laporan Sebelum & Sesudah — PBO A (Muhamad Rasha Zein, 4525210042)

## 1. Struktur folder 

```
.
├── Materi-Pembelajaran&Codingan-sebelumdibenerin/
│   └── codingansebelum/
│       ├── pertemuan02/
│       ├── pertemuan03/
│       ├── pertemuan04/
│       ├── pertemuan05/
│       ├── pertemuan06/
│       └── pertemuan07/
│
├── pbo-a-MuhamadRashaZein-25042/
│   ├── prak01/
│   ├── prak02/
│   ├── prak03/
│   ├── prak04/
│   ├── prak05/
│   ├── prak06/
│   └── prak07/
│
├── ss-codingan-sebelum/
│   ├── java/
│   ├── php/
│   └── uml/
├── ss-codingan-sesudah/
│   ├── java/
│   ├── php/
│   └── uml/
├── ssan-sebelum/
│   ├── images-java/
│   ├── images-php/
│   └── images-uml/
└── ssan-setelah/
    ├── ssan-java-setelah/
    ├── ssan-php-setelah/
    └── ssan-uml-setelah/
```

## 2. Cara run — SEBELUM

Semua perintah dijalankan dari folder `Materi-Pembelajaran&Codingan-sebelumdibenerin/codingansebelum/`.
Tanda kutip wajib karena nama folder memuat `&`.

| Pert. | Java | PHP |
|---|---|---|
| 02 | `cd pertemuan02`<br>`javac *.java && java Main` | `php pertemuan02/main.php` |
| 03 | `cd pertemuan03`<br>`javac *.java && java Main` | `php pertemuan03/main.php` |
| 04 | `cd pertemuan04/Pewarisan/java`<br>`javac *.java && java Main` | `php pertemuan04/Pewarisan/php/main.php` |
| 05 | `cd pertemuan05`<br>`javac *.java && java Main` (juga `java AntiPattern`) | `php pertemuan05/main.php`<br>`php pertemuan05/notifikasi.php` |
| 06 | `cd pertemuan06/06-abstract-class-interface-enum-dan-trait/starter/java`<br>`javac *.java && java -Dfile.encoding=UTF-8 Main` | `php pertemuan06/06-abstract-class-interface-enum-dan-trait/starter/php/main.php` |
| 07 | `cd pertemuan07/starter/java`<br>`javac -d out $(find . -name "*.java")`<br>`java -cp out Main` | `php pertemuan07/starter/php/main.php` |

Untuk UML praktikum 07, buka diagram kerangka di `pertemuan07/starter/uml/perpustakaan-kerangka.puml`.

## 3. Cara run — SESUDAH

Dari folder `pbo-a-MuhamadRashaZein-25042/pbo-a-MuhamadRashaZein-25042/`.

| Pert. | Java | PHP |
|---|---|---|
| 02 | `cd prak02`<br>`javac -d bin src/java/*.java`<br>`java -cp bin Main` | `php src/php/main.php` |
| 03 | `cd prak03` (perintah sama) | `php src/php/main.php` |
| 04 | `cd prak04` (perintah sama) | `php src/php/main.php` |
| 05 | `cd prak05` (perintah sama)<br>tambahan: `java -cp bin AntiPattern`, `java -cp bin AntiPatternRefaktor` | `php src/php/main.php`<br>`php src/php/BangunDatar.php`<br>`php src/php/notifikasi.php` |
| 06 | `cd prak06`<br>`javac -d bin src/java/*.java`<br>`java -Dfile.encoding=UTF-8 -cp bin Main` | `php src/php/main.php` |
| 07 | `cd prak07`<br>`javac -d bin $(find src/java -name "*.java")`<br>`java -cp bin Main` | `php src/php/main.php` |

Untuk UML praktikum 07, buka diagram di `prak07/src/uml/perpustakaan-kerangka.puml`.

## 4. Yang di-screenshot & hasil yang diharapkan

Hasil di bawah sudah saya jalankan sendiri (JDK 21, PHP 8.3).

| Pert. | SEBELUM (screenshot ini) | SESUDAH (screenshot ini) |
|---|---|---|
| 02 | Java & PHP: `akhir=0.00 mutu=?`; dua baris `MASALAH: ... seharusnya ditolak!` | `akhir=84.90 mutu=A`, `59.30 D`, `92.00 A`; dua baris `Ditolak: ...` |
| 03 | Java: jumlah rekening `-1`, `MASALAH: penarikan...`, bunga `Rp0.00`. PHP: **Fatal error** `TODO 5 belum dikerjakan` | Java: jumlah rekening `2`, penarikan ditolak, bunga `Rp37,500.00`. PHP: lihat catatan di bagian 7 |
| 04 | Java & PHP: semua gaji `Rp0` | Java: Ani `7,800,000`, total `12,800,000`. PHP: 4 pegawai, total `26.440.000,00` |
| 05 | Java & PHP: luas/keliling `0.00` | Java: Lingkaran 153.94, Persegi 25.00, total 178.94. PHP: + Segitiga 6.00, total 184.94 |
| 06 | Java: `(TODO 1 belum dikerjakan)`, biaya `Rp0`. PHP: label kosong `?`, biaya `Rp0` | Java: Avanza & Polygon, biaya `Rp540,000`. PHP: biaya `Rp450.000` + bagian Trait |
| 07 | Java: buku `0 bab`, jurusan `0 mahasiswa`, dan koleksi bab berhasil diubah dari luar. PHP: buku `0 bab`, jurusan `0 mahasiswa`. UML: diagram masih berupa kerangka TODO dengan relasi `Koleksi`–`Bab` yang keliru. | Java & PHP: buku memiliki 3 bab, jurusan terisi 2 mahasiswa lalu 1 setelah Budi keluar; objek Budi tetap ada. Java juga menolak perubahan bab dari luar. UML: diagram relasi komposisi, agregasi, asosiasi, dan dependensi sudah dilengkapi. |

## 6. Screenshot kode sumber Java & PHP

Screenshot kode dari VS Code  untuk file inti praktikum 02–07 disimpan terpisah:

- `ss-codingan-sebelum/java/` dan `ss-codingan-sebelum/php/`
- `ss-codingan-sesudah/java/` dan `ss-codingan-sesudah/php/`

Nama file menunjukkan praktikum dan kelas/program yang ditampilkan. Screenshot hasil menjalankan program tetap berada di folder `ssan-sebelum/` dan `ssan-setelah/`.