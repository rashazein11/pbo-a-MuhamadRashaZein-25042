# Praktikum 10 — Exception Handling dan Pemrograman Defensif

**Nama:** Muhamad Rasha Zein  
**NPM:** 4525210042  
**Kelas:** PBO A 2025/2026  
**Dosen Pengampu:** Adi Wahyu Pribadi, S.Si., M.Kom

Praktikum ini menerapkan exception domain yang membawa data, merapikan alur peminjaman dengan *guard clause*, menangani masukan dan kegagalan secara terkontrol, serta mengekspor laporan buku. Implementasi tersedia dalam Java dan PHP.

## Java

### Hierarki exception

#### Sebelum

![Hierarki exception Java sebelum perbaikan](../../ss-codingan-sebelum/java/prak10-PerpustakaanException.png)

![BukuTidakDitemukanException Java sebelum perbaikan](../../ss-codingan-sebelum/java/prak10-BukuTidakDitemukanException.png)

![AnggotaTidakDitemukanException Java sebelum perbaikan](../../ss-codingan-sebelum/java/prak10-AnggotaTidakDitemukanException.png)

![BukuSedangDipinjamException Java sebelum perbaikan](../../ss-codingan-sebelum/java/prak10-BukuSedangDipinjamException.png)

![BatasPinjamTerlampauiException Java sebelum perbaikan](../../ss-codingan-sebelum/java/prak10-BatasPinjamTerlampauiException.png)

#### Sesudah

![Hierarki exception Java setelah perbaikan](../../ss-codingan-sesudah/java/prak10-PerpustakaanException.png)

![BukuTidakDitemukanException Java setelah perbaikan](../../ss-codingan-sesudah/java/prak10-BukuTidakDitemukanException.png)

![AnggotaTidakDitemukanException Java setelah perbaikan](../../ss-codingan-sesudah/java/prak10-AnggotaTidakDitemukanException.png)

![BukuSedangDipinjamException Java setelah perbaikan](../../ss-codingan-sesudah/java/prak10-BukuSedangDipinjamException.png)

![BatasPinjamTerlampauiException Java setelah perbaikan](../../ss-codingan-sesudah/java/prak10-BatasPinjamTerlampauiException.png)

Semua exception domain diturunkan dari `PerpustakaanException`. Setiap exception spesifik membawa data penyebab kegagalan—ISBN, ID anggota, judul buku, atau batas pinjam—agar pemanggil dapat menampilkan informasi yang tepat tanpa mengurai teks pesan.

### LibraryService.java

#### Sebelum

![LibraryServiceKotor Java sebelum refactoring](../../ss-codingan-sebelum/java/prak10-LibraryServiceKotor.png)

#### Sesudah

![LibraryService Java setelah refactoring](../../ss-codingan-sesudah/java/prak10-LibraryService.png)

`pinjam()` sebelumnya memakai percabangan bersarang dan hanya mengembalikan `false` saat gagal. Setelah refactoring, validasi anggota, buku, stok, dan batas pinjam dilakukan lebih awal dengan *guard clause* serta exception yang menjelaskan penyebabnya.

### Main.java dan PerpustakaanService.java

![Main Java setelah perbaikan](../../ss-codingan-sesudah/java/prak10-Main.png)

![PerpustakaanService Java setelah perbaikan](../../ss-codingan-sesudah/java/prak10-PerpustakaanService.png)

Antarmuka konsol menangani masukan tidak valid dan menangkap exception domain melalui satu blok `catch`, lalu menampilkan data spesifik exception. Ekspor laporan menggunakan *try-with-resources* agar berkas ditutup otomatis.

## PHP

### Hierarki exception

#### Sebelum

![Hierarki exception PHP sebelum perbaikan](../../ss-codingan-sebelum/php/prak10-exceptions.png)

#### Sesudah

![PerpustakaanException PHP setelah perbaikan](../../ss-codingan-sesudah/php/prak10-PerpustakaanException.png)

![BukuTidakDitemukanException PHP setelah perbaikan](../../ss-codingan-sesudah/php/prak10-BukuTidakDitemukanException.png)

![AnggotaTidakDitemukanException PHP setelah perbaikan](../../ss-codingan-sesudah/php/prak10-AnggotaTidakDitemukanException.png)

![BukuSedangDipinjamException PHP setelah perbaikan](../../ss-codingan-sesudah/php/prak10-BukuSedangDipinjamException.png)

![BatasPinjamTerlampauiException PHP setelah perbaikan](../../ss-codingan-sesudah/php/prak10-BatasPinjamTerlampauiException.png)

Exception PHP mengikuti hierarki domain yang sama. Data seperti ISBN, ID anggota, judul, dan batas pinjam disimpan pada exception dan tersedia melalui getter.

### LibraryService.php

#### Sebelum

![LibraryServiceKotor PHP sebelum refactoring](../../ss-codingan-sebelum/php/prak10-LibraryServiceKotor.png)

#### Sesudah

![LibraryService PHP setelah refactoring](../../ss-codingan-sesudah/php/prak10-LibraryService.png)

Versi setelah perbaikan memakai *guard clause* dan melempar exception domain saat anggota tidak terdaftar, buku tidak ditemukan, stok habis, atau batas pinjam tercapai.

### Main.php

![Main PHP setelah perbaikan](../../ss-codingan-sesudah/php/prak10-Main.png)

Demo PHP menangkap kegagalan domain dan mengekspor laporan. Blok `finally` menutup berkas setelah proses penulisan, termasuk ketika terjadi exception.

## Hasil keseluruhan

### Java — sebelum

![Hasil Java sebelum perbaikan](../../ssan-sebelum/images-java/pertemuan10.png)

### Java — setelah

![Hasil Java setelah perbaikan](../../ssan-setelah/ssan-java-setelah/prak-setelah-10.png)

### PHP — sebelum

![Hasil PHP sebelum perbaikan](../../ssan-sebelum/images-php/pert-php-10.png)

### PHP — setelah

![Hasil PHP setelah perbaikan](../../ssan-setelah/ssan-php-setelah/prak-setelah-php-10.png)

Kedua implementasi memperlihatkan penanganan kegagalan peminjaman yang lebih jelas dan ekspor laporan buku. Java menggunakan *try-with-resources*, sedangkan PHP menutup sumber daya secara eksplisit di `finally`.

## Berkas praktikum

- [Sumber Java](src/starter/java/src/main/java/id/ac/univpancasila/perpustakaan/)
- [Sumber PHP](src/starter/php/src/)
- [Skenario uji](src/starter/skenario-uji.md)

### Kesimpulan

Exception domain yang membawa data membuat kegagalan lebih informatif bagi pemanggil. *Guard clause* meratakan alur utama peminjaman, sedangkan pengelolaan sumber daya memastikan berkas laporan ditutup dengan aman setelah digunakan.
