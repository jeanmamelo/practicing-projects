package main

import (
	"bufio"
	"fmt"
	"io"
	"net/http"
	"os"
	"strings"
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
	var version float32 = 1.6

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

	// sites := []string{
	// 	"https://random-status-code.herokuapp.com/",
	// 	"https://www.alura.com.br/",
	// 	"https://www.google.com",
	// }

	sites := readSitesFromFile()

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

	if response.StatusCode == 200 {
		fmt.Println("SUCCESS", site)
	} else {
		fmt.Println("ERROR", site, "status code:", response.StatusCode)
	}
}

func readSitesFromFile() []string {
	var sites []string

	file, err := os.Open("sites.txt")
	// file, err := ioutil.ReadFile("sites.txt")

	defer file.Close()

	if err != nil {
		fmt.Println("Error:", err)
	}

	reader := bufio.NewReader(file)

	for {
		line, err := reader.ReadString('\n')
		line = strings.TrimSpace(line)

		sites = append(sites, line)

		if err == io.EOF {
			break
		}
	}

	return sites
}
