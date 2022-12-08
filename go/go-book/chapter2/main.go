package main

import "fmt"

func main() {
	fmt.Println("1 + 1 =", 1+1)
	fmt.Println("1 + 1 =", 1.0+1.0)
	fmt.Println("32132 x 42452 =", 32.132*42.452)
	fmt.Println("expressão =", (true && false) || (false && true) || !(false && false))
}
