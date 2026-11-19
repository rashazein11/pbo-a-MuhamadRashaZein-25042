<?php
declare(strict_types=1);

namespace Perpustakaan\Model;

final class Buku
{
    public function __construct(
        private readonly string $isbn,
        private readonly string $judul
    ) {
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function getJudul(): string
    {
        return $this->judul;
    }
}
