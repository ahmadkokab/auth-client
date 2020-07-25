<?php

namespace Processton\AuthClient\Tests;

use Orchestra\Testbench\TestCase;
use Processton\AuthClient\AuthClientServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [AuthClientServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
