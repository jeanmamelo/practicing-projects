package main

import (
	"fmt"
	"pointer/services"
)

func main() {
	divide, err := services.Divide(6, 1)

	if err != nil {
		fmt.Println(err)
		return
	}

	// defer: to be executed after everything else
	defer fmt.Println(divide)

	// p := services.Person{
	// 	Name: "Jean",
	// }
	// pp := services.NewPerson("Melo")
	// p.PrintPerson()
	// pp.PrintPerson()
}
