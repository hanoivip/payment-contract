<?php

namespace Hanoivip\PaymentContract\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Hanoivip\PaymentMethodContract\IPaymentResult query($transId, $force = false)
 */ 
class PaymentFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'PaymentService';
    }
}
