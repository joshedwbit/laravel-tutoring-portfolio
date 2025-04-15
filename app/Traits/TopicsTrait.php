<?php

namespace App\Traits;

use App\Models\Enums\Topic;

trait TopicsTrait
{
    /**
     * Returns array of possible question topics
     *
     * @return array
     */
    public static function getTopics(): array
    {
        return array_map(fn(Topic $topic) => $topic->value, Topic::cases());
    }

    /**
     * Returns comma separated string of possible topics
     *
     * @return string
     */
    public static function getTopicsString(): string
    {
        return implode(',', self::getTopics());
    }
}
