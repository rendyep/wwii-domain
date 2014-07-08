<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class PembahananPanelInspection
{
    protected $id;

    protected $tanggalInspeksi;

    protected $line;

    protected $staffQc;

    protected $pembahananPanelInspectionTime;

    public function __construct()
    {
        $this->pembahananPanelInspectionTime = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function setLine($line)
    {
        $this->line = $line;
    }

    public function getLine()
    {
        return $this->line;
    }

    public function setStaffQc($staffQc)
    {
        $this->staffQc = $staffQc;
    }

    public function getStaffQc()
    {
        return $this->staffQc;
    }

    public function addPembahananPanelInspectionTime(PembahananPanelInspectionTime $pembahananPanelInspectionTime)
    {
        $pembahananPanelInspectionTime->setPembahananPanelInspection($this);
        $this->pembahananPanelInspectionTime->add($pembahananPanelInspectionTime);
    }

    public function removePembahananPanelInspectionTime(PembahananPanelInspectionTime $pembahananPanelInspectionTime)
    {
        $this->pembahananPanelInspectionTime->removeElement($pembahananPanelInspectionTime);
    }

    public function getPembahananPanelInspectionTime()
    {
        return $this->pembahananPanelInspectionTime;
    }
}
