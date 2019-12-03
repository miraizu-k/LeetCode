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

    public function testTwoSumTwo()
    {
        $solution = new Solution();
        $this->assertEquals($solution->twoSum([3, 3], 6), [0, 1]);
    }

    public function testTwoSumThree()
    {
        $solution = new Solution();
        $this->assertEquals($solution->twoSum([3, 1, 3], 6), [0, 2]);
    }

    public function testTwoSumFor()
    {
        $solution = new Solution();
        $this->assertEquals($solution->twoSum([3, 2, 4], 6), [1, 2]);
    }
}
