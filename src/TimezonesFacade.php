<?php

namespace Webaune\Timezones;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Webaune\Timezones\Skeleton\SkeletonClass
 */
class TimezonesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'timezones';
    }
}
