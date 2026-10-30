public class PembayaranTunai implements Pembayaran {
    @Override 
    public void bayar(double total){
        System.out.println("pembayaran : Tunai");
        System.out.println("total pembayaran : Rp" + total);
        System.out.println("pembayaran berhasil");
    }
}