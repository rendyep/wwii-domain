<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class PembahananPanelInspectionItem
{
    protected $id;

    protected $customer;

    protected $PO;

    protected $kodeProduk;

    protected $namaProduk;

    protected $inspectionLevel;

    protected $acceptanceIndex;

    protected $jumlahLot;

    protected $jumlahInspeksi = 0;

    protected $jumlahItemSalahPerakitan = 0;

    protected $jumlahItemMaterial = 0;

    protected $jumlahItemSalahMaterial = 0;

    protected $jumlahItemArahBungaVeneerSalah = 0;

    protected $jumlahItemSalahUkuran = 0;

    protected $jumlahItemRonggaGap = 0;

    protected $jumlahItemGoresanPisau = 0;

    protected $jumlahItemLengkunganTidakSama = 0;

    protected $jumlahItemRetak = 0;

    protected $jumlahItemMenjadiHitam = 0;

    protected $jumlahItemSandingBuruk = 0;

    protected $jumlahItemTekananTidak = 0;

    protected $jumlahItemPotonganCuwil = 0;

    protected $jumlahItemAssemblyBuruk = 0;

    protected $jumlahItemKesikuanSudut = 0;

    protected $jumlahItemDegumming = 0;

    protected $jumlahItemKelebihanLem = 0;

    protected $jumlahItemKurangLem = 0;

    protected $jumlahItemBurukLainnya = 0;

    protected $jumlahItemKurangPanjang = 0;

    protected $jumlahItemKurangLebar = 0;

    protected $jumlahItemPanjangLebih = 0;

    protected $jumlahItemLebarLebih = 0;

    protected $jumlahItemCutterMark = 0;

    protected $jumlahItemPotonganTidakSiku = 0;

    protected $jumlahItemLetakAlurSalah = 0;

    protected $jumlahItemKurangTebal = 0;

    protected $jumlahItemKurangTipis = 0;

    protected $jumlahItemMaterialGelombang = 0;

    protected $jumlahItemListTidakSama = 0;

    protected $jumlahItemTekananTidakMaksimal = 0;

    protected $jumlahItemGelombang = 0;

    protected $jumlahItemRakitanTerbalik = 0;

    protected $jumlahItemOverSending = 0;

    protected $jumlahItemKurangSending = 0;

    protected $pembahananPanelInspectionTime;

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

    public function setJumlahItemSalahPerakitan($jumlahItemSalahPerakitan)
    {
        $this->jumlahItemSalahPerakitan = $jumlahItemSalahPerakitan;
    }

    public function getJumlahItemSalahPerakitan()
    {
        return $this->jumlahItemSalahPerakitan;
    }

    public function setJumlahItemMaterial($jumlahItemMaterial)
    {
        $this->jumlahItemMaterial = $jumlahItemMaterial;
    }

    public function getJumlahItemMaterial()
    {
        return $this->jumlahItemMaterial;
    }

    public function setJumlahItemSalahMaterial($jumlahItemSalahMaterial)
    {
        $this->jumlahItemSalahMaterial = $jumlahItemSalahMaterial;
    }

    public function getJumlahItemSalahMaterial()
    {
        return $this->jumlahItemSalahMaterial;
    }

    public function setJumlahItemArahBungaVeneerSalah($jumlahItemArahBungaVeneerSalah)
    {
        $this->jumlahItemArahBungaVeneerSalah = $jumlahItemArahBungaVeneerSalah;
    }

    public function getJumlahItemArahBungaVeneerSalah()
    {
        return $this->jumlahItemArahBungaVeneerSalah;
    }

    public function setJumlahItemSalahUkuran($jumlahItemSalahUkuran)
    {
        $this->jumlahItemSalahUkuran = $jumlahItemSalahUkuran;
    }

    public function getJumlahItemSalahUkuran()
    {
        return $this->jumlahItemSalahUkuran;
    }

    public function setJumlahItemRonggaGap($jumlahItemRonggaGap)
    {
        $this->jumlahItemRonggaGap = $jumlahItemRonggaGap;
    }

    public function getJumlahItemRonggaGap()
    {
        return $this->jumlahItemRonggaGap;
    }

    public function setJumlahItemGoresanPisau($jumlahItemGoresanPisau)
    {
        $this->jumlahItemGoresanPisau = $jumlahItemGoresanPisau;
    }

    public function getJumlahItemGoresanPisau()
    {
        return $this->jumlahItemGoresanPisau;
    }

    public function setJumlahItemLengkunganTidakSama($jumlahItemLengkunganTidakSama)
    {
        $this->jumlahItemLengkunganTidakSama = $jumlahItemLengkunganTidakSama;
    }

    public function getJumlahItemLengkunganTidakSama()
    {
        return $this->jumlahItemLengkunganTidakSama;
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

    public function setJumlahItemTekananTidak($jumlahItemTekananTidak)
    {
        $this->jumlahItemTekananTidak = $jumlahItemTekananTidak;
    }

    public function getJumlahItemTekananTidak()
    {
        return $this->jumlahItemTekananTidak;
    }

    public function setJumlahItemPotonganCuwil($jumlahItemPotonganCuwil)
    {
        $this->jumlahItemPotonganCuwil = $jumlahItemPotonganCuwil;
    }

    public function getJumlahItemPotonganCuwil()
    {
        return $this->jumlahItemPotonganCuwil;
    }

    public function setJumlahItemAssemblyBuruk($jumlahItemAssemblyBuruk)
    {
        $this->jumlahItemAssemblyBuruk = $jumlahItemAssemblyBuruk;
    }

    public function getJumlahItemAssemblyBuruk()
    {
        return $this->jumlahItemAssemblyBuruk;
    }

    public function setJumlahItemKesikuanSudut($jumlahItemKesikuanSudut)
    {
        $this->jumlahItemKesikuanSudut = $jumlahItemKesikuanSudut;
    }

    public function getJumlahItemKesikuanSudut()
    {
        return $this->jumlahItemKesikuanSudut;
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

    public function setJumlahItemKurangLem($jumlahItemKurangLem)
    {
        $this->jumlahItemKurangLem = $jumlahItemKurangLem;
    }

    public function getJumlahItemKurangLem()
    {
        return $this->jumlahItemKurangLem;
    }

    public function setJumlahItemBurukLainnya($jumlahItemBurukLainnya)
    {
        $this->jumlahItemBurukLainnya = $jumlahItemBurukLainnya;
    }

    public function getJumlahItemBurukLainnya()
    {
        return $this->jumlahItemBurukLainnya;
    }

    public function setJumlahItemKurangPanjang($jumlahItemKurangPanjang)
    {
        $this->jumlahItemKurangPanjang = $jumlahItemKurangPanjang;
    }

    public function getJumlahItemKurangPanjang()
    {
        return $this->jumlahItemKurangPanjang;
    }

    public function setJumlahItemKurangLebar($jumlahItemKurangLebar)
    {
        $this->jumlahItemKurangLebar = $jumlahItemKurangLebar;
    }

    public function getJumlahItemKurangLebar()
    {
        return $this->jumlahItemKurangLebar;
    }

    public function setJumlahItemPanjangLebih($jumlahItemPanjangLebih)
    {
        $this->jumlahItemPanjangLebih = $jumlahItemPanjangLebih;
    }

    public function getJumlahItemPanjangLebih()
    {
        return $this->jumlahItemPanjangLebih;
    }

    public function setJumlahItemLebarLebih($jumlahItemLebarLebih)
    {
        $this->jumlahItemLebarLebih = $jumlahItemLebarLebih;
    }

    public function getJumlahItemLebarLebih()
    {
        return $this->jumlahItemLebarLebih;
    }

    public function setJumlahItemCutterMark($jumlahItemCutterMark)
    {
        $this->jumlahItemCutterMark = $jumlahItemCutterMark;
    }

    public function getJumlahItemCutterMark()
    {
        return $this->jumlahItemCutterMark;
    }

    public function setJumlahItemPotonganTidakSiku($jumlahItemPotonganTidakSiku)
    {
        $this->jumlahItemPotonganTidakSiku = $jumlahItemPotonganTidakSiku;
    }

    public function getJumlahItemPotonganTidakSiku()
    {
        return $this->jumlahItemPotonganTidakSiku;
    }

    public function setJumlahItemLetakAlurSalah($jumlahItemLetakAlurSalah)
    {
        $this->jumlahItemLetakAlurSalah = $jumlahItemLetakAlurSalah;
    }

    public function getJumlahItemLetakAlurSalah()
    {
        return $this->jumlahItemLetakAlurSalah;
    }

    public function setJumlahItemKurangTebal($jumlahItemKurangTebal)
    {
        $this->jumlahItemKurangTebal = $jumlahItemKurangTebal;
    }

    public function getJumlahItemKurangTebal()
    {
        return $this->jumlahItemKurangTebal;
    }

    public function setJumlahItemKurangTipis($jumlahItemKurangTipis)
    {
        $this->jumlahItemKurangTipis = $jumlahItemKurangTipis;
    }

    public function getJumlahItemKurangTipis()
    {
        return $this->jumlahItemKurangTipis;
    }

    public function setJumlahItemMaterialGelombang($jumlahItemMaterialGelombang)
    {
        $this->jumlahItemMaterialGelombang = $jumlahItemMaterialGelombang;
    }

    public function getJumlahItemMaterialGelombang()
    {
        return $this->jumlahItemMaterialGelombang;
    }

    public function setJumlahItemListTidakSama($jumlahItemListTidakSama)
    {
        $this->jumlahItemListTidakSama = $jumlahItemListTidakSama;
    }

    public function getJumlahItemListTidakSama()
    {
        return $this->jumlahItemListTidakSama;
    }

    public function setJumlahItemTekananTidakMaksimal($jumlahItemTekananTidakMaksimal)
    {
        $this->jumlahItemTekananTidakMaksimal = $jumlahItemTekananTidakMaksimal;
    }

    public function getJumlahItemTekananTidakMaksimal()
    {
        return $this->jumlahItemTekananTidakMaksimal;
    }

    public function setJumlahItemGelombang($jumlahItemGelombang)
    {
        $this->jumlahItemGelombang = $jumlahItemGelombang;
    }

    public function getJumlahItemGelombang()
    {
        return $this->jumlahItemGelombang;
    }

    public function setJumlahItemRakitanTerbalik($jumlahItemRakitanTerbalik)
    {
        $this->jumlahItemRakitanTerbalik = $jumlahItemRakitanTerbalik;
    }

    public function getJumlahItemRakitanTerbalik()
    {
        return $this->jumlahItemRakitanTerbalik;
    }

    public function setJumlahItemOverSending($jumlahItemOverSending)
    {
        $this->jumlahItemOverSending = $jumlahItemOverSending;
    }

    public function getJumlahItemOverSeding()
    {
        return $this->jumlahItemOverSending;
    }

    public function setJumlahItemKurangSending($jumlahItemKurangSending)
    {
        $this->jumlahItemKurangSending = $jumlahItemKurangSending;
    }

    public function getJumlahItemKurangSending()
    {
        return $this->jumlahItemKurangSending;
    }

    public function getJumlahTotalItemBuruk()
    {
        $jumlahTotalItemBuruk = $this->jumlahItemSalahPerakitan + $this->jumlahItemMaterial
            + $this->jumlahItemSalahMaterial + $this->jumlahItemArahBungaVeneerSalah + $this->jumlahItemSalahUkuran
            + $this->jumlahItemRonggaGap + $this->jumlahItemGoresanPisau + $this->jumlahItemLengkunganTidakSama
            + $this->jumlahItemRetak + $this->jumlahItemMenjadiHitam + $this->jumlahItemSandingBuruk
            + $this->jumlahItemTekananTidak + $this->jumlahItemPotonganCuwil + $this->jumlahItemAssemblyBuruk
            + $this->jumlahItemKesikuanSudut + $this->jumlahItemDegumming + $this->jumlahItemKelebihanLem
            + $this->jumlahItemKurangLem + $this->jumlahItemBurukLainnya + $this->jumlahItemKurangPanjang
            + $this->jumlahItemKurangLebar + $this->jumlahItemPanjangLebih + $this->jumlahItemLebarLebih
            + $this->jumlahItemCutterMark + $this->jumlahItemPotonganTidakSiku + $this->jumlahItemLetakAlurSalah
            + $this->jumlahItemKurangTebal + $this->jumlahItemKurangTipis + $this->jumlahItemMaterialGelombang
            + $this->jumlahItemListTidakSama + $this->jumlahItemTekananTidakMaksimal + $this->jumlahItemGelombang
            + $this->jumlahItemRakitanTerbalik + $this->jumlahItemOverSending + $this->jumlahItemKurangSending;

        return $jumlahTotalItemBuruk;
    }

    public function setPembahananPanelInspectionTime(PembahananPanelInspectionTime $pembahananPanelInspectionTime)
    {
        $this->pembahananPanelInspectionTime = $pembahananPanelInspectionTime;
    }

    public function getPembahananPanelInspectionTime()
    {
        return $this->pembahananPanelInspectionTime;
    }
}
