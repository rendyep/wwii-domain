<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class DailyInspection
{
    protected $id;

    protected $tanggalInspeksi;

    protected $group;

    protected $lokasi;

    protected $staffQc;

    protected $dailyInspectionItem;

    public function __construct()
    {
        $this->dailyInspectionItem = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function addDailyInspectionItem(DailyInspectionItem $dailyInspectionItem)
    {
        $dailyInspectionItem->setDailyInspection($this);
        $this->dailyInspectionItem->add($dailyInspectionItem);
    }

    public function removeDailyInspectionItem(DailyInspectionItem $dailyInspectionItem)
    {
        $this->dailyInspectionItem->removeElement($dailyInspectionItem);
    }

    public function getDailyInspectionItem()
    {
        return $this->dailyInspectionItem;
    }
}
