<?php

namespace MillCloud\SignalAwareCommand\Events;

use Illuminate\Console\Command;

class SignalReceived
{
    public function __construct(
        public int $signal,
        public Command $command
    ) {
    }
}
