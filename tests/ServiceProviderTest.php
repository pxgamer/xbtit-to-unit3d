<?php

namespace pxgamer\XbtitToUnit3d\Functionality;

use Orchestra\Testbench\TestCase;
use Illuminate\Foundation\Application;
use pxgamer\XbtitToUnit3d\ServiceProvider;

class ServiceProviderTest extends TestCase
{
    /** @test Test able to load aggregate service providers. */
    public function itMakesTheServiceAvailable(): void
    {
        $loaded = $this->app->getLoadedProviders();

        $this->assertArrayHasKey(ServiceProvider::class, $loaded);
        $this->assertTrue($loaded[ServiceProvider::class]);
    }

    /**
     * @param  Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [
            ServiceProvider::class,
        ];
    }
}
