<?php

namespace MarcoRieser\TailwindMergeStatamic\Tests;

use MarcoRieser\TailwindMergeStatamic\ServiceProvider;
use Statamic\Testing\AddonTestCase;

abstract class TestCase extends AddonTestCase
{
    protected string $addonServiceProvider = ServiceProvider::class;
}
