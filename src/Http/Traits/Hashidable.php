<?php

declare(strict_types=1);

namespace Elceka\Laravel\HashId\Http\Traits;

use Elceka\Laravel\HashId\Facades\Hasher;

/**
 * Trait Hashidable
 *
 * @package Elceka\Laravel\HashId\Http\Traits
 */
trait Hashidable
{
    /**
     *
     */
    public function initializeHashidable()
    {
        $this->append('hash_id');
    }

    /**
     * @return mixed
     */
    public function getRouteKey()
    {
        return $this->hashId();
    }

    /**
     * @return mixed
     */
    public function hashId()
    {
        return Hasher::encode($this->getKey());
    }

    /**
     * @return mixed
     */
    public function getHashIdAttribute()
    {
        return $this->hashId();
    }
}
