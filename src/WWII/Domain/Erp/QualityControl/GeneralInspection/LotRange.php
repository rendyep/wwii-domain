<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class LotRange
{
    protected $id;

    protected $minLot;

    protected $maxLot;

    protected $level;

    protected $category;

    public function getId()
    {
        return $this->id;
    }

    public function setMinLot($minLot)
    {
        $this->minLot = $minLot;
    }

    public function getMinLot()
    {
        return $this->minLot;
    }

    public function setMaxLot($maxLot)
    {
        $this->maxLot = $maxLot;
    }

    public function getMaxLot()
    {
        return $this->maxLot;
    }

    public function setLevel(Level $level)
    {
        $this->level = $level;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }
}
