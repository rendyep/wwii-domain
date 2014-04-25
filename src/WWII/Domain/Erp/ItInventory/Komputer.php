<?php

namespace WWII\Domain\Erp\ItInventory;

class Komputer
{
    protected $id;

    protected $nomorSeri;

    protected $ip;

    protected $mac;

    protected $cpu;

    protected $hardDisk;

    protected $ram;

    protected $lcd;

    protected $opticalDrive;

    protected $os;

    protected $email;

    protected $tahun;

    protected $user;

    protected $userAccount;

    protected $lokasi;

    public function getId()
    {
        return $this->id;
    }

    public function setNomorSeri($nomorSeri)
    {
        $this->nomorSeri = $nomorSeri;
    }

    public function getNomorSeri()
    {
        return $this->nomorSeri;
    }

    public function setIp($ip)
    {
        $this->ip = $ip;
    }


    public function getIp()
    {
        return $this->ip;
    }

    public function setMac($mac)
    {
        $this->mac = $mac;
    }

    public function getMac()
    {
        return $this->mac;
    }

    public function setCpu($cpu)
    {
        $this->cpu = $cpu;
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function setHardDisk($hardDisk)
    {
        $this->hardDisk = $hardDisk;
    }

    public function getHardDisk()
    {
        return $this->hardDisk;
    }

    public function setRam($ram)
    {
        $this->ram = $ram;
    }

    public function getRam()
    {
        return $this->ram;
    }

    public function setLcd($lcd)
    {
        $this->lcd = $lcd;
    }

    public function getLcd()
    {
        return $this->lcd;
    }

    public function setOpticalDrive($opticalDrive)
    {
        $this->opticalDrive = $opticalDrive;
    }

    public function getOpticalDrive()
    {
        return $this->opticalDrive;
    }

    public function setOs($os)
    {
        $this->os = $os;
    }

    public function getOs()
    {
        return $this->os;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setTahun($tahun)
    {
        $this->tahun = $tahun;
    }

    public function getTahun()
    {
        return $this->tahun;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
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
