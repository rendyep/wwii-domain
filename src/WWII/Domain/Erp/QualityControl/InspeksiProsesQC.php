<?php

namespace WWII\Domain\Erp\QualityControl;

class InspeksiProsesQC
{
    protected $id;

    protected $tanggal;

    protected $group;

    protected $lokasi;

    protected $pelaksana;

    protected $items;

    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function setPelaksana($pelaksana)
    {
        $this->pelaksana = $pelaksana;
    }

    public function addItem(InspeksiProsesQCItem $item)
    {
        $item->setInspeksiProsesQc($this);
        $this->items->add($item);
    }

    public function removeItem(InspeksiProsesQCItem $item)
    {
        $this->items->removeElement($item);
    }

    public function getItems()
    {
        return $this->items;
    }
}
