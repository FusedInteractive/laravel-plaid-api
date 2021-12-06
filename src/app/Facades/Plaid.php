<?php

namespace Fused\Plaid\Facades;

use Illuminate\Support\Facades\Facade;

class Plaid extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Plaid\Client';
    }
}
