<?php

namespace Savvyosive\HandlerGenerator\Tests;

use Savvyosive\HandlerGenerator\HandlerGenerator;

class HandlerGeneratorTest extends TestCase
{

    /** @test */
    public function handler_generator_returns_string()
    {
        $handlerMessage = HandlerGenerator::handler()->generate();

        $this->assertEquals('Functionality for generating handler',$handlerMessage);
    }

}
