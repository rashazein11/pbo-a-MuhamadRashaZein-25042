# Praktikum 07 — Pemodelan Relasi Objek dan UML

**Nama:** Muhamad Rasha Zein  
**NPM:** 4525210042  
**Kelas:** PBO A 2025/2026  
**Dosen Pengampu:** Adi Wahyu Pribadi, S.Si., M.Kom

## File Buku.java

### Sebelum

[Lihat kode Buku.java sebelum](../../Materi-Pembelajaran&Codingan-sebelumdibenerin/codingansebelum/pertemuan07/07-pemodelan-relasi-objek-dan-uml/starter/java/model/Buku.java).

**Tugas:** melengkapi relasi **komposisi** Buku–Bab: tolak jumlah eksemplar negatif, buat `Bab` hanya di dalam `Buku` lewat `tambahBab`, kembalikan salinan tak-berubah di `getBab()`, dan tolak `kurangiStok()` saat stok nol. Pada versi sebelum, bagian tersebut masih berupa TODO.

### Setelah

[Lihat kode Buku.java setelah](src/java/model/Buku.java).

`Buku` memvalidasi jumlah eksemplar, nomor, dan judul bab. `Bab` dibuat di dalam `Buku` (parameter berupa nomor dan judul, bukan objek `Bab`), `getBab()` mengembalikan `List.copyOf(bab)` sehingga koleksi internal tidak bisa diubah dari luar, dan `kurangiStok()` melempar exception bila stok sudah habis.

## File Jurusan.java

### Sebelum

[Lihat kode Jurusan.java sebelum](../../Materi-Pembelajaran&Codingan-sebelumdibenerin/codingansebelum/pertemuan07/07-pemodelan-relasi-objek-dan-uml/starter/java/model/Jurusan.java).

**Tugas:** melengkapi relasi **agregasi** Jurusan–Mahasiswa: menerima objek `Mahasiswa` dari luar, menolak `null` dan duplikat, melepas mahasiswa tanpa merusak objeknya, serta mengembalikan salinan tak-berubah.

### Setelah

[Lihat kode Jurusan.java setelah](src/java/model/Jurusan.java).

`daftarkan` menolak `null` dan mahasiswa dengan NIM yang sudah terdaftar, `keluarkan` hanya menghapus referensi dari list sehingga objek `Mahasiswa` tetap hidup, dan `getMahasiswa()` mengembalikan `List.copyOf(mahasiswa)`.

## File PerpustakaanService.java

### Sebelum

[Lihat kode PerpustakaanService.java sebelum](../../Materi-Pembelajaran&Codingan-sebelumdibenerin/codingansebelum/pertemuan07/07-pemodelan-relasi-objek-dan-uml/starter/java/service/PerpustakaanService.java).

**Tugas:** menyesuaikan lapisan layanan dengan class diagram: menentukan penyimpanan koleksi dan anggota (agregasi), serta mengisi `tambahKoleksi`, `cariKoleksi`, `pinjam`, dan `kembalikan`.

### Setelah

[Lihat kode PerpustakaanService.java setelah](src/java/service/PerpustakaanService.java).

Layanan menyimpan `Buku` dan `Mahasiswa` dalam `Map` berkunci nomor induk/NIM (agregasi, objeknya datang dari luar). `pinjam` memeriksa anggota, buku, duplikasi pinjaman, dan stok; `kembalikan` memeriksa bahwa buku memang sedang dipinjam lalu menambah stok. Method `daftarkanAnggota` ditambahkan agar sesuai dengan diagram.

## File relasi.php

### Sebelum

[Lihat kode relasi.php sebelum](../../Materi-Pembelajaran&Codingan-sebelumdibenerin/codingansebelum/pertemuan07/07-pemodelan-relasi-objek-dan-uml/starter/php/relasi.php).

**Tugas:** menerapkan padanan PHP: constructor `Bab`, validasi `Buku`, instansiasi `Bab` di dalam `Buku` (komposisi), pengurangan stok, serta `daftarkan`/`keluarkan` pada `Jurusan` (agregasi).

### Setelah

[Lihat kode relasi.php setelah](src/php/relasi.php).

Implementasi PHP menambahkan enum `JenisKeanggotaan` dan `StatusKoleksi`, `Buku::tambahBab` membuat `Bab` di dalam kelas, `kurangiStok` menolak stok kosong, dan `Jurusan` mencegah duplikat NIM serta melepas mahasiswa tanpa merusak objeknya.

## File perpustakaan-kerangka.puml

### Sebelum

[Lihat kode perpustakaan-kerangka.puml sebelum](../../Materi-Pembelajaran&Codingan-sebelumdibenerin/codingansebelum/pertemuan07/07-pemodelan-relasi-objek-dan-uml/starter/uml/perpustakaan-kerangka.puml).

**Tugas:** melengkapi class diagram: tiga turunan `Koleksi`, kelas `Anggota` dan `Peminjaman`, enum, relasi beserta multiplicity, serta memperbaiki relasi `Koleksi <|-- Bab` yang salah.

### Setelah

[Lihat kode perpustakaan-kerangka.puml setelah](src/uml/perpustakaan-kerangka.puml).

