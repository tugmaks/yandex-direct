<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextCampaignBase
{
//    Can be omitted.
//    protected $CounterIds = null;

//    Can be omitted.
//    protected $RelevantKeywords = null;

//    Can be omitted.
//    protected $AttributionModel = null;

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
    public function getCounterIds(): ?array
    {
        return $this->CounterIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setCounterIds(?array $value = null)
    {
        $this->CounterIds = $value;

        return $this;
    }

    public function getRelevantKeywords(): ?RelevantKeywordsSetting
    {
        return $this->RelevantKeywords ?? null;
    }

    /**
     * @return $this
     */
    public function setRelevantKeywords(?RelevantKeywordsSetting $value = null)
    {
        $this->RelevantKeywords = $value;

        return $this;
    }

    /**
     * @see AttributionModelEnum
     */
    public function getAttributionModel(): ?string
    {
        return $this->AttributionModel ?? null;
    }

    /**
     * @see AttributionModelEnum
     *
     * @return $this
     */
    public function setAttributionModel(?string $value = null)
    {
        $this->AttributionModel = $value;

        return $this;
    }
}
