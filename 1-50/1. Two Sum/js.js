/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number[]}
 */
let twoSum = function (nums, target) {
  let result = [];
  let i = 0, iz = nums.length;
  for (; i < iz; i++) {
    let targetIndex = nums.indexOf(target - nums[i]);
    if (0 <= targetIndex && i !== targetIndex) {
      result.push(i);
      result.push(targetIndex);
      break;
    }
  }
  result.sort();
  return result;
};

export default twoSum;