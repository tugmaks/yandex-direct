<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateAdsResponse
{
//    Can be omitted.
//    protected $UpdateResults = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return ActionResult[]|null
     */
    public function getUpdateResults(): ?array
    {
        return $this->UpdateResults ?? null;
    }

    /**
     * @param ActionResult[]|null $value
     *
     * @return $this
     */
    public function setUpdateResults(?array $value = null)
    {
        $this->UpdateResults = $value;

        return $this;
    }
}
