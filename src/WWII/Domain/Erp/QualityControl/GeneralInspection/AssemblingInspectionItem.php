<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class AssemblingInspectionItem
{
    protected $id;

    protected $kodeProduk;

    protected $namaProduk;

    protected $inspectionLevel;

    protected $acceptanceIndex;

    protected $jumlahLot;

    protected $jumlahInspeksi;

    protected $jumlahItemKainTergores = 0;

    protected $jumlahItemTidakPresisi = 0;

    protected $jumlahItemSalahPosisiLubang = 0;

    protected $jumlahItemSalahUkuran = 0;

    protected $jumlahItemTergores = 0;

    protected $jumlahItemKelebihanLem = 0;

    protected $jumlahItemStrukturLonggar = 0;

    protected $jumlahItemCoverTerpotong = 0;

    protected $jumlahItemRetak = 0;

    protected $jumlahItemSandingBuruk = 0;

    protected $jumlahItemPakuKeluar = 0;

    protected $jumlahItemLemDegumming = 0;

    protected $jumlahItemGap = 0;

    protected $jumlahItemBurukLainnya = 0;

    protected $jumlahItemKekurangan = 0;

    protected $assemblingInspectionTime;

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

    public function setJumlahItemKainTergores($jumlahItemKainTergores)
    {
        $this->jumlahItemKainTergores = $jumlahItemKainTergores;
    }

    public function getJumlahItemKainTergores()
    {
        return $this->jumlahItemKainTergores;
    }

    public function setJumlahItemTidakPresisi($jumlahItemTidakPresisi)
    {
        $this->jumlahItemTidakPresisi = $jumlahItemTidakPresisi;
    }

    public function getJumlahItemTidakPresisi()
    {
        return $this->jumlahItemTidakPresisi;
    }

    public function setJumlahItemSalahPosisiLubang($jumlahItemSalahPosisiLubang)
    {
        $this->jumlahItemSalahPosisiLubang = $jumlahItemSalahPosisiLubang;
    }

    public function getJumlahItemSalahPosisiLubang()
    {
        return $this->jumlahItemSalahPosisiLubang;
    }

    public function setJumlahItemSalahUkuran($jumlahItemSalahUkuran)
    {
        $this->jumlahItemSalahUkuran = $jumlahItemSalahUkuran;
    }

    public function getJumlahItemSalahUkuran()
    {
        return $this->jumlahItemSalahUkuran;
    }

    public function setJumlahItemTergores($jumlahItemTergores)
    {
        $this->jumlahItemTergores = $jumlahItemTergores;
    }

    public function getJumlahItemTergores()
    {
        return $this->jumlahItemTergores;
    }

    public function setJumlahItemKelebihanLem($jumlahItemKelebihanLem)
    {
        $this->jumlahItemKelebihanLem = $jumlahItemKelebihanLem;
    }

    public function getJumlahItemKelebihanLem()
    {
        return $this->jumlahItemKelebihanLem;
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

    public function setJumlahItemRetak($jumlahItemRetak)
    {
        $this->jumlahItemRetak = $jumlahItemRetak;
    }

    public function getJumlahItemRetak()
    {
        return $this->jumlahItemRetak;
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
        $jumlahTotalItemBuruk = $this->jumlahItemKainTergores + $this->jumlahItemTidakPresisi
            + $this->jumlahItemSalahPosisiLubang + $this->jumlahItemSalahUkuran + $this->jumlahItemTergores
            + $this->jumlahItemKelebihanLem + $this->jumlahItemStrukturLonggar + $this->jumlahItemCoverTerpotong
            + $this->jumlahItemRetak + $this->jumlahItemSandingBuruk + $this->jumlahItemPakuKeluar
            + $this->jumlahItemLemDegumming + $this->jumlahItemGap + $this->jumlahItemBurukLainnya;

        return $jumlahTotalItemBuruk;
    }

    public function setAssemblingInspectionTime(AssemblingInspectionTime $assemblingInspectionTime)
    {
        $this->assemblingInspectionTime = $assemblingInspectionTime;
    }

    public function getAssemblingInspectionTime()
    {
        return $this->assemblingInspectionTime;
    }
}
