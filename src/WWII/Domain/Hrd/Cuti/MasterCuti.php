<?php

namespace WWII\Domain\Hrd\Cuti;

class MasterCuti
{
    protected $id;

    protected $nik;

    protected $namaKaryawan;

    protected $departemen;

    protected $tanggalMasuk;

    protected $totalLimit = 12;

    protected $tanggalBerlaku;

    protected $tanggalKadaluarsa;

    protected $perpanjanganCuti;

    protected $parent;

    protected $child;

    protected $pengambilanCuti;

    public function __construct()
    {
        $this->pengambilanCuti = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNik($nik)
    {
        $this->nik = $nik;
    }

    public function getNik()
    {
        return $this->nik;
    }

    public function setNamaKaryawan($namaKaryawan)
    {
        $this->namaKaryawan = $namaKaryawan;
    }

    public function getNamaKaryawan()
    {
        return $this->namaKaryawan;
    }

    public function setDepartemen($departemen)
    {
        $this->departemen = $departemen;
    }

    public function getDepartemen()
    {
        return $this->departemen;
    }

    public function setTanggalMasuk(\DateTime $tanggalMasuk)
    {
        $this->tanggalMasuk = $tanggalMasuk;
    }

    public function getTanggalMasuk()
    {
        return $this->tanggalMasuk;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function setTanggalBerlaku(\DateTime $tanggalBerlaku)
    {
        $this->tanggalBerlaku = $tanggalBerlaku;
    }

    public function getTanggalBerlaku()
    {
        return $this->tanggalBerlaku;
    }

    public function setTanggalKadaluarsa(\DateTime $tanggalKadaluarsa)
    {
        $this->tanggalKadaluarsa = $tanggalKadaluarsa;
    }

    public function getTanggalKadaluarsa()
    {
        return $this->tanggalKadaluarsa;
    }

    public function isExpired()
    {
        $now = new \DateTime();
        $now = new \DateTime($now->format('Y-m-d'));

        if ($this->tanggalKadaluarsa < $now) {
            if ($this->getPerpanjanganCuti()->getTanggalKadaluarsa() < $now) {
                return true;
            }
        }

        return false;
    }

    public function getTotalLimit()
    {
        return $this->totalLimit;
    }

    public function getSisaLimit()
    {
        $sisaLimit = 0;

        foreach ($this->pengambilanCuti as $pengambilanCuti) {
            if ($pengambilanCuti->isDisetujui()) {
                $sisaLimit += $pengambilanCuti->getJumlahHari();
            }
        }

        return $this->totalLimit - $sisaLimit;
    }

    public function setPerpanjanganCuti(PerpanjanganCuti $perpanjanganCuti)
    {
        $perpanjanganCuti->setMasterCuti($this);
        $this->perpanjanganCuti = $perpanjanganCuti;
    }

    public function getPerpanjanganCuti()
    {
        return $this->perpanjanganCuti;
    }

    public function setParent(MasterCuti $parent)
    {
        $parent->setChild($this);
        $this->parent = $parent;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function setChild(MasterCuti $child)
    {
        $this->child = $child;
    }

    public function getChild()
    {
        return $this->child;
    }

    public function addPengambilanCuti(PengambilanCuti $pengambilanCuti)
    {
        $pengambilanCuti->setMasterCuti($this);
        $this->pengambilanCuti->add($pengambilanCuti);
    }

    public function removePengambilanCuti(PengambilanCuti $pengambilanCuti)
    {
        $this->pengambilanCuti->removeElement($pengambilanCuti);
    }

    public function getPengambilanCuti()
    {
        return $this->pengambilanCuti;
    }
}
