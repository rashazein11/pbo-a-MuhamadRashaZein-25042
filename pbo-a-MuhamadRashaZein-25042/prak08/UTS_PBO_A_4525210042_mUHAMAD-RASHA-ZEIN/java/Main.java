public class Main {
    public static void main (String []args ){
        Kendaraan motor = new Motor ("B 23871 ajg");
        Kendaraan motor2 = new Motor ("B 27323 ttl");
        Kendaraan mobil  = new Mobil ("B 13564 rakoy");
        Kendaraan mobil2  = new Mobil ("F 7126 KTL");

        Pembayaran bayarMotor = new PembayaranTunai(); 
        TransaksiParkir transaksi1 = new TransaksiParkir(motor,3 , bayarMotor);
        TransaksiParkir transaksi2 = new TransaksiParkir(motor2,5 , bayarMotor);
        transaksi1.prosesTransaksi();
            transaksi2.prosesTransaksi();
        

        Pembayaran bayarMobil = new PembayaranTunai();
        TransaksiParkir transaksi3 = new TransaksiParkir(mobil,21 , bayarMobil);
        TransaksiParkir transaksi4 = new TransaksiParkir(mobil2, 24 , bayarMobil);
        transaksi3.prosesTransaksi();
        transaksi4.prosesTransaksi();
        
        System.out.println("jumlah Transaksi :  " + TransaksiParkir.getJumlahTransaksi());
        

        

    }
}