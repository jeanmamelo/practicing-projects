package main

import (
	"net/http"

	"github.com/jeanmamelo/practicing-projects/go/go-alura/3.5/routes"
)

func main() {
	routes.CarregaRotas()
	http.ListenAndServe(":8000", nil)
}
