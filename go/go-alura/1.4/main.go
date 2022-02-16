package main

import (
	"fmt"
	"net/http"
	"os"
)

func main() {
	showIntro()

	for {
		showMenu()

		command := readCommand()

		switch command {
		case 1:
			startTracking()
		case 2:
			fmt.Println("showing logs...")
		case 0:
			fmt.Println("quitting...")
			os.Exit(0)
		default:
			fmt.Println("command not recognized")
			os.Exit(-1)
		}
	}
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

func startTracking() {
	fmt.Println("tracking...")
	site := "https://random-status-code.herokuapp.com/"

	response, err := http.Get(site)

	if err != nil {
		fmt.Println("Error:", err)
	}

	if response.StatusCode == 200 {
		fmt.Println("SUCCESS", site)
	} else {
		fmt.Println("ERROR", site, "status code:", response.StatusCode)
	}
}
