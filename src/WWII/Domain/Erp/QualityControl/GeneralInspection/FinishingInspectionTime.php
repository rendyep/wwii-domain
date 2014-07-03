<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class FinishingInspectionTime
{
    protected $id;

    protected $waktuInspeksi;

    protected $finishingInspectionItem;

    protected $finishingInspection;

    public function __construct()
    {
        $this->finishingInspectionItem = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function addFinishingInspectionItem(FinishingInspectionItem $finishingInspectionItem)
    {
        $finishingInspectionItem->setFinishingInspectionTime($this);
        $this->finishingInspectionItem->add($finishingInspectionItem);
    }

    public function removeFinishingInspectionItem(FinishingInspectionItem $finishingInspectionItem)
    {
        $this->finishingInspectionItem->removeElement($finishingInspectionItem);
    }

    public function getFinishingInspectionItem()
    {
        return $this->finishingInspectionItem;
    }

    public function setFinishingInspection(FinishingInspection $finishingInspection)
    {
        $this->finishingInspection = $finishingInspection;
    }

    public function getFinishingInspection()
    {
        return $this->finishingInspection;
    }
}
