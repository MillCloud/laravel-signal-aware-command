<?php

namespace MillCloud\SignalAwareCommand\Facades;

use Illuminate\Support\Facades\Facade;
use MillCloud\SignalAwareCommand\Signal as SignalClass;

/**
 * @see \MillCloud\SignalAwareCommand\Signal
 */
class Signal extends Facade
{
    protected static function getFacadeAccessor()
    {
        return SignalClass::class;
    }
}
