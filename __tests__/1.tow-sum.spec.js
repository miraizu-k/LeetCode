import twoSum from "../1-50/1. Two Sum/js";

describe('match test', () => {
  it('random pattern', () => {
    expect(twoSum([2, 7, 11, 15], 9)).toEqual([0, 1]);
  });

  it('equal pattern', () => {
    expect(twoSum([3, 3], 6)).toEqual([0, 1]);
  });

  it('skip pattern', () => {
    expect(twoSum([3, 1, 3], 6)).toEqual([0, 2]);
  });

  it('t', () => {
    expect(twoSum([3, 2, 4], 6)).toEqual([1, 2]);
  });
});