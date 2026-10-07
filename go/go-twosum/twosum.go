package main

func twoSum(nums []int, target int) []int {
	seen := make(map[int]int)

	for i, num := range nums {
		complement := target - num

		if j, ok := seen[complement]; ok {
			return []int{j, i}
		}

		seen[num] = i
	}

	return nil
}

func main() {
	nums := []int{2, 7, 11, 15}
	target := 9
	result := twoSum(nums, target)
	println(result[0], result[1]) // Output: 0 1
	nums2 := []int{3, 2, 4}
	target2 := 6
	result2 := twoSum(nums2, target2)
	println(result2[0], result2[1]) // Output: 1 2
	nums3 := []int{3, 3}
	target3 := 6
	result3 := twoSum(nums3, target3)
	println(result3[0], result3[1]) // Output: 0 1
	nums4 := []int{1, 2, 3, 4, 5}
	target4 := 10
	result4 := twoSum(nums4, target4)
	if result4 == nil {
		println("No solution found") // Output: No solution found
	} else {
		println(result4[0], result4[1])
	}
}
