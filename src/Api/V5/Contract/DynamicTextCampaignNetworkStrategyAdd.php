<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignNetworkStrategyAdd extends DynamicTextCampaignStrategyAddBase
{
    protected $BiddingStrategyType = null;

//    Can be omitted.
//    protected $NetworkDefault = null;

    /**
     * @see DynamicTextCampaignNetworkStrategyTypeEnum
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * @see DynamicTextCampaignNetworkStrategyTypeEnum
     *
     * @return $this
     */
    public function setBiddingStrategyType(string $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }

    public function getNetworkDefault(): ?StrategyNetworkDefaultAdd
    {
        return $this->NetworkDefault ?? null;
    }

    /**
     * @return $this
     */
    public function setNetworkDefault(?StrategyNetworkDefaultAdd $value = null)
    {
        $this->NetworkDefault = $value;

        return $this;
    }
}
