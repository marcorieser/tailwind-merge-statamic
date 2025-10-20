<?php

namespace MarcoRieser\TailwindMergeStatamic\Modifiers;

use Statamic\Modifiers\Modifier;
use TailwindMerge\Laravel\Facades\TailwindMerge;

class TwMerge extends Modifier
{
    public function index($value, $params, $context): string
    {
        if (!$params) {
            return TailwindMerge::merge($value);
        }

        $classes = collect($params)
            ->map(fn($variable) => $context[$variable] ?? '')
            ->filter()
            ->all();

        return TailwindMerge::merge($value, $classes);
    }
}
