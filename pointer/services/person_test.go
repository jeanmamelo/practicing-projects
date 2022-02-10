package services

import "testing"

func TestPerson(t *testing.T) {
	n := NewPerson("Teste")

	if n.Name != "Teste" {
		t.Error("Person name must be Teste")
	}
}
