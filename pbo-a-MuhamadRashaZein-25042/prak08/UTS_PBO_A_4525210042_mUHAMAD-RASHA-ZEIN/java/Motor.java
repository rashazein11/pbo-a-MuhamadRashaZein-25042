public class Motor extends Kendaraan {
    public static final double TARIF_PERJAM = 2500;

    public Motor (String nomorPlat){
        super(nomorPlat, JenisKendaraan.MOTOR);
    }

    @Override 
    public double hitungbiaya(int jam){
        return  jam * TARIF_PERJAM;
    }
}