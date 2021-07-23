<?php

namespace Savvyosive\HandlerGenerator;

class HandlerGenerator
{
    public static function handler(): self
    {
        return new static();
    }

    public function generate(): string
    {
        return 'Functionality for generating handler';
    }
}
