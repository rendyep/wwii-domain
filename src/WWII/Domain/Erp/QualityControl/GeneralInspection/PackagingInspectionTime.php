<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class PackagingInspectionTime
{
    protected $id;

    protected $waktuInspeksi;

    protected $packagingInspectionItem;

    protected $packagingInspection;

    public function __construct()
    {
        $this->packagingInspectionItem = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function addPackagingInspectionItem(PackagingInspectionItem $packagingInspectionItem)
    {
        $packagingInspectionItem->setPackagingInspectionTime($this);
        $this->packagingInspectionItem->add($packagingInspectionItem);
    }

    public function removePackagingInspectionItem(PackagingInspectionItem $packagingInspectionItem)
    {
        $this->packagingInspectionItem->removeElement($packagingInspectionItem);
    }

    public function getPackagingInspectionItem()
    {
        return $this->packagingInspectionItem;
    }

    public function setPackagingInspection(PackagingInspection $packagingInspection)
    {
        $this->packagingInspection = $packagingInspection;
    }

    public function getPackagingInspection()
    {
        return $this->packagingInspection;
    }
}
