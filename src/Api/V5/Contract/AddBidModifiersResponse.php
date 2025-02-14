<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddBidModifiersResponse
{
//    Can be omitted.
//    protected $AddResults = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return MultiIdsActionResult[]|null
     */
    public function getAddResults(): ?array
    {
        return $this->AddResults ?? null;
    }

    /**
     * @param MultiIdsActionResult[]|null $value
     *
     * @return $this
     */
    public function setAddResults(?array $value = null)
    {
        $this->AddResults = $value;

        return $this;
    }
}
