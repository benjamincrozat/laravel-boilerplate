<?php

namespace App\Models\Traits;

trait AutoMorphClass
{
    public function getMorphClass() : string
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}
