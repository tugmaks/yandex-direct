<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SearchByTrafficVolume
{
    protected $TargetTrafficVolume = null;

//    Can be omitted.
//    protected $IncreasePercent = null;

//    Can be omitted.
//    protected $BidCeiling = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getTargetTrafficVolume(): int
    {
        return $this->TargetTrafficVolume;
    }

    /**
     * @return $this
     */
    public function setTargetTrafficVolume(int $value)
    {
        $this->TargetTrafficVolume = $value;

        return $this;
    }

    public function getIncreasePercent(): ?int
    {
        return $this->IncreasePercent ?? null;
    }

    /**
     * @return $this
     */
    public function setIncreasePercent(?int $value = null)
    {
        $this->IncreasePercent = $value;

        return $this;
    }

    public function getBidCeiling(): ?int
    {
        return $this->BidCeiling ?? null;
    }

    /**
     * @return $this
     */
    public function setBidCeiling(?int $value = null)
    {
        $this->BidCeiling = $value;

        return $this;
    }
}
