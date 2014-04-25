<?php

namespace WWII\Domain\Hrd\Pelamar;

class Pelamar
{
    protected $id;

    protected $namaLengkap;

    protected $namaPanggilan;

    protected $jenisKelamin;

    protected $tanggalLahir;

    protected $agama;

    protected $statusPerkawinan;

    protected $pendidikan;

    protected $jurusan;

    protected $alamat;

    protected $kota;

    protected $kodePos;

    protected $telepon;

    protected $ponsel;

    protected $ponselLain;

    protected $email;

    protected $npwp;

    protected $photo;

    protected $filePelamar;

    protected $detailPelamar;

    public function __construct()
    {
        $this->filePelamar = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNamaLengkap($namaLengkap)
    {
        $this->namaLengkap = $namaLengkap;
    }

    public function getNamaLengkap()
    {
        return $this->namaLengkap;
    }

    public function setNamaPanggilan($namaPanggilan)
    {
        $this->namaPanggilan = $namaPanggilan;
    }

    public function getNamaPanggilan()
    {
        return $this->namaPanggilan;
    }

    public function setJenisKelamin($jenisKelamin)
    {
        $this->jenisKelamin = $jenisKelamin;
    }

    public function getJenisKelamin()
    {
        return $this->jenisKelamin;
    }

    public function setTanggalLahir(\DateTime $tanggalLahir)
    {
        $this->tanggalLahir = $tanggalLahir;
    }

    public function getTanggalLahir()
    {
        return $this->tanggalLahir;
    }

    public function setAgama($agama)
    {
        $this->agama = $agama;
    }

    public function getAgama()
    {
        return $this->agama;
    }

    public function setStatusPerkawinan($statusPerkawinan)
    {
        $this->statusPerkawinan = $statusPerkawinan;
    }

    public function getStatusPerkawinan()
    {
        return $this->statusPerkawinan;
    }

    public function setPendidikan($pendidikan)
    {
        $this->pendidikan = $pendidikan;
    }

    public function getPendidikan()
    {
        return $this->pendidikan;
    }

    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }

    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }

    public function setKota($kota)
    {
        $this->kota = $kota;
    }

    public function getKota()
    {
        return $this->kota;
    }

    public function setKodePos($kodePos)
    {
        $this->kodePos = $kodePos;
    }

    public function getKodePos()
    {
        return $this->kodePos;
    }

    public function setTelepon($telepon)
    {
        $this->telepon = $telepon;
    }

    public function getTelepon()
    {
        return $this->telepon;
    }

    public function setPonsel($ponsel)
    {
        $this->ponsel = $ponsel;
    }

    public function getPonsel()
    {
        return $this->ponsel;
    }

    public function setPonselLain($ponselLain)
    {
        $this->ponselLain = $ponselLain;
    }

    public function getPonselLain()
    {
        return $this->ponselLain;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setNpwp($npwp)
    {
        $this->npwp = $npwp;
    }

    public function getNpwp()
    {
        return $this->npwp;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function addFilePelamar(FilePelamar $filePelamar)
    {
        $filePelamar->setPelamar($this);
        $this->filePelamar->add($filePelamar);
    }

    public function removeFilePelamar(FilePelamar $filePelamar)
    {
        $this->filePelamar->removeElement($filePelamar);
    }

    public function getFilePelamar()
    {
        return $this->filePelamar;
    }

    public function setDetailPelamar(DetailPelamar $detailPelamar)
    {
        $detailPelamar->setPelamar($this);
        $this->detailPelamar = $detailPelamar;
    }

    public function getDetailPelamar()
    {
        return $this->detailPelamar;
    }
}
