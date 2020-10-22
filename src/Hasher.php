<?php

declare(strict_types=1);

namespace Elceka\Laravel\HashId;

use Hashids\Hashids;

/**
 * Class Hasher
 *
 * @package Elceka\Laravel\HashId
 */
final class Hasher
{
    /**
     * @param mixed ...$args
     *
     * @return mixed
     */
    public static function encode(...$args)
    {
        return app(Hashids::class)->encode(...$args);
    }

    /**
     * @param $enc
     *
     * @return int|mixed
     */
    public static function decode($enc)
    {
        if (is_int($enc)) {
            return $enc;
        }

        return app(Hashids::class)->decode($enc)[0];
    }
}
