<?php

namespace WWII\Domain\Hrd\Cuti;

class PengambilanCuti
{
    protected $id;

    protected $tanggalAwal;

    protected $tanggalAkhir;

    protected $keterangan;

    protected $tanggalInput;

    protected $pelaksana;

    protected $masterCuti;

    public function getId()
    {
        return $this->id;
    }

    public function setTanggalAwal(\DateTime $tanggalAwal)
    {
        $this->tanggalAwal = $tanggalAwal;
    }

    public function getTanggalAwal()
    {
        return $this->tanggalAwal;
    }

    public function setTanggalAkhir(\DateTime $tanggalAkhir)
    {
        $this->tanggalAkhir = $tanggalAkhir;
    }

    public function getTanggalAkhir()
    {
        return $this->tanggalAkhir;
    }

    public function setKeterangan($keterangan)
    {
        $this->keterangan = $keterangan;
    }

    public function getKeterangan()
    {
        return $this->keterangan;
    }

    public function getJumlahHari()
    {
        $start = $this->tanggalAwal;
        $end   = $this->tanggalAkhir;
        $diff  = $start->diff($end);

        return $diff->format('%a');
    }

    public function setTanggalInput(\DateTime $tanggalInput)
    {
        $this->tanggalInput = $tanggalInput;
    }

    public function getTanggalInput()
    {
        return $this->tanggalInput;
    }

    public function setPelaksana($pelaksana)
    {
        $this->pelaksana = $pelaksana;
    }

    public function setMasterCuti(MasterCuti $masterCuti)
    {
        $this->masterCuti = $masterCuti;
    }

    public function getMasterCuti()
    {
        return $this->masterCuti;
    }
}
