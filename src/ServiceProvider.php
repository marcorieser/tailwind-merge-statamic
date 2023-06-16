<?php

namespace MarcoRieser\TailwindMergeStatamic;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $modifiers = [
      \MarcoRieser\TailwindMergeStatamic\Modifiers\TwMerge::class
    ];
}
