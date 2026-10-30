public abstract class Kendaraan {

    private String nomorPlat;
    private JenisKendaraan jenis;

    public Kendaraan (String nomorPlat, JenisKendaraan jenis) {
        this.nomorPlat = nomorPlat;
        this.jenis = jenis;

    }
    
    public String getnomorPlat (){
       return nomorPlat ;
    } 

    public JenisKendaraan getjenis() {
        return jenis;
    }

    public abstract double hitungbiaya(int jam ) ; 

}
