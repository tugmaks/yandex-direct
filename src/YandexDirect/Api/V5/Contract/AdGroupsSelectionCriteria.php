<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGroupsSelectionCriteria
{

    protected $CampaignIds = null;

    protected $Ids = null;

    protected $Types = null;

    protected $Statuses = null;

    protected $TagIds = null;

    protected $Tags = null;

    protected $AppIconStatuses = null;

    /**
     * Creates a new instance of AdGroupsSelectionCriteria.
     *
     * @return AdGroupsSelectionCriteria
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignIds.
     *
     * @return int[]|null
     */
    public function getCampaignIds()
    {
        return $this->CampaignIds;
    }

    /**
     * Sets CampaignIds.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setCampaignIds(array $value = null)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * Gets Ids.
     *
     * @return int[]|null
     */
    public function getIds()
    {
        return $this->Ids;
    }

    /**
     * Sets Ids.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setIds(array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * Gets Types.
     *
     * @return AdGroupTypesEnum[]|null
     */
    public function getTypes()
    {
        return $this->Types;
    }

    /**
     * Sets Types.
     *
     * @param AdGroupTypesEnum[]|null $value
     * @return $this
     */
    public function setTypes(array $value = null)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * Gets Statuses.
     *
     * @return StatusSelectionEnum[]|null
     */
    public function getStatuses()
    {
        return $this->Statuses;
    }

    /**
     * Sets Statuses.
     *
     * @param StatusSelectionEnum[]|null $value
     * @return $this
     */
    public function setStatuses(array $value = null)
    {
        $this->Statuses = $value;

        return $this;
    }

    /**
     * Gets TagIds.
     *
     * @return int[]|null
     */
    public function getTagIds()
    {
        return $this->TagIds;
    }

    /**
     * Sets TagIds.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setTagIds(array $value = null)
    {
        $this->TagIds = $value;

        return $this;
    }

    /**
     * Gets Tags.
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->Tags;
    }

    /**
     * Sets Tags.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setTags(array $value = null)
    {
        $this->Tags = $value;

        return $this;
    }

    /**
     * Gets AppIconStatuses.
     *
     * @return StatusSelectionEnum[]|null
     */
    public function getAppIconStatuses()
    {
        return $this->AppIconStatuses;
    }

    /**
     * Sets AppIconStatuses.
     *
     * @param StatusSelectionEnum[]|null $value
     * @return $this
     */
    public function setAppIconStatuses(array $value = null)
    {
        $this->AppIconStatuses = $value;

        return $this;
    }


}
