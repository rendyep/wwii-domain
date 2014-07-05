<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class WhitewoodInspectionItem
{
    protected $id;

    protected $customer;

    protected $PO;

    protected $nomorKerja;

    protected $kodeProduk;

    protected $namaProduk;

    protected $inspectionLevel;

    protected $acceptanceIndex;

    protected $jumlahLot;

    protected $jumlahInspeksi = 0;

    protected $jumlahItemSalahProses = 0;

    protected $jumlahItemKualitasBuruk = 0;

    protected $jumlahItemKualitasTidakBenar = 0;

    protected $jumlahItemPosisiLubangSalah = 0;

    protected $jumlahItemSalahUkuran = 0;

    protected $jumlahItemSalahJenisPisau = 0;

    protected $jumlahItemGoresanPisau = 0;

    protected $jumlahItemRobek = 0;

    protected $jumlahItemRetak = 0;

    protected $jumlahItemMenjadiHitam = 0;

    protected $jumlahItemSandingBuruk = 0;

    protected $jumlahItemGoresanTekanan = 0;

    protected $jumlahItemPakuKeluar = 0;

    protected $jumlahItemAssemblyBuruk = 0;

    protected $jumlahItemPerbaikanBuruk = 0;

    protected $jumlahItemDegumming = 0;

    protected $jumlahItemKelebihanLem = 0;

    protected $jumlahItemSuhuTerlaluTinggi = 0;

    protected $jumlahItemBurukLainnya = 0;

    protected $jumlahItemKekurangan = 0;

    protected $whitewoodInspectionTime;

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

    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function setPO($PO)
    {
        $this->PO = $PO;
    }

    public function getPO()
    {
        return $this->PO;
    }

    public function setNomorKerja($nomorKerja)
    {
        $this->nomorKerja = $nomorKerja;
    }

    public function getNomorKerja()
    {
        return $this->nomorKerja;
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

    public function setJumlahItemSalahProses($jumlahItemSalahProses)
    {
        $this->jumlahItemSalahProses = $jumlahItemSalahProses;
    }

    public function getJumlahItemSalahProses()
    {
        return $this->jumlahItemSalahProses;
    }

    public function setJumlahItemKualitasBuruk($jumlahItemKualitasBuruk)
    {
        $this->jumlahItemKualitasBuruk = $jumlahItemKualitasBuruk;
    }

    public function getJumlahItemKualitasBuruk()
    {
        return $this->jumlahItemKualitasBuruk;
    }

    public function setJumlahItemKualitasTidakBenar($jumlahItemKualitasTidakBenar)
    {
        $this->jumlahItemKualitasTidakBenar = $jumlahItemKualitasTidakBenar;
    }

    public function getJumlahItemKualitasTidakBenar()
    {
        return $this->jumlahItemKualitasTidakBenar;
    }

    public function setJumlahItemPosisiLubangSalah($jumlahItemPosisiLubangSalah)
    {
        $this->jumlahItemPosisiLubangSalah = $jumlahItemPosisiLubangSalah;
    }

    public function getJumlahItemPosisiLubangSalah()
    {
        return $this->jumlahItemPosisiLubangSalah;
    }

    public function setJumlahItemSalahUkuran($jumlahItemSalahUkuran)
    {
        $this->jumlahItemSalahUkuran = $jumlahItemSalahUkuran;
    }

    public function getJumlahItemSalahUkuran()
    {
        return $this->jumlahItemSalahUkuran;
    }

    public function setJumlahItemSalahJenisPisau($jumlahItemSalahJenisPisau)
    {
        $this->jumlahItemSalahJenisPisau = $jumlahItemSalahJenisPisau;
    }

    public function getJumlahItemSalahJenisPisau()
    {
        return $this->jumlahItemSalahJenisPisau;
    }

    public function setJumlahItemGoresanPisau($jumlahGoresanPisau)
    {
        $this->jumlahGoresanPisau = $jumlahGoresanPisau;
    }

    public function getJumlahGoresanPisau()
    {
        return $this->jumlahGoresanPisau;
    }

    public function setJumlahItemRobek($jumlahItemRobek)
    {
        $this->jumlahItemRobek = $jumlahItemRobek;
    }

    public function getJumlahItemRobek()
    {
        return $this->jumlahItemRobek;
    }

    public function setJumlahItemRetak($jumlahItemRetak)
    {
        $this->jumlahItemRetak = $jumlahItemRetak;
    }

    public function getJumlahItemRetak()
    {
        return $this->jumlahItemRetak;
    }

    public function setJumlahItemMenjadiHitam($jumlahItemMenjadiHitam)
    {
        $this->jumlahItemMenjadiHitam = $jumlahItemMenjadiHitam;
    }

    public function getJumlahItemMenjadiHitam()
    {
        return $this->jumlahItemMenjadiHitam;
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

    public function setJumlahItemAssemblyBuruk($jumlahItemAssemblyBuruk)
    {
        $this->jumlahItemAssemblyBuruk = $jumlahItemAssemblyBuruk;
    }

    public function getJumlahItemAssemblyBuruk()
    {
        return $this->jumlahItemAssemblyBuruk;
    }

    public function setJumlahItemPerbaikanBuruk($jumlahItemPerbaikanBuruk)
    {
        $this->jumlahItemPerbaikanBuruk = $jumlahItemPerbaikanBuruk;
    }

    public function getJumlahItemPerbaikanBuruk()
    {
        return $this->jumlahItemPerbaikanBuruk;
    }

    public function setJumlahItemDegumming($jumlahItemDegumming)
    {
        $this->jumlahItemDegumming = $jumlahItemDegumming;
    }

    public function getJumlahItemDegumming()
    {
        return $this->jumlahItemDegumming;
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
        $jumlahTotalItemBuruk = $this->jumlahItemSalahProses + $this->jumlahItemKualitasBuruk
            + $this->jumlahItemKualitasTidakBenar + $this->jumlahItemPosisiLubangSalah + $this->jumlahItem->salahUkuran
            + $this->jumlahItemSalahJenisPisau + $this->jumlahItemGoresanPisau + $this->jumlahItemRobek
            + $this->jumlahItemRetak + $this->jumlahItemMenjadiHitam + $this->jumlahItemSandingBuruk
            + $this->jumlahItemGoresanTekanan + $this->jumlahItemPakuKeluar + $this->jumlahItemAssemblyBuruk
            + $this->jumlahItemPerbaikanBuruk + $this->jumlahItemDegumming + $this->jumlahItemKelebihanLem
            + $this->jumlahItemSuhuTerlaluTinggi + $this->jumlahItemBurukLainnya;

        return $jumlahTotalItemBuruk;
    }

    public function setWhitewoodInspectionTime(WhitewoodInspectionTime $whitewoodInspectionTime)
    {
        $this->whitewoodInspectionTime = $whitewoodInspectionTime;
    }

    public function getWhitewoodInspectionTime()
    {
        return $this->whitewoodInspectionTime;
    }
}
