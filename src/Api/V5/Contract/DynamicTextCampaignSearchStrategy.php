<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignSearchStrategy extends DynamicTextCampaignStrategyBase
{
    protected $BiddingStrategyType = null;

    /**
     * @see DynamicTextCampaignSearchStrategyTypeEnum
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * @see DynamicTextCampaignSearchStrategyTypeEnum
     *
     * @return $this
     */
    public function setBiddingStrategyType(string $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }
}
