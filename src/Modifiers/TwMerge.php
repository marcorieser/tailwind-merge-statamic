<?php

namespace MarcoRieser\TailwindMergeStatamic\Modifiers;

use Statamic\Modifiers\Modifier;
use TailwindMerge\Laravel\Facades\TailwindMerge;

class TwMerge extends Modifier
{
    public function index($value, $params, $context): string
    {
        $selector = $params[0] ?? 'class';

        $classesToMerge = $selector !== false ? $context[$selector] ?? '' : '';

        return TailwindMerge::merge($value, $classesToMerge);
    }
}
