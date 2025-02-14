<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdGroupFeedParamsGet
{
//    Can be omitted.
//    protected $FeedId = null;

//    Can be omitted.
//    protected $FeedCategoryIds = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getFeedId(): ?int
    {
        return $this->FeedId ?? null;
    }

    /**
     * @return $this
     */
    public function setFeedId(?int $value = null)
    {
        $this->FeedId = $value;

        return $this;
    }

    /**
     * @return float[]|null
     */
    public function getFeedCategoryIds(): ?array
    {
        return $this->FeedCategoryIds ?? null;
    }

    /**
     * @param float[]|null $value
     *
     * @return $this
     */
    public function setFeedCategoryIds(?array $value = null)
    {
        $this->FeedCategoryIds = $value;

        return $this;
    }
}
