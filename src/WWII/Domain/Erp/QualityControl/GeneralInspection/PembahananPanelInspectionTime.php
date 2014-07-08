<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class PembahananPanelInspectionTime
{
    protected $id;

    protected $waktuInspeksi;

    protected $pembahananPanelInspectionItem;

    protected $pembahananPanelInspection;

    public function __construct()
    {
        $this->pembahananPanelInspectionItem = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function addPembahananPanelInspectionItem(PembahananPanelInspectionItem $pembahananPanelInspectionItem)
    {
        $pembahananPanelInspectionItem->setPembahananPanelInspectionTime($this);
        $this->pembahananPanelInspectionItem->add($pembahananPanelInspectionItem);
    }

    public function removePembahananPanelInspectionItem(PembahananPanelInspectionItem $pembahananPanelInspectionItem)
    {
        $this->pembahananPanelInspectionItem->removeElement($pembahananPanelInspectionItem);
    }

    public function getPembahananPanelInspectionItem()
    {
        return $this->pembahananPanelInspectionItem;
    }

    public function setPembahananPanelInspection(PembahananPanelInspection $pembahananPanelInspection)
    {
        $this->pembahananPanelInspection = $pembahananPanelInspection;
    }

    public function getPembahananPanelInspection()
    {
        return $this->pembahananPanelInspection;
    }
}
