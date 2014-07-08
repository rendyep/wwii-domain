<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class WhitewoodInspection
{
    protected $id;

    protected $tanggalInspeksi;

    protected $lokasi;

    protected $staffQc;

    protected $whitewoodInspectionTime;

    public function __construct()
    {
        $this->whitewoodInspectionTime = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setTanggalInspeksi(\DateTime $tanggalInspeksi)
    {
        $this->tanggalInspeksi = $tanggalInspeksi;
    }

    public function getTanggalInspeksi()
    {
        return $this->tanggalInspeksi;
    }

    public function setLokasi($lokasi)
    {
        $this->lokasi = $lokasi;
    }

    public function getLokasi()
    {
        return $this->lokasi;
    }

    public function setStaffQc($staffQc)
    {
        $this->staffQc = $staffQc;
    }

    public function getStaffQc()
    {
        return $this->staffQc;
    }

    public function addWhitewoodInspectionTime(WhitewoodInspectionTime $whitewoodInspectionTime)
    {
        $whitewoodInspectionTime->setWhitewoodInspection($this);
        $this->whitewoodInspectionTime->add($whitewoodInspectionTime);
    }

    public function removeWhitewoodInspectionTime(WhitewoodInspectionTime $whitewoodInspectionTime)
    {
        $this->whitewoodInspectionTime->removeElement($whitewoodInspectionTime);
    }

    public function getWhitewoodInspectionTime()
    {
        return $this->whitewoodInspectionTime;
    }
}
