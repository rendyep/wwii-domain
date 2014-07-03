<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class AssemblingInspection
{
    protected $id;

    protected $tanggalInspeksi;

    protected $lokasi;

    protected $staffQc;

    protected $assemblingInspectionTime;

    public function __construct()
    {
        $this->assemblingInspectionTime = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function addAssemblingInspectionTime(AssemblingInspectionTime $assemblingInspectionTime)
    {
        $assemblingInspectionTime->setAssemblingInspection($this);
        $this->assemblingInspectionTime->add($assemblingInspectionTime);
    }

    public function removeAssemblingInspectionTime(AssemblingInspectionTime $assemblingInspectionTime)
    {
        $this->assemblingInspectionTime->removeElement($assemblingInspectionTime);
    }

    public function getAssemblingInspectionTime()
    {
        return $this->assemblingInspectionTime;
    }
}