Diagram memuat komposisi (`Buku *-- Bab`, `Anggota *-- Peminjaman`), agregasi (`Jurusan o-- Mahasiswa`, `PerpustakaanService o-- Koleksi/Anggota`), asosiasi (`Peminjaman --> Koleksi`), dan dependensi (`PerpustakaanService ..> Peminjaman`), lengkap dengan multiplicity di kedua ujung.

## Hasil keseluruhan

### Java — sebelum

![Hasil Java sebelum perbaikan](../../ssan-sebelum/images-java/pertemuan07.png)

### Java — setelah

![Hasil Java setelah perbaikan](../../ssan-setelah/ssan-java-setelah/prak-setelah-07.png)

### PHP — sebelum

![Hasil PHP sebelum perbaikan](../../ssan-sebelum/images-php/pert-php-07.png)

### PHP — setelah

![Hasil PHP setelah perbaikan](../../ssan-setelah/ssan-php-setelah/prak-setelah-php-07.png)

### UML — sebelum

![Class diagram sebelum perbaikan](../../ssan-sebelum/images-uml/pert-uml-07.png)

### UML — setelah

![Class diagram setelah perbaikan](../../ssan-setelah/ssan-uml-setelah/prak-setelah-uml-07.png)

## Screenshot kode sumber

### JAVA — Buku.java

#### Sebelum

![Kode Buku.java sebelum perbaikan (bagian 1)](../../ss-codingan-sebelum/java/prak07-Buku-1.png)

![Kode Buku.java sebelum perbaikan (bagian 2)](../../ss-codingan-sebelum/java/prak07-Buku-2.png)

#### Sesudah

![Kode Buku.java sesudah perbaikan (bagian 1)](../../ss-codingan-sesudah/java/prak07-Buku-1.png)

![Kode Buku.java sesudah perbaikan (bagian 2)](../../ss-codingan-sesudah/java/prak07-Buku-2.png)

### JAVA — Jurusan.java

#### Sebelum

![Kode Jurusan.java sebelum perbaikan (bagian 1)](../../ss-codingan-sebelum/java/prak07-Jurusan-1.png)

![Kode Jurusan.java sebelum perbaikan (bagian 2)](../../ss-codingan-sebelum/java/prak07-Jurusan-2.png)

#### Sesudah

![Kode Jurusan.java sesudah perbaikan (bagian 1)](../../ss-codingan-sesudah/java/prak07-Jurusan-1.png)

![Kode Jurusan.java sesudah perbaikan (bagian 2)](../../ss-codingan-sesudah/java/prak07-Jurusan-2.png)

### JAVA — PerpustakaanService.java

#### Sebelum

![Kode PerpustakaanService.java sebelum perbaikan](../../ss-codingan-sebelum/java/prak07-PerpustakaanService.png)

#### Sesudah

![Kode PerpustakaanService.java sesudah perbaikan (bagian 1)](../../ss-codingan-sesudah/java/prak07-PerpustakaanService-1.png)

![Kode PerpustakaanService.java sesudah perbaikan (bagian 2)](../../ss-codingan-sesudah/java/prak07-PerpustakaanService-2.png)

### PHP — relasi.php

#### Sebelum

![Kode relasi.php sebelum perbaikan (bagian 1)](../../ss-codingan-sebelum/php/prak07-relasi-1.png)

![Kode relasi.php sebelum perbaikan (bagian 2)](../../ss-codingan-sebelum/php/prak07-relasi-2.png)

#### Sesudah

![Kode relasi.php sesudah perbaikan (bagian 1)](../../ss-codingan-sesudah/php/prak07-relasi-1.png)

![Kode relasi.php sesudah perbaikan (bagian 2)](../../ss-codingan-sesudah/php/prak07-relasi-2.png)

![Kode relasi.php sesudah perbaikan (bagian 3)](../../ss-codingan-sesudah/php/prak07-relasi-3.png)

![Kode relasi.php sesudah perbaikan (bagian 4)](../../ss-codingan-sesudah/php/prak07-relasi-4.png)

### UML — perpustakaan-kerangka.puml

#### Sebelum

![Kode perpustakaan-kerangka.puml sebelum perbaikan (bagian 1)](../../ss-codingan-sebelum/uml/prak07-perpustakaan-kerangka-1.png)

![Kode perpustakaan-kerangka.puml sebelum perbaikan (bagian 2)](../../ss-codingan-sebelum/uml/prak07-perpustakaan-kerangka-2.png)

#### Sesudah

![Kode perpustakaan-kerangka.puml sesudah perbaikan (bagian 1)](../../ss-codingan-sesudah/uml/prak07-perpustakaan-kerangka-1.png)

![Kode perpustakaan-kerangka.puml sesudah perbaikan (bagian 2)](../../ss-codingan-sesudah/uml/prak07-perpustakaan-kerangka-2.png)

![Kode perpustakaan-kerangka.puml sesudah perbaikan (bagian 3)](../../ss-codingan-sesudah/uml/prak07-perpustakaan-kerangka-3.png)

### Kesimpulan

Komposisi ditandai oleh objek bagian yang dibuat di dalam induk dan getter yang mengembalikan salinan tak-berubah, sedangkan agregasi menerima objek bagian dari luar sehingga objeknya tetap hidup setelah dilepas dari induk. Class diagram, kode Java, dan kode PHP dibuat konsisten, dan hasil setelah perbaikan menunjukkan koleksi bab menolak diubah dari luar serta mahasiswa tetap ada setelah keluar dari jurusan.
