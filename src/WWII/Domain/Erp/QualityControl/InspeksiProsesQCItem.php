<?php

namespace WWII\Domain\Erp\QualityControl;

class InspeksiProsesQCItem
{
    protected $id;

    protected $waktu;

    protected $kodeProduk;

    protected $namaProduk;

    protected $jumlahItemTerinspeksi;

    protected $jumlahItemTergores;

    protected $jumlahItemTerpolusi;

    protected $jumlahItemSalahUkuran;

    protected $jumlahItemKelebihanLem;

    protected $jumlahItemKelebihanCat;

    protected $jumlahItemSalahWarna;

    protected $jumlahItemBergelembung;

    protected $jumlahItemStrukturLonggar;

    protected $jumlahItemCoverTerpotong;

    protected $jumlahItemArahHorizontal;

    protected $jumlahItemSandingBuruk;

    protected $jumlahItemPakuKeluar;

    protected $jumlahItemLemDegumming;

    protected $jumlahItemGap;

    protected $jumlahItemCacatLainnya;

    protected $jumlahItemKurang;

    protected $inspeksiProsesQC;

    public function getId()
    {
        return $this->id;
    }

    public function setWaktu(\DateTime $waktu)
    {
        $this->waktu = $waktu;
    }

    public function getWaktu()
    {
        return $this->waktu;
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

    public function setJumlahItemTerinspeksi($jumlahItemTerinspeksi)
    {
        $this->jumlahItemTerinspeksi = $jumlahItemTerinspeksi;
    }

    public function getJumlahItemTerinspeksi()
    {
        return $this->jumlahItemTerinspeksi;
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

    public function setJumlahItemSalahWarna($jumlahItemSalahWarna)
    {
        $this->jumlahItemSalahWarna = $jumlahItemSalahWarna;
    }

    public function getJumlahItemSalahWarna()
    {
        return $this->jumlahItemSalahWarna;
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

    public function setJumlahItemSandingBuruk($jumlahItemSandingBuruk)
    {
        $this->jumlahItemSandingBuruk = $this->jumlahItemSandingBuruk;
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

    public function setJumlahItemCacatLainnya($jumlahItemCacatLainnya)
    {
        $this->jumlahItemCacatLainnya = $jumlahItemCacatLainnya;
    }

    public function getJumlahItemCacatLainnya()
    {
        return $this->jumlahItemCacatLainnya;
    }

    public function getJumlahItemKualitasBuruk()
    {
        $itemKualitasBuruk = $this->jumlahItemTergores + $this->jumlahItemTerpolusi + $this->jumlahItemSalahUkuran
            + $this->jumlahItemKelebihanLem + $this->jumlahItemKelebihanCat + $this->jumlahItemSalahWarna
            + $this->jumlahItemBergelembung + $this->jumlahItemStrukturLonggar + $this->jumlahItemCoverTerpotong
            + $this->jumlahItemArahHorizontal + $this->jumlahItemSandingBuruk + $this->jumlahItemPakuKeluar
            + $this->jumlahItemLemDegumming + $this->jumlahItemGap + $this->jumlahItemCacatLainnya;

        return $itemKualitasBuruk;
    }

    public function setJumlahItemKurang($jumlahItemKurang)
    {
        $this->jumlahItemKurang = $jumlahItemKurang;
    }

    public function getItemKurang()
    {
        return $this->jumlahItemKurang;
    }

    public function setInspeksiProsesQC(InspeksiProsesQc $inspeksiProsesQC)
    {
        $this->inspeksiProsesQC = $inspeksiProsesQC;
    }

    public function getInspeksiProsesQC()
    {
        return $this->inspeksiProsesQC;
    }
}
