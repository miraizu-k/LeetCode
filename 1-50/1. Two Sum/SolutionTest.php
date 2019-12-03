<?php
include_once __DIR__ . '/../../vendor/autoload.php';
include_once 'Solution.php';

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function testTwoSum()
    {
        $solution = new Solution();
        $this->assertEquals($solution->twoSum([2, 7, 11, 15], 9), [0, 1]);
    }
}
