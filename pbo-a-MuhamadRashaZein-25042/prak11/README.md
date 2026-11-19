# Praktikum 11 — Collections, Generics, dan Unit Test Pertama

**Nama:** Muhamad Rasha Zein  
**NPM:** 4525210042  
**Kelas:** PBO A 2025/2026  
**Dosen Pengampu:** Adi Wahyu Pribadi, S.Si., M.Kom

Praktikum ini membuat kelas generik `Repository<T>` di Java dan *typed collection* `KoleksiBuku` di PHP, memakai `Optional` atau tipe nullable agar pencarian tidak mengembalikan `null` mentah, lalu menulis unit test pertama dengan JUnit 5 dan PHPUnit. Implementasi tersedia dalam Java dan PHP.

## Java

### Repository.java

#### Sebelum

![Repository Java sebelum](../../ss-codingan-sebelum/java/prak11-Repository.png)

#### Sesudah

![Repository Java setelah](../../ss-codingan-sesudah/java/prak11-Repository.png)

Versi sebelum hanya kerangka: `simpan`, `cariById`, `cariSemua`, dan `hapus` masih TODO dengan nilai kembalian sementara. Setelah dikerjakan, data disimpan di `LinkedHashMap` dengan kunci dari `pengambilKunci`, sehingga pencarian berdasarkan id tidak lagi berupa perulangan linear dan urutan simpan tetap terjaga. `cariById` mengembalikan `Optional.ofNullable(...)`, `cariSemua` mengembalikan `List.copyOf(...)` agar koleksi internal tidak bocor, dan `hapus` mengembalikan `true` hanya bila ada item yang terhapus. Tipe parameter `T` membuat `Repository<Buku>` menolak objek selain `Buku` pada tahap kompilasi.

### RepositoryTest.java

#### Sebelum

![RepositoryTest Java sebelum bagian 1](../../ss-codingan-sebelum/java/prak11-RepositoryTest-1.png)

![RepositoryTest Java sebelum bagian 2](../../ss-codingan-sebelum/java/prak11-RepositoryTest-2.png)

#### Sesudah

![RepositoryTest Java setelah bagian 1](../../ss-codingan-sesudah/java/prak11-RepositoryTest-1.png)

![RepositoryTest Java setelah bagian 2](../../ss-codingan-sesudah/java/prak11-RepositoryTest-2.png)

Sebelumnya lima uji hanya berisi `fail("TODO ...")`. Sekarang ada delapan uji: simpan lalu temukan, id tidak ada mengembalikan `Optional` kosong, hapus item, repository kosong, koleksi hasil `cariSemua` tidak bisa diubah (`UnsupportedOperationException`), id sama menimpa item lama, hapus id yang tidak ada mengembalikan `false`, dan urutan simpan dipertahankan. `@BeforeEach` membuat repository baru sebelum tiap uji sehingga uji tidak saling memengaruhi.

## PHP

### KoleksiBuku.php

#### Sebelum

![KoleksiBuku PHP sebelum bagian 1](../../ss-codingan-sebelum/php/prak11-KoleksiBuku-1.png)

![KoleksiBuku PHP sebelum bagian 2](../../ss-codingan-sebelum/php/prak11-KoleksiBuku-2.png)

#### Sesudah

![KoleksiBuku PHP setelah bagian 1](../../ss-codingan-sesudah/php/prak11-KoleksiBuku-1.png)

![KoleksiBuku PHP setelah bagian 2](../../ss-codingan-sesudah/php/prak11-KoleksiBuku-2.png)

PHP tidak punya generics, jadi `KoleksiBuku` berperan sebagai *typed collection*: `simpan(Buku $b)` menolak tipe lain. Kelas ini mengimplementasikan `IteratorAggregate` dan `Countable` sehingga bisa dipakai di `foreach` dan `count()`. `cariByIsbn` bertipe `?Buku` dengan `??`, `filter` memakai `array_filter` (array dahulu) dibungkus `array_values`, `map` memakai `array_map` (callable dahulu), `jumlahkan` memakai `array_reduce`, dan `kelompokkan` mengelompokkan buku berdasarkan kunci hasil callback.

### Buku.php

![Buku PHP setelah](../../ss-codingan-sesudah/php/prak11-Buku.png)

Kelas `Buku` dibuat immutable lewat *constructor promotion* dengan properti `private readonly` (`isbn` dan `judul`) beserta getter-nya. Berkas ini tidak ada pada versi sebelum karena starter tidak menyertakannya.

### KoleksiBukuTest.php

#### Sebelum

![KoleksiBukuTest PHP sebelum](../../ss-codingan-sebelum/php/prak11-KoleksiBukuTest.png)

#### Sesudah

![KoleksiBukuTest PHP setelah bagian 1](../../ss-codingan-sesudah/php/prak11-KoleksiBukuTest-1.png)

![KoleksiBukuTest PHP setelah bagian 2](../../ss-codingan-sesudah/php/prak11-KoleksiBukuTest-2.png)

Lima uji awal hanya memanggil `$this->fail(...)`. Setelah dikerjakan ada sepuluh uji: simpan dan temukan, ISBN tidak ada mengembalikan `null`, koleksi baru kosong, `filter`, `jumlahkan`, `map`, `kelompokkan`, `foreach`, ISBN sama menimpa buku lama, dan konstruktor menolak item bukan `Buku` (`TypeError`).

## Hasil keseluruhan

### Java — sebelum

![Hasil Java sebelum](../../ssan-sebelum/images-java/pertemuan11.png)

### Java — setelah

![Hasil Java setelah](../../ssan-setelah/ssan-java-setelah/prak-setelah-11.png)

### PHP — sebelum

![Hasil PHP sebelum](../../ssan-sebelum/images-php/pert-php-11.png)

### PHP — setelah

![Hasil PHP setelah](../../ssan-setelah/ssan-php-setelah/prak-setelah-php-11.png)

Sebelum dikerjakan, 5 uji Java dan 5 uji PHP gagal dengan pesan "TODO belum dikerjakan". Setelah dikerjakan, 8 uji Java lulus (0 gagal) dan PHPUnit menampilkan `OK (10 tests, 14 assertions)`.

## Berkas praktikum

- [Sumber Java](src/java/)
- [Sumber PHP](src/php/)

### Kesimpulan

Generics dan *typed collection* membuat tipe isi koleksi terjaga, `Optional` dan tipe nullable membuat kasus "tidak ditemukan" eksplisit, dan unit test mengubah daftar harapan menjadi bukti yang bisa dijalankan ulang kapan saja.
