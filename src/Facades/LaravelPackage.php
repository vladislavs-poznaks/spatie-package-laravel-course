<?php

namespace VladislavsPoznaks\LaravelPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VladislavsPoznaks\LaravelPackage\LaravelPackage
 */
class LaravelPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \VladislavsPoznaks\LaravelPackage\LaravelPackage::class;
    }
}
