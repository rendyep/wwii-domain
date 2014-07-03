<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class PackagingInspection
{
    protected $id;

    protected $tanggalInspeksi;

    protected $lokasi;

    protected $staffQc;

    protected $packagingInspectionTime;

    public function __construct()
    {
        $this->packagingInspectionTime = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function addPackagingInspectionTime(PackagingInspectionTime $packagingInspectionTime)
    {
        $packagingInspectionTime->setPackagingInspection($this);
        $this->packagingInspectionTime->add($packagingInspectionTime);
    }

    public function removePackagingInspectionTime(PackagingInspectionTime $packagingInspectionTime)
    {
        $this->packagingInspectionTime->removeElement($packagingInspectionTime);
    }

    public function getPackagingInspectionTime()
    {
        return $this->packagingInspectionTime;
    }
}
