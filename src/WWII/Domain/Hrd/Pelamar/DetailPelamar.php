<?php

namespace WWII\Domain\Hrd\Pelamar;

class DetailPelamar
{
    protected $id;

    protected $posisi;

    protected $tanggalInterview;

    /*
     * sudah dipanggil
     * diterima
     * gagal
     */
    protected $status = 'interview';

    protected $tanggalRencanaMasukKerja;

    protected $pelamar;

    public function getId()
    {
        return $this->id;
    }

    public function setPosisi($posisi)
    {
        $this->posisi = $posisi;
    }

    public function getPosisi()
    {
        return $this->posisi;
    }

    public function setTanggalInterView(\DateTime $tanggalInterview)
    {
        $this->tanggalInterview = $tanggalInterview;
    }

    public function getTanggalInterview()
    {
        return $this->tanggalInterview;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setTanggalRencanaMasukKerja(\DateTime $tanggalRencanaMasukKerja)
    {
        $this->tanggalRencanaMasukKerja = $tanggalRencanaMasukKerja;
    }

    public function getTanggalRencanaMasukKerja()
    {
        return $this->tanggalRencanaMasukKerja;
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
