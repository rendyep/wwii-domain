<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class LootRange
{
    protected $id;

    protected $minLoot;

    protected $maxLoot;

    protected $level;

    protected $category;

    public function getId()
    {
        return $this->id;
    }

    public function setMinLoot($minLoot)
    {
        $this->minLoot = $minLoot;
    }

    public function getMinLoot()
    {
        return $this->minLoot;
    }

    public function setMaxLoot($maxLoot)
    {
        $this->maxLoot = $maxLoot;
    }

    public function getMaxLoot()
    {
        return $this->maxLoot;
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
        return $this->category();
    }
}
