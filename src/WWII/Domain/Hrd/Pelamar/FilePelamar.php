<?php

namespace WWII\Domain\Hrd\Pelamar;

class FilePelamar
{
    protected $id;

    protected $namaFile;

    protected $pelamar;

    public function getId()
    {
        return $this->id;
    }

    public function setNamaFile($namaFile)
    {
        $this->namaFile = $namaFile;
    }

    public function getNamaFile()
    {
        return $this->namaFile;
    }

    public function setPelamar(Pelamar $pelamar)
    {
        $this->pelamar = $pelamar;
    }

    public function getPelamar()
    {
        return $this->pelamar;
    }
}
