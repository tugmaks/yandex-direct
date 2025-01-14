<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordsSelectionCriteria
{
//    Can be omitted.
//    protected $Ids = null;

//    Can be omitted.
//    protected $AdGroupIds = null;

//    Can be omitted.
//    protected $CampaignIds = null;

//    Can be omitted.
//    protected $States = null;

//    Can be omitted.
//    protected $Statuses = null;

//    Can be omitted.
//    protected $ModifiedSince = null;

//    Can be omitted.
//    protected $ServingStatuses = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return int[]|null
     */
    public function getIds(): ?array
    {
        return $this->Ids ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setIds(?array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getAdGroupIds(): ?array
    {
        return $this->AdGroupIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setAdGroupIds(?array $value = null)
    {
        $this->AdGroupIds = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getCampaignIds(): ?array
    {
        return $this->CampaignIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setCampaignIds(?array $value = null)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * @see KeywordStateSelectionEnum
     *
     * @return string[]|null
     */
    public function getStates(): ?array
    {
        return $this->States ?? null;
    }

    /**
     * @see KeywordStateSelectionEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStates(?array $value = null)
    {
        $this->States = $value;

        return $this;
    }

    /**
     * @see KeywordStatusSelectionEnum
     *
     * @return string[]|null
     */
    public function getStatuses(): ?array
    {
        return $this->Statuses ?? null;
    }

    /**
     * @see KeywordStatusSelectionEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStatuses(?array $value = null)
    {
        $this->Statuses = $value;

        return $this;
    }

    public function getModifiedSince(): ?string
    {
        return $this->ModifiedSince ?? null;
    }

    /**
     * @return $this
     */
    public function setModifiedSince(?string $value = null)
    {
        $this->ModifiedSince = $value;

        return $this;
    }

    /**
     * @see ServingStatusEnum
     *
     * @return string[]|null
     */
    public function getServingStatuses(): ?array
    {
        return $this->ServingStatuses ?? null;
    }

    /**
     * @see ServingStatusEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setServingStatuses(?array $value = null)
    {
        $this->ServingStatuses = $value;

        return $this;
    }
}
