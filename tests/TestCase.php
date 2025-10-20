<?php

namespace MarcoRieser\TailwindMergeStatamic\Tests;

use Lumen\TwMerge\TwMergeServiceProvider;
use MarcoRieser\TailwindMergeStatamic\ServiceProvider;
use Statamic\Testing\AddonTestCase;

abstract class TestCase extends AddonTestCase
{
    protected string $addonServiceProvider = ServiceProvider::class;

    protected function getPackageProviders($app): array
    {
        $serviceProviders = parent::getPackageProviders($app);

        $serviceProviders[] = TwMergeServiceProvider::class;

        return $serviceProviders;
    }
}
