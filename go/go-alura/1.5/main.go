package main

import (
	"fmt"
	"net/http"
	"os"
	"time"
)

const trackers = 2
const delay = 1

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
	var version float32 = 1.5

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
	fmt.Printf("\n")

	sites := []string{
		"https://random-status-code.herokuapp.com/",
		"https://www.alura.com.br/",
		"https://www.google.com",
	}

	for i := 0; i < trackers; i++ {
		for i, site := range sites {
			fmt.Println(i, site)
			verifySite(site)
		}
		time.Sleep(delay * time.Second)
		fmt.Printf("\n")
	}
}

func verifySite(site string) {
	response, err := http.Get(site)

	if err != nil {
		fmt.Println("Error:", err)
	}

	if response.StatusCode != 200 {
		fmt.Println("SUCCESS", site)
	} else {
		fmt.Println("ERROR", site, "status code:", response.StatusCode)
	}
}
