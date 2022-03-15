package services_test

import (
	"pointer/services"
	"testing"
)

func TestPerson(t *testing.T) {
	n := services.NewPerson("Teste")

	if n.Name != "Teste" {
		t.Error("Person name must be Teste")
	}
}
