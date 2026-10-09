# Keputusan Desain - Praktikum 06
## Muhamad Rasha Zein
## NPM : 4525210042

## Langkah 4: Penolakan saat Kompilasi

Setelah kelas `Sepeda` dibuat, saya mencoba memanggil `isiPenuh(sepeda)` di `Main.java`.
Compiler menolaknya dengan pesan kesalahan berikut:

```
The method isiPenuh(Fuelable) in the type Main is not applicable for the arguments (Sepeda)
```

### Mengapa penolakan saat kompilasi itu menguntungkan

Method `isiPenuh` menerima parameter bertipe `Fuelable`, bukan `Mobil`. Artinya method ini
hanya peduli pada kontrak, yaitu objek harus bisa diisi bahan bakar, dan tidak peduli
kelas konkretnya. `Sepeda` hanya mengimplementasikan `Movable`, tidak `Fuelable`, karena
sepeda memang tidak punya tangki bahan bakar. Jadi compiler menolak objek `Sepeda`
sebelum program dijalankan.

Menurut saya ini menguntungkan karena:

1. **Kesalahan ketahuan lebih awal.** Saya langsung diberi tahu saat menulis kode, bukan
   setelah program berjalan dan crash di depan pengguna.
2. **Tidak ada pemanggilan yang tidak masuk akal.** Tidak mungkin ada kode yang
   memanggil `isiBahanBakar` pada kendaraan yang tidak punya tangki.
3. **Tidak perlu pengecekan manual.** Saya tidak perlu menulis `if (kendaraan instanceof ...)`
   di dalam method, karena sistem tipe sudah menjamin hanya objek `Fuelable` yang masuk.
4. **Mudah dikembangkan.** Kelas baru yang `implements Fuelable` otomatis bisa dipakai
   di `isiPenuh` tanpa mengubah method tersebut.

Setelah pesan kesalahan saya salin, baris `isiPenuh(sepeda);` saya jadikan komentar
supaya program tetap bisa dikompilasi dan dijalankan.

## Perbandingan dengan PHP

Di PHP, kesalahan serupa baru muncul saat program dijalankan (runtime), yaitu
berupa `TypeError`, karena PHP tidak punya tahap kompilasi yang memeriksa tipe sebelum
eksekusi. Di Java kesalahan tipe ditolak sebelum program bisa berjalan, sehingga lebih aman.