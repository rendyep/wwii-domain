<?php

namespace WWII\Domain\Erp\ItInventory;

class Peripheral
{
    protected $id;

    protected $nama;

    protected $nomorSeri;

    protected $brand;

    protected $type;

    protected $port;

    protected $userAccount;

    protected $lokasi;

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

    public function setNomorSeri($nomorSeri)
    {
        $this->nomorSeri = $nomorSeri;
    }

    public function getNomorSeri()
    {
        return $this->nomorSeri;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setPort($port)
    {
        $this->port = $Port;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function setUserAccount($userAccount)
    {
        $this->userAccount = $userAccount;
    }

    public function getUserAccount()
    {
        return $this->userAccount;
    }

    public function setLokasi($lokasi)
    {
        $this->lokasi = $lokasi;
    }

    public function getLokasi()
    {
        return $this->lokasi;
    }
}
