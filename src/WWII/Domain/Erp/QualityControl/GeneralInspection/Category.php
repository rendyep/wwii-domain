<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class Category
{
    protected $id;

    protected $code;

    public function getId()
    {
        return $this->id;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getCode()
    {
        return $this->code;
    }
}
