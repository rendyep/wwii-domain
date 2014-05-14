<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class DailyInspection
{
    protected $id;

    protected $tanggalInspeksi;

    protected $group;

    protected $lokasi;

    protected $staffQc;

    protected $dailyInspectionTime;

    public function __construct()
    {
        $this->dailyInspectionTime = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function setGroup($group)
    {
        $this->group = $group;
    }

    public function getGroup()
    {
        return $this->group;
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

    public function addDailyInspectionTime(DailyInspectionTime $dailyInspectionTime)
    {
        $dailyInspectionTime->setDailyInspection($this);
        $this->dailyInspectionTime->add($dailyInspectionTime);
    }

    public function removeDailyInspectionTime(DailyInspectionT $dailyInspectionTime)
    {
        $this->dailyInspectionTime->removeElement($dailyInspectionTime);
    }

    public function getDailyInspectionTime()
    {
        return $this->dailyInspectionTime;
    }
}
