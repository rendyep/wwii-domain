<?php

namespace WWII\Domain\Erp\QualityControl\GeneralInspection;

class AcceptanceLimit
{
    protected $id;

    protected $category;

    protected $sampleSize;

    protected $acceptanceIndex;

    protected $limit;

    public function getId()
    {
        return $this->id;
    }

    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setSampleSize($sampleSize)
    {
        $this->sampleSize = $sampleSize;
    }

    public function getSampleSize()
    {
        return $this->sampleSize;
    }

    public function setAcceptanceIndex(AcceptanceIndex $acceptanceIndex)
    {
        $this->acceptanceIndex = $acceptanceIndex;
    }

    public function getAcceptanceIndex()
    {
        return $this->acceptanceIndex;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    public function getLimit()
    {
        return $this->limit;
    }
}
