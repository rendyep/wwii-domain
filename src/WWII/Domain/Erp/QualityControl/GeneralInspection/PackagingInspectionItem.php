<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class PackagingInspectionItem
{
    protected $id;

    protected $kodeProduk;

    protected $namaProduk;

    protected $inspectionLevel;

    protected $acceptanceIndex;

    protected $jumlahLot;

    protected $jumlahInspeksi;

    protected $jumlahItemSalahFlowProses;

    protected $jumlahItemKualitasBuruk;

    protected $jumlahItemSalahKualitas;

    protected $jumlahItemSalahPosisiLubang;

    protected $jumlahItemSalahUkuran;

    protected $jumlahItemBekasGoresanPisau;

    protected $jumlahItemSobek;

    protected $jumlahItemRetak;

    protected $jumlahItemHitam;

    protected $jumlahItemSandingBuruk;

    protected $jumlahItemGoresanTekanan;

    protected $jumlahItemPakuKeluar;

    protected $jumlahItemBerdiriBuruk;

    protected $jumlahItemPerbaikanBuruk;

    protected $jumlahItemLemDegumming;

    protected $jumlahItemKelebihanLem;

    protected $jumlahItemSuhuTerlaluTinggi;

    protected $jumlahItemBurukLainnya;

    protected $jumlahItemKekurangan;

    protected $packagingInspectionTime;

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

    public function setJumlahItemSalahFlowProses($jumlahItemSalahFlowProses)
    {
        $this->jumlahItemSalahFlowProses = $jumlahItemSalahFlowProses;
    }

    public function getJumlahItemSalahFlowProses()
    {
        return $this->jumlahItemSalahFlowProses;
    }

    public function setJumlahItemKualitasBuruk($jumlahItemKualitasBuruk)
    {
        $this->jumlahItemKualitasBuruk = $jumlahItemKualitasBuruk;
    }

    public function getJumlahItemKualitasBuruk()
    {
        return $this->jumlahItemKualitasBuruk;
    }

    public function setJumlahItemSalahKualitas($jumlahItemSalahKualitas)
    {
        $this->jumlahItemSalahKualitas = $jumlahItemSalahKualitas;
    }

    public function getJumlahItemSalahKualitas()
    {
        return $this->jumlahItemSalahKualitas;
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

    public function setJumlahItemBekasGoresanPisau($jumlahItemBekasGoresanPisau)
    {
        $this->jumlahItemBekasGoresanPisau = $jumlahItemBekasGoresanPisau;
    }

    public function getJumlahItemBekasGoresanPisau()
    {
        return $this->jumlahItemBekasGoresanPisau;
    }

    public function setJumlahItemSobek($jumlahItemSobek)
    {
        $this->jumlahItemSobek = $jumlahItemSobek;
    }

    public function getJumlahItemSobek()
    {
        return $this->jumlahItemSobek;
    }

    public function setJumlahItemRetak($jumlahItemRetak)
    {
        $this->jumlahItemRetak = $jumlahItemRetak;
    }

    public function getJumlahItemRetak()
    {
        return $this->jumlahItemRetak;
    }

    public function setJumlahItemHitam($jumlahItemHitam)
    {
        $this->jumlahItemHitam = $jumlahItemHitam;
    }

    public function getJumlahItemHitam()
    {
        return $this->jumlahItemHitam;
    }

    public function setJumlahItemSandingBuruk($jumlahItemSandingBuruk)
    {
        $this->jumlahItemSandingBuruk = $jumlahItemSandingBuruk;
    }

    public function getJumlahItemSandingBuruk()
    {
        return $this->jumlahItemSandingBuruk;
    }

    public function setJumlahItemGoresanTekanan($jumlahItemGoresanTekanan)
    {
        $this->jumlahItemGoresanTekanan = $jumlahItemGoresanTekanan;
    }

    public function getJumlahItemGoresanTekanan()
    {
        return $this->jumlahItemGoresanTekanan;
    }

    public function setJumlahItemPakuKeluar($jumlahItemPakuKeluar)
    {
        $this->jumlahItemPakuKeluar = $jumlahItemPakuKeluar;
    }

    public function getJumlahItemPakuKeluar()
    {
        return $this->jumlahItemPakuKeluar;
    }

    public function setJumlahItemBerdiriBuruk($jumlahItemBerdiriBuruk)
    {
        $this->jumlahItemBerdiriBuruk = $jumlahItemBerdiriBuruk;
    }

    public function getJumlahItemBerdiriBuruk()
    {
        return $this->jumlahItemBerdiriBuruk;
    }

    public function setJumlahItemPerbaikanBuruk($jumlahItemPerbaikanBuruk)
    {
        $this->jumlahItemPerbaikanBuruk = $jumlahItemPerbaikanBuruk;
    }

    public function getJumlahItemPerbaikanBuruk()
    {
        return $this->jumlahItemPerbaikanBuruk;
    }

    public function setJumlahItemLemDegumming($jumlahItemLemDegumming)
    {
        $this->jumlahItemLemDegumming = $jumlahItemLemDegumming;
    }

    public function getJumlahItemLemDegumming()
    {
        return $this->jumlahItemLemDegumming;
    }

    public function setJumlahItemKelebihanLem($jumlahItemKelebihanLem)
    {
        $this->jumlahItemKelebihanLem = $jumlahItemKelebihanLem;
    }

    public function getJumlahItemKelebihanLem()
    {
        return $this->jumlahItemKelebihanLem;
    }

    public function setJumlahItemSuhuTerlaluTinggi($jumlahItemSuhuTerlaluTinggi)
    {
        $this->jumlahItemSuhuTerlaluTinggi = $jumlahItemSuhuTerlaluTinggi;
    }

    public function getJumlahItemSuhuTerlaluTinggi()
    {
        return $this->jumlahItemSuhuTerlaluTinggi;
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
        $jumlahTotalItemBuruk = $this->jumlahItemSalahFlowProses + $this->jumlahItemKualitasBuruk
            + $this->jumlahItemSalahKualitas + $this->jumlahItemSalahPosisiLubang + $this->jumlahItemSalahUkuran
            + $this->jumlahItemBekasGoresanPisau + $this->jumlahItemSobek + $this->jumlahItemRetak
            + $this->jumlahItemHitam + $this->jumlahItemSandingBuruk + $this->jumlahItemGoresanTekanan
            + $this->jumlahItemPakuKeluar + $this->jumlahItemBerdiriBuruk + $this->jumlahItemPerbaikanBuruk
            + $this->jumlahItemLemDegumming + $this->jumlahItemKelebihanLem + $this->jumlahItemSuhuTerlaluTinggi
            + $this->jumlahItemBurukLainnya;

        return $jumlahTotalItemBuruk;
    }

    public function setPackagingInspectionTime(PackagingInspectionTime $packagingInspectionTime)
    {
        $this->packagingInspectionTime = $packagingInspectionTime;
    }

    public function getPackagingInspectionTime()
    {
        return $this->packagingInspectionTime;
    }
}
