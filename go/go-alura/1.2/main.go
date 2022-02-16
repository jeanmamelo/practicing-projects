package main

import (
	"fmt"
)

func main() {
	name := "Jean"
	var version float32 = 1.2

	fmt.Println("hello", name)
	fmt.Println("version", version)

	fmt.Println("\n1 - start tracking")
	fmt.Println("2 - show logs")
	fmt.Println("0 - quit")

	var command int
	fmt.Scan(&command)
	fmt.Println("\nchosen:", command)
}
