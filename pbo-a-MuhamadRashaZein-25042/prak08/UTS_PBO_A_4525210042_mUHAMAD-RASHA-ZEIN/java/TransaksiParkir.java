public class TransaksiParkir {

     private static int jumlahTransaksi = 0;
     private final Kendaraan kendaraan;
     private final int jam;
     private final Pembayaran pembayaran;

     public TransaksiParkir (Kendaraan kendaraan, int jam, Pembayaran pembayaran) {
        if(kendaraan == null || pembayaran == null){
            throw new IllegalArgumentException("Kendaraan dan pembayaran tidak boleh kosong");
        } 

        if(jam <= 0){
            throw new IllegalArgumentException("Total parkir harus lebih dari 0 jam");
        }

        this.kendaraan = kendaraan;
        this.pembayaran = pembayaran;
        this.jam = jam;
        
        jumlahTransaksi++;
     }

     public void prosesTransaksi() {
        double total = kendaraan.hitungbiaya(jam);

        System.out.println("--- Memproses Transaksi ---");
        System.out.println("Jenis Kendaraan : " + kendaraan.getjenis());
        System.out.println("Plat Nomor      : " + kendaraan.getnomorPlat());
        System.out.println("Durasi Parkir   : " + jam + " jam");
        System.out.println("Total Biaya     : Rp " + total);
        pembayaran.bayar(total);
        System.out.println("---------------------------\n");
    }   

     public static int getJumlahTransaksi(){
        return jumlahTransaksi;
     }
}