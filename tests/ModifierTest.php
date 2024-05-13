<?php

namespace MarcoRieser\TailwindMergeStatamic\Tests;

use Statamic\Statamic;

class ModifierTest extends TestCase
{
    public function test_that_modifier_works_without_params(): void
    {
        $this->assertSame(
            'h-10 rounded-full bg-blue-500 w-8',
            (string)Statamic::modify("w-10 h-10 rounded-full bg-red-500 bg-blue-500 w-8")->twMerge()
        );

        $this->assertSame(
            'h-10 rounded-full bg-blue-500 w-8',
            (string)Statamic::modify(['w-10 h-10 rounded-full bg-red-500', 'bg-blue-500 w-8'])->twMerge()
        );

        $this->assertSame(
            'h-10 rounded-full bg-blue-500 w-8',
            (string)Statamic::modify(['w-10 h-10 rounded-full bg-red-500', ['bg-blue-500 w-8']])->twMerge()
        );
    }

    public function test_that_modifier_works_with_params(): void
    {
        $this->assertSame(
            'h-10 rounded-full bg-blue-500 w-8',
            (string)Statamic::modify("w-10 h-10 rounded-full bg-red-500")->context(['classes_to_merge' => 'bg-blue-500 w-8'])->twMerge('classes_to_merge')
        );
    }

}
