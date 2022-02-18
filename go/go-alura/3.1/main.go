package main

import (
	"net/http"
	"text/template"
)

type Product struct {
	Name        string
	Description string
	Price       float64
	Quantity    int
}

var tmplt = template.Must(template.ParseGlob("3.1/templates/index.html"))

func main() {
	http.HandleFunc("/", index)
	http.ListenAndServe(":8000", nil)
}

func index(w http.ResponseWriter, r *http.Request) {
	products := []Product{
		{Name: "T-shirt", Description: "Blue, very nice", Price: 17.99, Quantity: 5},
		{"Shoe", "Black, confortable", 97.99, 2},
		{"Short", "Good material", 45.99, 3},
	}

	tmplt.ExecuteTemplate(w, "Index", products)
}
