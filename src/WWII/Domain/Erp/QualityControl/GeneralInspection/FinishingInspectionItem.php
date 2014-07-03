<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class FinishingInspectionItem
{
    protected $id;

    protected $kodeProduk;

    protected $namaProduk;

    protected $inspectionLevel;

    protected $acceptanceIndex;

    protected $jumlahLot;

    protected $jumlahInspeksi;

    protected $jumlahItemTergores;

    protected $jumlahItemTerpolusi;

    protected $jumlahItemSalahUkuran;

    protected $jumlahItemKelebihanLem;

    protected $jumlahItemKelebihanCat;

    protected $jumlahItemWarna;

    protected $jumlahItemBergelembung;

    protected $jumlahItemStrukturLonggar;

    protected $jumlahItemCoverTerpotong;

    protected $jumlahItemArahHorizontal;

    protected $jumlahItemSandingBuruk;

    protected $jumlahItemPakuKeluar;

    protected $jumlahItemLemDegumming;

    protected $jumlahItemGap;

    protected $jumlahItemBurukLainnya;

    protected $jumlahItemKekurangan;

    protected $finishingInspectionTime;

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

    public function setKodeProduk($kodeProduk)
    {
        $this->kodeProduk = $kodeProduk;
    }

    public function getKodeProduk()
    {
        return $this->kodeProduk;
    }

    public function setNamaProduk($namaProduk)
    {
        $this->namaProduk = $namaProduk;
    }

    public function getNamaProduk()
    {
        return $this->namaProduk;
    }

    public function setInspectionLevel($inspectionLevel)
    {
        $this->inspectionLevel = $inspectionLevel;
    }

    public function getInspectionLevel()
    {
        return $this->inspectionLevel;
    }

    public function setAcceptanceIndex($acceptanceIndex)
    {
        $this->acceptanceIndex = $acceptanceIndex;
    }

    public function getAcceptanceIndex()
    {
        return $this->acceptanceIndex;
    }

    public function setJumlahLot($jumlahLot)
    {
        $this->jumlahLot = $jumlahLot;
    }

    public function getJumlahLot()
    {
        return $this->jumlahLot;
    }

    public function setJumlahInspeksi($jumlahInspeksi)
    {
        $this->jumlahInspeksi = $jumlahInspeksi;
    }

    public function getJumlahInspeksi()
    {
        return $this->jumlahInspeksi;
    }

    public function setJumlahItemTergores($jumlahItemTergores)
    {
        $this->jumlahItemTergores = $jumlahItemTergores;
    }

    public function getJumlahItemTergores()
    {
        return $this->jumlahItemTergores;
    }

    public function setJumlahItemTerpolusi($jumlahItemTerpolusi)
    {
        $this->jumlahItemTerpolusi = $jumlahItemTerpolusi;
    }

    public function getJumlahItemTerpolusi()
    {
        return $this->jumlahItemTerpolusi;
    }

    public function setJumlahItemSalahUkuran($jumlahItemSalahUkuran)
    {
        $this->jumlahItemSalahUkuran = $jumlahItemSalahUkuran;
    }

    public function getJumlahItemSalahUkuran()
    {
        return $this->jumlahItemSalahUkuran;
    }

    public function setJumlahItemKelebihanLem($jumlahItemKelebihanLem)
    {
        $this->jumlahItemKelebihanLem = $jumlahItemKelebihanLem;
    }

    public function getJumlahItemKelebihanLem()
    {
        return $this->jumlahItemKelebihanLem;
    }

    public function setJumlahItemKelebihanCat($jumlahItemKelebihanCat)
    {
        $this->jumlahItemKelebihanCat = $jumlahItemKelebihanCat;
    }

    public function getJumlahItemKelebihanCat()
    {
        return $this->jumlahItemKelebihanCat;
    }

    public function setJumlahItemWarna($jumlahItemWarna)
    {
        $this->jumlahItemWarna = $jumlahItemWarna;
    }

    public function getJumlahItemWarna()
    {
        return $this->jumlahItemWarna;
    }

    public function setJumlahItemBergelembung($jumlahItemBergelembung)
    {
        $this->jumlahItemBergelembung = $jumlahItemBergelembung;
    }

    public function getJumlahItemBergelembung()
    {
        return $this->jumlahItemBergelembung;
    }

    public function setJumlahItemStrukturLonggar($jumlahItemStrukturLonggar)
    {
        $this->jumlahItemStrukturLonggar = $jumlahItemStrukturLonggar;
    }

    public function getJumlahItemStrukturLonggar()
    {
        return $this->jumlahItemStrukturLonggar;
    }

    public function setJumlahItemCoverTerpotong($jumlahItemCoverTerpotong)
    {
        $this->jumlahItemCoverTerpotong = $jumlahItemCoverTerpotong;
    }

    public function getJumlahItemCoverTerpotong()
    {
        return $this->jumlahItemCoverTerpotong;
    }

    public function setJumlahItemArahHorizontal($jumlahItemArahHorizontal)
    {
        $this->jumlahItemArahHorizontal = $jumlahItemArahHorizontal;
    }

    public function getJumlahItemArahHorizontal()
    {
        return $this->jumlahItemArahHorizontal;
    }

    public function setJumlahItemSandingBuruk($jumlahItemSandingBuruk)
    {
        $this->jumlahItemSandingBuruk = $jumlahItemSandingBuruk;
    }

    public function getJumlahItemSandingBuruk()
    {
        return $this->jumlahItemSandingBuruk;
    }

    public function setJumlahItemPakuKeluar($jumlahItemPakuKeluar)
    {
        $this->jumlahItemPakuKeluar = $jumlahItemPakuKeluar;
    }

    public function getJumlahItemPakuKeluar()
    {
        return $this->jumlahItemPakuKeluar;
    }

    public function setJumlahItemLemDegumming($jumlahItemLemDegumming)
    {
        $this->jumlahItemLemDegumming = $jumlahItemLemDegumming;
    }

    public function getJumlahItemLemDegumming()
    {
        return $this->jumlahItemLemDegumming;
    }

    public function setJumlahItemGap($jumlahItemGap)
    {
        $this->jumlahItemGap = $jumlahItemGap;
    }

    public function getJumlahItemGap()
    {
        return $this->jumlahItemGap;
    }

    public function setJumlahItemBurukLainnya($jumlahItemBurukLainnya)
    {
        $this->jumlahItemBurukLainnya = $jumlahItemBurukLainnya;
    }

    public function getJumlahItemBurukLainnya()
    {
        return $this->jumlahItemBurukLainnya;
    }

    public function setJumlahItemKekurangan($jumlahItemKekurangan)
    {
        $this->jumlahItemKekurangan = $jumlahItemKekurangan;
    }

    public function getJumlahItemKekurangan()
    {
        return $this->jumlahItemKekurangan;
    }

    public function getJumlahTotalItemBuruk()
    {
        $jumlahTotalItemBuruk = $this->jumlahItemTergores + $this->jumlahItemTerpolusi + $this->jumlahItemSalahUkuran
            + $this->jumlahItemKelebihanLem + $this->jumlahItemKelebihanCat + $this->jumlahItemWarna
            + $this->jumlahItemBergelombang + $this->jumlahItemCoverTerpotong + $this->jumlahItemArahHorizontal
            + $this->jumlahItemSandingBuruk + $this->jumlahItemPakuKeluar + $this->jumlahItemLemDegumming
            + $this->jumlahItemGap + $this->jumlahItemBurukLainnya;

        return $jumlahTotalItemBuruk;
    }

    public function setFinishingInspectionTime(FinishingInspectionTime $finishingInspectionTime)
    {
        $this->finishingInspectionTime = $finishingInspectionTime;
    }

    public function getFinishingInspectionTime()
    {
        return $this->finishingInspectionTime;
    }
}
