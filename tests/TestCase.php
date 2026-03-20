<?php

namespace MarcoRieser\TailwindMergeStatamic\Tests;

use MarcoRieser\TailwindMergeLaravel\TailwindMergeServiceProvider;
use MarcoRieser\TailwindMergeStatamic\ServiceProvider;
use Statamic\Providers\StatamicServiceProvider;
use Statamic\Testing\AddonTestCase;

abstract class TestCase extends AddonTestCase
{
    protected string $addonServiceProvider = ServiceProvider::class;

    protected function getPackageProviders($app): array
    {
        $serviceProviders = parent::getPackageProviders($app);

        $serviceProviders[] = TailwindMergeServiceProvider::class;

        return $serviceProviders;
    }
}
