<?php
declare(strict_types=1);

/** Kontrak: bisa bergerak. */
interface Movable
{
    public function bergerak(): void;
    public function kecepatanMaksimum(): float;
}

/** Kontrak: pakai bahan bakar. */
interface Fuelable
{
    public function isiBahanBakar(float $jumlah): void;
    public function kapasitasTangki(): float;
    public function tipeBahanBakar(): TipeBahanBakar;
}

/** Enum dengan perilaku. */
enum TipeBahanBakar: string
{
    case Bensin = 'bensin';
    case Solar = 'solar';
    case Listrik = 'listrik';

    public function label(): string
    {
        return match ($this) {
            self::Bensin => 'Bensin',
            self::Solar => 'Solar',
            self::Listrik => 'Listrik',
        };
    }

    public function ramahLingkungan(): bool
    {
        return $this === self::Listrik;
    }

    /** Biaya per satuan (liter / kWh). */
    public function biayaPengisian(float $jumlah): float
    {
        $tarif = match ($this) {
            self::Bensin => 10000,
            self::Solar => 6800,
            self::Listrik => 2500,
        };
        return $tarif * $jumlah;
    }
}

/** Trait: bisa dipakai kelas yang tidak sekerabat. */
trait Loggable
{
    public function log(string $pesan): void
    {
        printf('  [%s] %s%s', static::class, $pesan, PHP_EOL);
    }
}

/** Abstract class: kode yang sama di semua kendaraan. */
abstract class Kendaraan
{
    public function __construct(
        protected readonly string $merek,
        protected readonly int $tahun,
    ) {}

    public function umur(int $tahunSekarang): int
    {
        return max(0, $tahunSekarang - $this->tahun);
    }

    abstract public function jumlahRoda(): int;

    public function __toString(): string
    {
        return sprintf('%s (%d, %d roda)', $this->merek, $this->tahun, $this->jumlahRoda());
    }
}

class Mobil extends Kendaraan implements Movable, Fuelable
{
    use Loggable;

    private float $isiTangki = 0;

    public function __construct(string $merek, int $tahun, private float $kapasitas)
    {
        parent::__construct($merek, $tahun);
    }

    public function jumlahRoda(): int
    {
        return 4;
    }

    public function bergerak(): void
    {
        printf('  %s melaju di jalan raya%s', $this->merek, PHP_EOL);
    }

    public function kecepatanMaksimum(): float
    {
        return 180;
    }

    public function isiBahanBakar(float $jumlah): void
    {
        $this->isiTangki = min($this->kapasitas, $this->isiTangki + $jumlah);
    }

    public function kapasitasTangki(): float
    {
        return $this->kapasitas;
    }

    public function tipeBahanBakar(): TipeBahanBakar
    {
        return TipeBahanBakar::Bensin;
    }
}

/** Sepeda: Movable, tapi BUKAN Fuelable. */
class Sepeda extends Kendaraan implements Movable
{
    public function jumlahRoda(): int
    {
        return 2;
    }

    public function bergerak(): void
    {
        printf('  %s dikayuh pelan-pelan%s', $this->merek, PHP_EOL);
    }

    public function kecepatanMaksimum(): float
    {
        return 40;
    }
}

/** Tidak sekerabat dengan Kendaraan, tapi tetap bisa log(). */
class Pesanan
{
    use Loggable;
}