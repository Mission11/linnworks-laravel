<?php

namespace Mission11\Linnworks\Laravel;

use Illuminate\Support\Facades\Facade;

class LinnworksFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'linnworks';
    }
}
