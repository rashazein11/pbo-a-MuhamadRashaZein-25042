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
│       ├── pertemuan07/
│       ├── pertemuan09/
│       │   └── 09-package-namespace-dan-build-tool/
│       │       └── starter/
│       │           ├── java/
│       │           └── php/
│       └── pertemuan10/
│           └── starter/
│               ├── java/
│               ├── php/
│               └── skenario-uji.md
│
├── pbo-a-MuhamadRashaZein-25042/
│   ├── prak01/
│   ├── prak02/
│   ├── prak03/
│   ├── prak04/
│   ├── prak05/
│   ├── prak06/
│   ├── prak07/
│   ├── prak08/
│   │   └── UTS_PBO_A_4525210042_mUHAMAD-RASHA-ZEIN/
│   │       ├── java/
│   │       └── screenshots/
│   ├── prak09/
│   │   └── src/main/java/id/ac/univpancasila/perpustakaan/
│   │       ├── model/
│   │       ├── service/
│   │       └── util/
│   └── prak10/
│       └── src/starter/
│           ├── java/
│           │   ├── pom.xml
│           │   └── src/main/java/id/ac/univpancasila/perpustakaan/
│           │       ├── Main.java
│           │       ├── exception/
│           │       └── service/
│           ├── php/
│           │   ├── composer.json
│           │   ├── Main.php
│           │   └── src/
│           │       ├── Exception/
│           │       └── Service/
│           └── skenario-uji.md
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
Gunakan tanda kutip jika membuka path folder tersebut dari root repository karena namanya memuat `&`.

| Pert. | Java | PHP |
|---|---|---|
| 02 | `cd pertemuan02`<br>`javac *.java && java Main` | `php pertemuan02/main.php` |
| 03 | `cd pertemuan03`<br>`javac *.java && java Main` | `php pertemuan03/main.php` |
| 04 | `cd pertemuan04/Pewarisan/java`<br>`javac *.java && java Main` | `php pertemuan04/Pewarisan/php/main.php` |
| 05 | `cd pertemuan05`<br>`javac *.java && java Main` (juga `java AntiPattern`) | `php pertemuan05/main.php`<br>`php pertemuan05/notifikasi.php` |
| 06 | `cd pertemuan06/06-abstract-class-interface-enum-dan-trait/starter/java`<br>`javac *.java && java -Dfile.encoding=UTF-8 Main` | `php pertemuan06/06-abstract-class-interface-enum-dan-trait/starter/php/main.php` |
| 07 | `cd pertemuan07/starter/java`<br>`javac -d out $(find . -name "*.java")`<br>`java -cp out Main` | `php pertemuan07/starter/php/main.php` |
| 08 | Tidak ada folder praktikum 08 pada materi sebelum. | — |
| 09 | Starter Java masih berupa template Maven dengan TODO; belum siap dijalankan. | Starter PHP berisi template Composer dan panduan struktur, belum ada program utama untuk dijalankan. |
| 10 | Starter berisi kerangka exception dan `LibraryServiceKotor.java`; belum merupakan aplikasi lengkap yang bisa dijalankan langsung. | Starter berisi kerangka exception dan `LibraryServiceKotor.php`; belum merupakan aplikasi lengkap yang bisa dijalankan langsung. |

Untuk UML praktikum 07, buka diagram kerangka di `pertemuan07/starter/uml/perpustakaan-kerangka.puml`.

## 3. Cara run — SESUDAH

Dari folder `pbo-a-MuhamadRashaZein-25042/` di root repository.

| Pert. | Java | PHP |
|---|---|---|
| 02 | `cd prak02`<br>`javac -d bin src/java/*.java`<br>`java -cp bin Main` | `php src/php/main.php` |
| 03 | `cd prak03` (perintah sama) | `php src/php/main.php` |
| 04 | `cd prak04` (perintah sama) | `php src/php/main.php` |
| 05 | `cd prak05` (perintah sama)<br>tambahan: `java -cp bin AntiPattern`, `java -cp bin AntiPatternRefaktor` | `php src/php/main.php`<br>`php src/php/BangunDatar.php`<br>`php src/php/notifikasi.php` |
| 06 | `cd prak06`<br>`javac -d bin src/java/*.java`<br>`java -Dfile.encoding=UTF-8 -cp bin Main` | `php src/php/main.php` |
| 07 | `cd prak07`<br>`javac -d bin $(find src/java -name "*.java")`<br>`java -cp bin Main` | `php src/php/main.php` |
| 08 | `cd prak08/UTS_PBO_A_4525210042_mUHAMAD-RASHA-ZEIN/java`<br>`javac -d out *.java`<br>`java -cp out Main` | — |
| 09 | Belum bisa dijalankan langsung: folder `prak09` saat ini belum memiliki struktur proyek lengkap maupun `pom.xml`. | — |
| 10 | `cd prak10/src/starter/java`<br>`mvn clean compile exec:java` | `cd prak10/src/starter/php`<br>`composer install` (pertama kali)<br>`php Main.php` |

