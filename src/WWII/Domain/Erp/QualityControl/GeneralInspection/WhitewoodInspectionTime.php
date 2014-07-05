<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class WhitewoodInspectionTime
{
    protected $id;

    protected $waktuInspeksi;

    protected $whitewoodInspectionItem;

    protected $whitewoodInspection;

    public function __construct()
    {
        $this->whitewoodInspectionItem = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function addWhitewoodInspectionItem(WhitewoodInspectionItem $whitewoodInspectionItem)
    {
        $whitewoodInspectionItem->setWhitewoodInspectionTime($this);
        $this->whitewoodInspectionItem->add($whitewoodInspectionItem);
    }

    public function removeWhitewoodInspectionItem(WhitewoodInspectionItem $whitewoodInspectionItem)
    {
        $this->whitewoodInspectionItem->removeElement($whitewoodInspectionItem);
    }

    public function getWhitewoodInspectionItem()
    {
        return $this->whitewoodInspectionItem;
    }

    public function setWhitewoodInspection(WhitewoodInspection $whitewoodInspection)
    {
        $this->whitewoodInspection = $whitewoodInspection;
    }

    public function getWhitewoodInspection()
    {
        return $this->whitewoodInspection;
    }
}
