<?php

namespace WWII\Domain\Erp\Finding;

class Finding
{
    protected $id;

    protected $tanggal;

    protected $kejadian;

    protected $tindakan;

    protected $pelaksana;

    protected $findingPhotos;

    public function __construct()
    {
        $this->findingPhotos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setTanggal(\DateTime $tanggal)
    {
        $this->tanggal = $tanggal;
    }

    public function getTanggal()
    {
        return $this->tanggal;
    }

    public function setKejadian($kejadian)
    {
        $this->kejadian = $kejadian;
    }

    public function getKejadian()
    {
        return $this->kejadian;
    }

    public function setTindakan($tindakan)
    {
        $this->tindakan = $tindakan;
    }

    public function getTindakan()
    {
        return $this->tindakan;
    }

    public function setPelaksana($pelaksana)
    {
        $this->pelaksana = $pelaksana;
    }

    public function getPelaksana()
    {
        return $this->pelaksana;
    }

    public function addFindingPhoto(FindingPhoto $findingPhoto)
    {
        $findingPhoto->setFinding($this);
        $this->findingPhotos->add($findingPhoto);
    }

    public function removeFindingPhoto(FindingPhoto $findingPhoto)
    {
        $this->findingPhotos->removeElement($findingPhoto);
    }

    public function getFindingPhotos()
    {
        return $this->findingPhotos;
    }
}
