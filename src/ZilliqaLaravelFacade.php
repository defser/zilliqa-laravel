<?php

namespace Defser\ZilliqaLaravel;

use Illuminate\Support\Facades\Facade;

class ZilliqaLaravelFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zilliqa.laravel';
    }
}