<?php

namespace RoyceLtd\LaravelBulkSMS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class ShoppingCartFacade
 * @package LaraShout\ShoppingCart
 */
class LaravelBulkSMSFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sendsms';
    }
}
