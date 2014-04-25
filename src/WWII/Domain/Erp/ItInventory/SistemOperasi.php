<?php

namespace WWII\Domain\Erp\ItInventory;

class SistemOperasi
{
    protected $id;

    protected $nama;

    protected $serial;

    protected $versi;

    protected $lisensi;

    public function getId()
    {
        return $this->id;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setSerial($serial)
    {
        $this->serial = $serial;
    }

    public function getSerial()
    {
        return $this->serial;
    }

    public function setVersi($versi)
    {
        $this->versi = $versi;
    }

    public function getVersi()
    {
        return $this->versi;
    }

    public function setLisensi($lisensi)
    {
        $this->lisensi = $lisensi;
    }

    public function getLisensi()
    {
        return $this->lisensi;
    }
}
