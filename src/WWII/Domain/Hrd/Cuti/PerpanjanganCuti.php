<?php

namespace WWII\Domain\Hrd\Cuti;

class PerpanjanganCuti
{
    protected $id;

    protected $tanggalKadaluarsa;

    protected $masterCuti;

    public function getId()
    {
        return $this->id;
    }

    public function setTanggalKadaluarsa(\DateTime $tanggalKadaluarsa)
    {
        $this->tanggalKadaluarsa = $tanggalKadaluarsa;
    }

    public function getTanggalKadaluarsa()
    {
        return $this->tanggalKadaluarsa;
    }

    public function isExpired()
    {
        $now = new \DateTime();
        $now = new \DateTime($now->format('Y-m-d'));

        return ($this->getTanggalKadaluarsa() < $now);
    }

    public function setMasterCuti(MasterCuti $masterCuti)
    {
        $this->masterCuti = $masterCuti;
    }

    public function getMasterCuti()
    {
        return $this->masterCuti;
    }
}
