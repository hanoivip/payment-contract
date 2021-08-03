<?php

namespace Hanoivip\PaymentContract\Facades;

use Illuminate\Support\Facades\Facade;

class PaymentFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'PaymentService';
    }
}
