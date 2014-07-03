<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class AssemblingInspectionTime
{
    protected $id;

    protected $waktuInspeksi;

    protected $assemblingInspectionItem;

    protected $assemblingInspection;

    public function __construct()
    {
        $this->assemblingInspectionItem = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function addAssemblingInspectionItem(AssemblingInspectionItem $assemblingInspectionItem)
    {
        $assemblingInspectionItem->setAssemblingInspectionTime($this);
        $this->assemblingInspectionItem->add($assemblingInspectionItem);
    }

    public function removeAssemblingInspectionItem(AssemblingInspectionItem $assemblingInspectionItem)
    {
        $this->assemblingInspectionItem->removeElement($assemblingInspectionItem);
    }

    public function getAssemblingInspectionItem()
    {
        return $this->assemblingInspectionItem;
    }

    public function setAssemblingInspection(AssemblingInspection $assemblingInspection)
    {
        $this->assemblingInspection = $assemblingInspection;
    }

    public function getAssemblingInspection()
    {
        return $this->assemblingInspection;
    }
}
