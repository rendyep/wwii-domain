<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class DailyInspectionTime
{
    protected $id;

    protected $waktuInspeksi;

    protected $dailyInspectionItem;

    protected $dailyInspection;

    public function __construct()
    {
        $this->dailyInspectionItem = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setWaktuInspeksi(\DateTime $waktuInspeksi)
    {
        $this->waktuInspeksi = $waktuInspeksi;
    }

    public function getWaktuInspeksi()
    {
        return $this->waktuInspeksi;
    }

    public function addDailyInspectionItem(DailyInspectionItem $dailyInspectionItem)
    {
        $dailyInspectionItem->setDailyInspectionTime($this);
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

    public function setDailyInspection(DailyInspection $dailyInspection)
    {
        $this->dailyInspection = $dailyInspection;
    }

    public function getDailyInspection()
    {
        return $this->dailyInspection;
    }
}
