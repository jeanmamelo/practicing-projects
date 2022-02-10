package services

import (
	"encoding/json"
	"fmt"
)

type Person struct {
	Name string `json:"name"` // table.name
}

// a type of a "constructor"
func NewPerson(name string) *Person {
	return &Person{Name: name}
}

func (p *Person) PrintPerson() {
	a, _ := json.Marshal(p)
	fmt.Println(string(a))
}
