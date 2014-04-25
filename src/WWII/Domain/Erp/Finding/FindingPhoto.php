<?php

namespace WWII\Domain\Erp\Finding;

class FindingPhoto
{
    protected $id;

    protected $namaFile;

    protected $finding;

    public function getId()
    {
        return $this->id;
    }

    public function setNamaFile($namaFile)
    {
        $this->namaFile = $namaFile;
    }

    public function getNamaFile()
    {
        return $this->namaFile;
    }

    public function setFinding(Finding $finding)
    {
        $this->finding = $finding;
    }

    public function getFinding()
    {
        return $this->finding;
    }
}
