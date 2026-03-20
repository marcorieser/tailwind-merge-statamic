<?php

namespace MarcoRieser\TailwindMergeStatamic\Modifiers;

use MarcoRieser\TailwindMergeLaravel\Facades\TailwindMerge;
use Statamic\Modifiers\Modifier;

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
