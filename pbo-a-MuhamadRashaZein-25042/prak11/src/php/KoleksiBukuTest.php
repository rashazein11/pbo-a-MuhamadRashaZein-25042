<?php
declare(strict_types=1);

namespace Perpustakaan\Tests;

use PHPUnit\Framework\TestCase;
use Perpustakaan\Model\Buku;
use Perpustakaan\Model\KoleksiBuku;

/**
 * Sesi 11 — unit test PHPUnit.
 *
 * Letakkan di tests/ dan pastikan autoload-dev pada composer.json sudah
 * memetakan Perpustakaan\Tests\ ke tests/.
 *
 * Jalankan: ./vendor/bin/phpunit tests
 */
final class KoleksiBukuTest extends TestCase
{
    private KoleksiBuku $koleksi;

    protected function setUp(): void
    {
        // Dijalankan ulang sebelum SETIAP pengujian.
        $this->koleksi = new KoleksiBuku();
    }

    public function testItemYangDisimpanDapatDitemukanKembali(): void
    {
        $buku = new Buku('978-1', 'PBO');
        $this->koleksi->simpan($buku);

        $this->assertSame($buku, $this->koleksi->cariByIsbn('978-1'));
    }

    public function testMencariIsbnYangTidakAdaMengembalikanNull(): void
    {
        $this->assertNull($this->koleksi->cariByIsbn('tidak-ada'));
    }

    public function testKoleksiBaruBerisiNolItem(): void
    {
        $this->assertCount(0, $this->koleksi);
    }

    public function testFilterHanyaMengembalikanYangLolosPredikat(): void
    {
        $this->koleksi->simpan(new Buku('978-1', 'PBO'));
        $this->koleksi->simpan(new Buku('978-2', 'Java'));

        $hasil = $this->koleksi->filter(
            static fn (Buku $buku): bool => str_starts_with($buku->getJudul(), 'P')
        );

        $this->assertCount(1, $hasil);
        $this->assertSame('978-1', $hasil->cariByIsbn('978-1')?->getIsbn());
        $this->assertNull($hasil->cariByIsbn('978-2'));
    }

    public function testJumlahkanMenghitungTotalDenganBenar(): void
    {
        $this->koleksi->simpan(new Buku('978-1', 'PBO'));
        $this->koleksi->simpan(new Buku('978-2', 'Java'));

        $total = $this->koleksi->jumlahkan(
            static fn (Buku $buku): int => strlen($buku->getJudul())
        );

        $this->assertSame(7.0, $total);
    }

    public function testMapMenghasilkanDaftarJudul(): void
    {
        $this->koleksi->simpan(new Buku('978-1', 'PBO'));
        $this->koleksi->simpan(new Buku('978-2', 'Java'));

        $this->assertSame(
            ['PBO', 'Java'],
            $this->koleksi->map(static fn (Buku $buku): string => $buku->getJudul())
        );
    }

    public function testKelompokkanMembagiBukuBerdasarkanAwalanIsbn(): void
    {
        $this->koleksi->simpan(new Buku('978-1', 'PBO'));
        $this->koleksi->simpan(new Buku('978-2', 'Java'));
        $this->koleksi->simpan(new Buku('979-1', 'OOP'));

        $hasil = $this->koleksi->kelompokkan(
            static fn (Buku $buku): string => substr($buku->getIsbn(), 0, 3)
        );

        $this->assertCount(2, $hasil['978']);
        $this->assertCount(1, $hasil['979']);
    }

    public function testForeachMengunjungiSemuaBuku(): void
    {
        $this->koleksi->simpan(new Buku('978-1', 'PBO'));
        $this->koleksi->simpan(new Buku('978-2', 'Java'));

        $judul = [];
        foreach ($this->koleksi as $buku) {
            $judul[] = $buku->getJudul();
        }

        $this->assertSame(['PBO', 'Java'], $judul);
    }

    public function testIsbnSamaMenggantiBukuSebelumnya(): void
    {
        $this->koleksi->simpan(new Buku('978-1', 'PBO'));
        $this->koleksi->simpan(new Buku('978-1', 'Java'));

        $this->assertCount(1, $this->koleksi);
        $this->assertSame('Java', $this->koleksi->cariByIsbn('978-1')?->getJudul());
    }

    public function testConstructorMenolakItemYangBukanBuku(): void
    {
        $this->expectException(\TypeError::class);

        new KoleksiBuku([new \stdClass()]);
    }
}
