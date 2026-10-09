# Panduan Laporan Sebelum & Sesudah — PBO A (Muhamad Rasha Zein, 4525210042)

## 1. Struktur folder 

```
pbo-a-MuhamadRashaZein-25042/
├── Materi-Pembelajaran&Codingan-sebelumdibenerin/      ← KODE SEBELUM
│   └── codingansebelum/
│       ├── pertemuan02/   Mahasiswa.java, Main.java, Mahasiswa.php, main.php, Modul-Praktikum-02-*.docx
│       ├── pertemuan03/   RekeningBank.java, Main.java, RekeningBank.php, main.php
│       ├── pertemuan04/
│       │   ├── Pewarisan.zip
│       │   └── Pewarisan/
│       │       ├── java/  Pegawai, PegawaiTetap, PegawaiKontrak, Main (.java)
│       │       ├── php/   Pegawai.php, main.php
│       │       └── 1695367759.pptx, 1789524381.pptx
│       ├── pertemuan05/   BangunDatar, Lingkaran, Persegi, AntiPattern, Main (.java),
│       │                  BangunDatar.php, main.php, notifikasi.php, Modul-*.docx, *.pptx
│       └── pertemuan06/06-abstract-class-interface-enum-dan-trait/
│           ├── README.md, Modul-Praktikum-06-*.docx
│           └── starter/
│               ├── java/  Movable, Fuelable, Kendaraan, Mobil, TipeBahanBakar, Main (.java)
│               └── php/   abstraksi.php, main.php
│
└── pbo-a-MuhamadRashaZein-25042/                       ← KODE SESUDAH (repo Git)
    ├── prak01/  LAPORAN GIT & GITHUB_...docx / .pdf
    ├── prak02/  src/java, src/php, bin, .vscode
    ├── prak03/  src/java, src/php, bin, .vscode
    ├── prak04/  src/java, src/php, bin, .vscode, README.md
    ├── prak05/  src/java (+AntiPatternRefaktor, Segitiga, Trapesium), src/php, bin, .vscode
    └── prak06/  src/java (+Sepeda), src/php, bin, .vscode, README.md, keputusan.md
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

## 3. Cara run — SESUDAH

Dari folder `pbo-a-MuhamadRashaZein-25042/pbo-a-MuhamadRashaZein-25042/`.

| Pert. | Java | PHP |
|---|---|---|
| 02 | `cd prak02`<br>`javac -d bin src/java/*.java`<br>`java -cp bin Main` | `php src/php/main.php` |
| 03 | `cd prak03` (perintah sama) | `php src/php/main.php` |
| 04 | `cd prak04` (perintah sama) | `php src/php/main.php` |
| 05 | `cd prak05` (perintah sama)<br>tambahan: `java -cp bin AntiPattern`, `java -cp bin AntiPatternRefaktor` | `php src/php/main.php`<br>`php src/php/BangunDatar.php`<br>`php src/php/notifikasi.php` |
| 06 | `cd prak06`<br>`javac -d bin src/java/*.java`<br>`java -Dfile.encoding=UTF-8 -cp bin Main` | `php src/php/main.php` |

Windows CMD: ganti `src/java/*.java` dengan `src\java\*.java` bila perlu, dan jalankan `chcp 65001` agar karakter `—` tampil.

## 4. Yang di-screenshot & hasil yang diharapkan

Hasil di bawah sudah saya jalankan sendiri (JDK 21, PHP 8.3).

| Pert. | SEBELUM (screenshot ini) | SESUDAH (screenshot ini) |
|---|---|---|
| 02 | Java & PHP: `akhir=0.00 mutu=?`; dua baris `MASALAH: ... seharusnya ditolak!` | `akhir=84.90 mutu=A`, `59.30 D`, `92.00 A`; dua baris `Ditolak: ...` |
| 03 | Java: jumlah rekening `-1`, `MASALAH: penarikan...`, bunga `Rp0.00`. PHP: **Fatal error** `TODO 5 belum dikerjakan` | Java: jumlah rekening `2`, penarikan ditolak, bunga `Rp37,500.00`. PHP: lihat catatan di bagian 6 |
| 04 | Java & PHP: semua gaji `Rp0` | Java: Ani `7,800,000`, total `12,800,000`. PHP: 4 pegawai, total `26.440.000,00` |
| 05 | Java & PHP: luas/keliling `0.00` | Java: Lingkaran 153.94, Persegi 25.00, total 178.94. PHP: + Segitiga 6.00, total 184.94 |
| 06 | Java: `(TODO 1 belum dikerjakan)`, biaya `Rp0`. PHP: label kosong `?`, biaya `Rp0` | Java: Avanza & Polygon, biaya `Rp540,000`. PHP: biaya `Rp450.000` + bagian Trait |

Tambahan untuk pert. 04 (sebelum): sekalian screenshot pesan error kompilasi dari percobaan di `catatan.md` bila dosen memintanya. Untuk pert. 06 (sesudah): screenshot `keputusan.md` dan error saat `isiPenuh(sepeda)` dibuka komentarnya.

## 5. Temuan pada kode SESUDAH (sebaiknya diperbaiki sebelum screenshot)

1. **prak03 PHP**: `RekeningBank.php` masih TODO, dan `main.php` adalah salinan prak02 (memanggil `Mahasiswa.php` yang tidak ada di prak03) → Fatal error. `main.php` sebaiknya memakai isi `pertemuan03/main.php` dari folder sebelum.
2. **prak03 Java**: constructor ringkas belum `this(nomor, pemilik, 0)`, penghitung jadi `2` (harusnya `3`); validasi nomor kosong & saldo awal negatif belum ada.
3. **prak04 Java**: `Main.java` hanya berisi 2 pegawai; `Dosen` & `PegawaiHarian` baru ada di PHP.
4. **prak05 Java**: `Main.java` belum menambahkan `Segitiga` & `Trapesium` ke array.
5. **prak05 `AntiPatternRefaktor.java`**: `"%.2f5n"` → seharusnya `"%.2f%n"` (kini tercetak `184.945n`).
6. **prak06**: tarif Java (Bensin 12.000) ≠ PHP (Bensin 10.000, Solar 6.800). Samakan bila ingin hasil Java–PHP sebanding.
7. **prak04 & prak06**: `README.md` bawaan VS Code diganti README baru.
