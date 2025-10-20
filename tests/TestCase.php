<?php

namespace MarcoRieser\TailwindMergeStatamic\Tests;

use MarcoRieser\TailwindMergeStatamic\ServiceProvider;
use Statamic\Providers\StatamicServiceProvider;
use Statamic\Testing\AddonTestCase;
use TailwindMerge\Laravel\TailwindMergeServiceProvider;

abstract class TestCase extends AddonTestCase
{
    protected string $addonServiceProvider = ServiceProvider::class;

    protected function getPackageProviders($app)
    {
        $serviceProviders = parent::getPackageProviders($app);

        $serviceProviders[] = TailwindMergeServiceProvider::class;

        return $serviceProviders;
    }
}
