<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * MergeTest
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
class MergeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Merge::merge()
     */
    public function mergeMergesArrayIntoChain()
    {
        /** @var \Cocur\Chain\Link\Merge $mock */
        $mock = $this->getMockForTrait('Cocur\Chain\Link\Merge');
        $mock->array = [0, 1, 2];
        $mock->merge([3, 4]);

        $this->assertEquals([0, 1, 2, 3, 4], $mock->array);
    }
}
