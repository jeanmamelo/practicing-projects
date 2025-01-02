package main

import "fmt"

// 1
func sum(numbers []int) int {
	sum := 0
	// for i := 0; i <= len(numbers); i++ {
	// 	sum += i
	// }
	for _, number := range numbers {
		sum += number
	}
	return sum
}

// 2
func half(number int) (int, bool) {
	half := number / 2
	if number%2 == 0 {
		return half, true
	}
	return half, false
}

// 3
func greatest(numbers ...int) int {
	greatest := 0
	for _, number := range numbers {
		if number > greatest {
			greatest = number
		}
	}
	return greatest
}

// 4
func makeOddGenerator() func() uint {
	i := uint(1)
	return func() (ret uint) {
		ret = i
		i += 2
		return
	}
}

// 5
func fib(n int) int {
	switch {

	case n == 0:
		return 0

	case n == 1:
		return 1

	default:
		return fib(n-1) + fib(n-2)

	}
}

func main() {
	//1
	sum := sum([]int{1, 2, 3})
	fmt.Println(sum)

	//2
	half1, even1 := half(1)
	half2, even2 := half(2)
	fmt.Println(half1, even1)
	fmt.Println(half2, even2)

	//3
	numbers := []int{1, 13, 3, 7, 4}
	greatest0 := greatest(numbers...)
	fmt.Println(greatest0)
	greatest1 := greatest(1, 13, 3, 7, 4)
	fmt.Println(greatest1)

	//4
	nextOdd := makeOddGenerator()
	fmt.Println(nextOdd())
	fmt.Println(nextOdd())
	fmt.Println(nextOdd())

	//5
	fib := fib(10)
	fmt.Println(fib)

	//6
	recover := ex6()
	defer fmt.Println(recover)
}

func ex6() error {
	panic("jean")
}
