public class Mobil extends Kendaraan {
    public static final double TARIF_PERJAM = 5000;

    public Mobil (String nomorPlat){
        super(nomorPlat, JenisKendaraan.MOBIL);
    }

    @Override 
    public double hitungbiaya(int jam){
        return  jam * TARIF_PERJAM;
    }
}