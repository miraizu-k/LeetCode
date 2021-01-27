<?php
include_once __DIR__ . '/../../../vendor/autoload.php';
include_once __DIR__ . '/../../../1-50/1. Two Sum/Solution.php';

use PHPUnit\Framework\TestCase;
use TwoSum\Solution;

class SolutionTest extends TestCase
{
    public function testTwoSum()
    {
        $solution = new Solution();
        $this->assertEquals([0, 1], $solution->twoSum([2, 7, 11, 15], 9));
    }

    public function testTwoSumTwo()
    {
        $solution = new Solution();
        $this->assertEquals([0, 1], $solution->twoSum([3, 3], 6));
    }

    public function testTwoSumThree()
    {
        $solution = new Solution();
        $this->assertEquals([0, 2], $solution->twoSum([3, 1, 3], 6));
    }

    public function testTwoSumFor()
    {
        $solution = new Solution();
        $this->assertEquals([1, 2], $solution->twoSum([3, 2, 4], 6));
    }
}
