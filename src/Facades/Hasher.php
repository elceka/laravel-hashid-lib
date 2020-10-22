<?php

declare(strict_types=1);

namespace Elceka\Laravel\HashId\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Hasher
 *
 * @method static encode(...$args)
 * @method static decode($enc)
 * @package Elceka\Laravel\HashId\Facades
 */
final class Hasher extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hasher';
    }
}
