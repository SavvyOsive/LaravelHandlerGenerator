<?php

namespace Savvyosive\HandlerGenerator\Commands;

use Illuminate\Console\Command;

class HandlerGeneratorCommand extends Command
{
    public $signature = 'handler-generator';

    public $description = 'Generate Handlers for your Models';

    public function handle()
    {
        $config = config('handler-generator.key');
        $this->comment($config);
    }
}
