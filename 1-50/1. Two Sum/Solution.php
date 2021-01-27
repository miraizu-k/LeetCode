<?php

namespace TwoSum;

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum(array $nums, int $target): array
    {
        $indexes = array_flip($nums);
        foreach ($nums as $num) {
            $val = $target - $num;
            $index = isset($indexes[$val]) && is_numeric($indexes[$val]) ? $indexes[$val] : null;
            if (is_null($index)) {
                continue;
            }
            if ($val !== $num) {
                return [$indexes[$num], $index];
            }

            unset($nums[$index]);
            $newIndexes = array_flip($nums);
            if (isset($newIndexes[$num])) {
                return [$newIndexes[$num], $index];
            }
        }
        return [];
    }
}