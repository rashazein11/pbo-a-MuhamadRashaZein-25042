# Praktikum 04 — Pewarisan (Inheritance)

**Nama:** Muhamad Rasha Zein  
**NPM:** 4525210042  
**Kelas:** PBO A 2025/2026  
**Dosen Pengampu:** Adi Wahyu Pribadi, S.Si., M.Kom

## File PegawaiTetap.java

### Sebelum

[Lihat kode PegawaiTetap.java sebelum](../../Materi-Pembelajaran&Codingan-sebelumdibenerin/codingansebelum/pertemuan04/Pewarisan/java/PegawaiTetap.java).

**Tugas:** menerapkan pewarisan dari `Pegawai`, menggunakan `super` untuk meneruskan data ke constructor induk, dan menghitung tunjangan masa kerja sebesar 2% per tahun dengan batas maksimum 40%.

### Setelah

[Lihat kode PegawaiTetap.java setelah](src/java/PegawaiTetap.java).

Constructor memanggil constructor induk, sedangkan perhitungan gaji memakai `super.hitungGaji()` sebagai gaji dasar lalu menambahkan tunjangan masa kerja.

## File Pegawai.php

### Sebelum

[Lihat kode Pegawai.php sebelum](../../Materi-Pembelajaran&Codingan-sebelumdibenerin/codingansebelum/pertemuan04/Pewarisan/php/Pegawai.php).

**Tugas:** membuat hierarki pegawai dan menerapkan perhitungan gaji untuk pegawai tetap, kontrak, dosen, dan pegawai harian.

### Setelah

[Lihat kode Pegawai.php setelah](src/php/Pegawai.php).

PHP memuat kelas abstrak `Pegawai` dan turunannya. Gaji tetap memakai tunjangan masa kerja, dosen memperoleh tunjangan fungsional, dan pegawai harian dihitung berdasarkan hari kerja.

## Hasil keseluruhan

### Java — sebelum

![Hasil Java sebelum perbaikan](../../ssan-sebelum/images-java/pertemuan04.png)

### Java — setelah

![Hasil Java setelah perbaikan](../../ssan-setelah/ssan-java-setelah/prak-setelah-04.png)

### PHP — sebelum

![Hasil PHP sebelum perbaikan](../../ssan-sebelum/images-php/pert-php-04.png)

### PHP — setelah

![Hasil PHP setelah perbaikan](../../ssan-setelah/ssan-php-setelah/prak-setelah-php-04.png)

### Kesimpulan

Pewarisan memungkinkan kelas turunan menggunakan data dan perilaku dasar dari induknya, lalu menambahkan aturan gaji khusus. Hasil setelah perbaikan menunjukkan perhitungan gaji tidak lagi bernilai nol.
