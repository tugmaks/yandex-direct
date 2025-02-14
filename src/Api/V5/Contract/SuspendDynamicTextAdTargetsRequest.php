<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SuspendDynamicTextAdTargetsRequest
{
    protected $SelectionCriteria = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getSelectionCriteria(): IdsCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(IdsCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }
}
