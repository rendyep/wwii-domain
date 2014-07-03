<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class FinishingInspection
{
    protected $id;

    protected $tanggalInspeksi;

    protected $lokasi;

    protected $staffQc;

    protected $finishingInspectionTime;

    public function __construct()
    {
        $this->finishingInspectionTime = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function addFinishingInspectionTime(FinishingInspectionTime $finishingInspectionTime)
    {
        $finishingInspectionTime->setFinishingInspection($this);
        $this->finishingInspectionTime->add($finishingInspectionTime);
    }

    public function removeFinishingInspectionTime(FinishingInspectionTime $finishingInspectionTime)
    {
        $this->finishingInspectionTime->removeElement($finishingInspectionTime);
    }

    public function getFinishingInspectionTime()
    {
        return $this->finishingInspectionTime;
    }
}
