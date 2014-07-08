<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class PembahananPanelInspection
{
    protected $id;

    protected $tanggalInspeksi;

    protected $lokasi;

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
