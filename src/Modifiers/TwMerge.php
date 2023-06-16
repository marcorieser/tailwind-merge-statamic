<?php

namespace MarcoRieser\TailwindMergeStatamic\Modifiers;

use Statamic\Modifiers\Modifier;
use TailwindMerge\Laravel\Facades\TailwindMerge;

class TwMerge extends Modifier
{
    public function index($value): string
    {
        return TailwindMerge::merge($value);
    }
}