Untuk UML praktikum 07, buka diagram di `prak07/src/uml/perpustakaan-kerangka.puml`.

## 4. Yang di-screenshot & hasil yang diharapkan

Hasil praktikum 02–07 sudah saya jalankan sendiri (JDK 21, PHP 8.3). Program Java praktikum 08 dan Java/PHP praktikum 10 juga sudah diuji.

| Pert. | SEBELUM (screenshot ini) | SESUDAH (screenshot ini) |
|---|---|---|
| 02 | Java & PHP: `akhir=0.00 mutu=?`; dua baris `MASALAH: ... seharusnya ditolak!` | `akhir=84.90 mutu=A`, `59.30 D`, `92.00 A`; dua baris `Ditolak: ...` |
| 03 | Java: jumlah rekening `-1`, `MASALAH: penarikan...`, bunga `Rp0.00`. PHP: **Fatal error** `TODO 5 belum dikerjakan` | Java: jumlah rekening `2`, penarikan ditolak, bunga `Rp37,500.00`. PHP: lihat [README Praktikum 03](pbo-a-MuhamadRashaZein-25042/prak03/README.md) untuk catatan hasil. |
| 04 | Java & PHP: semua gaji `Rp0` | Java: Ani `7,800,000`, total `12,800,000`. PHP: 4 pegawai, total `26.440.000,00` |
| 05 | Java & PHP: luas/keliling `0.00` | Java: Lingkaran 153.94, Persegi 25.00, total 178.94. PHP: + Segitiga 6.00, total 184.94 |
| 06 | Java: `(TODO 1 belum dikerjakan)`, biaya `Rp0`. PHP: label kosong `?`, biaya `Rp0` | Java: Avanza & Polygon, biaya `Rp540,000`. PHP: biaya `Rp450.000` + bagian Trait |
| 07 | Java: buku `0 bab`, jurusan `0 mahasiswa`, dan koleksi bab berhasil diubah dari luar. PHP: buku `0 bab`, jurusan `0 mahasiswa`. UML: diagram masih berupa kerangka TODO dengan relasi `Koleksi`–`Bab` yang keliru. | Java & PHP: buku memiliki 3 bab, jurusan terisi 2 mahasiswa lalu 1 setelah Budi keluar; objek Budi tetap ada. Java juga menolak perubahan bab dari luar. UML: diagram relasi komposisi, agregasi, asosiasi, dan dependensi sudah dilengkapi. |
| 08 | — (praktikum UTS ini tidak memiliki folder versi sebelum) | Java: 4 transaksi parkir berhasil; total biaya motor Rp7.500 dan Rp12.500, mobil Rp105.000 dan Rp120.000. |
| 09 | Java: compile gagal dengan 43 error karena package `model` tidak ditemukan. | Screenshot menunjukkan program perpustakaan berhasil berjalan: 3 buku, 3 anggota, 2 transaksi, dan denda Rp5.000. Catatan: folder `prak09` saat ini belum memiliki proyek Maven lengkap sehingga hasil belum dapat dijalankan ulang dari folder tersebut. |
| 10 | Java dan PHP: peminjaman berhasil, tetapi kegagalan tidak menjelaskan penyebabnya; implementasi exception masih menampilkan beberapa pesan `TODO`. | Java: peminjaman berhasil, lalu menampilkan alasan spesifik saat batas pinjam tercapai, stok habis, ISBN tidak ditemukan, atau anggota belum terdaftar. PHP: tujuh percobaan demo menunjukkan peminjaman berhasil dan empat jenis kegagalan domain; laporan berhasil diekspor dan berkas ditutup di `finally`. |

## 5. Lokasi screenshot

Screenshot hasil program ditata menurut bahasa dan tahap pengerjaan:

- Sebelum: `ssan-sebelum/images-java/` dan `ssan-sebelum/images-php/`.
- Sesudah: `ssan-setelah/ssan-java-setelah/` dan `ssan-setelah/ssan-php-setelah/`.

Screenshot kode dari VS Code untuk praktikum 02–07 dan 09–10 disimpan di:

- Sebelum: `ss-codingan-sebelum/java/` dan `ss-codingan-sebelum/php/`.
- Sesudah: `ss-codingan-sesudah/java/` dan `ss-codingan-sesudah/php/`.

Screenshot kode dan output UTS praktikum 08 berada di `prak08/UTS_PBO_A_4525210042_mUHAMAD-RASHA-ZEIN/screenshots/`. Nama file screenshot menunjukkan kelas atau program yang ditampilkan. Screenshot khusus praktikum 10 memakai awalan `prak10-` untuk kode dan `10` untuk hasil program.