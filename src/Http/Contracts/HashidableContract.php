<?php

declare(strict_types=1);

namespace Elceka\Laravel\HashId\Http\Contracts;

/**
 * Interface HashidableContract
 *
 * @package Elceka\Laravel\HashId\Http\Contracts
 */
interface HashidableContract
{
    /**
     * @return string
     */
    public function getRouteKey(): string;

    /**
     * @return string
     */
    public function hashId(): string;
}
