<?php

namespace WWII\Domain\Hrd\Karyawan;

class DetailKaryawan
{
    protected $id;

    protected $nik;

    protected $jabatan;

    protected $departemen;

    /*
     * kontrak
     * tetap
     * keluar
     */
    protected $status = 'kontrak';

    protected $tanggalAwalKontrakKerja;

    protected $tanggalAkhirKontrakKerja;

    protected $tanggalMasukKerja;

    protected $tanggalKeluarKerja;

    protected $karyawan;

    public function getId()
    {
        return $this->id;
    }

    public function setNik($nik)
    {
        $this->nik = $nik;
    }

    public function getNik()
    {
        return $this->nik;
    }

    public function setJabatan($jabatan)
    {
        $this->jabatan = $jabatan;
    }

    public function getJabatan()
    {
        return $this->jabatan;
    }

    public function setDepartemen($departemen)
    {
        $this->departemen = $departemen;
    }

    public function getDepartemen()
    {
        return $this->departemen;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setTanggalAwalKontrakKerja(\DateTime $tanggalAwalKontrakKerja)
    {
        $this->tanggalAwalKontrakKerja = $tanggalAwalKontrakKerja;
    }

    public function getTanggalAwalKontrakKerja()
    {
        return $this->tanggalAwalKontrakKerja;
    }

    public function setTanggalAkhirKontrakKerja(\DateTime $tanggalAkhirKontrakKerja)
    {
        $this->tanggalAkhirKontrakKerja = $tanggalAkhirKontrakKerja;
    }

    public function getTanggalAkhirKontrakKerja()
    {
        return $this->tanggalAkhirKontrakKerja;
    }

    public function setTanggalMasukKerja(\DateTime $tanggalMasukKerja)
    {
        $this->tanggalMasukKerja = $tanggalMasukKerja;
    }

    public function getTanggalMasukKerja()
    {
        return $this->tanggalMasukKerja;
    }

    public function setTanggalKeluarKerja(\DateTime $tanggalKeluarKerja)
    {
        $this->tanggalKeluarKerja = $tanggalKeluarKerja;
    }

    public function getTanggalKeluarKerja()
    {
        return $this->tanggalKeluarKerja;
    }

    public function setKaryawan(Karyawan $karyawan)
    {
        $this->karyawan = $karyawan;
    }

    public function getKaryawan()
    {
        return $this->karyawan;
    }
}
