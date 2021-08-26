<?php

namespace Seta0909\LaravelTwStreetname\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelTwStreetname extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'TwStreet';
    }
}
