package main

import "fmt"

func main() {
	//1
	i := 10
	if i > 10 {
		fmt.Println("Big")
	} else {
		fmt.Println("Small")
	}

	//2
	for i := 1; i <= 100; i++ {
		if i%3 == 0 {
			fmt.Println(i)
		}
	}

	//3
	for i := 1; i <= 100; i++ {
		if i%3 == 0 {
			fmt.Println(i, "Fizz")
		}
		if i%5 == 0 {
			fmt.Println(i, "Buzz")
		}
		if i%3 == 0 && i%5 == 0 {
			fmt.Println(i, "FizzBuzz")
		}
	}
}
