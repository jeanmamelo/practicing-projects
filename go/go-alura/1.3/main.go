package main

import (
	"fmt"
	"os"
)

func main() {
	showIntro()

	showMenu()

	command := readCommand()

	if command == 1 {
		fmt.Println("tracking...")
		return
	}

	if command == 2 {
		fmt.Println("showing logs...")
		return
	}

	if command == 0 {
		fmt.Println("quitting...")
		os.Exit(0)
	}

	fmt.Println("command not recognized")
	os.Exit(-1)
}

func showIntro() {
	name := "Jean"
	var version float32 = 1.4

	fmt.Println("hello", name)
	fmt.Println("version", version)
}

func readCommand() int {
	var command int
	fmt.Scan(&command)

	return command
}

func showMenu() {
	fmt.Println("\n1 - start tracking")
	fmt.Println("2 - show logs")
	fmt.Println("0 - quit")
}
