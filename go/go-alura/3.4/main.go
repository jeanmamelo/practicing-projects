package main

import (
	"net/http"

	"github.com/jeanmamelo/practicing-projects/go/go-alura/3.4/routes"
)

func main() {
	routes.CarregaRotas()
	http.ListenAndServe(":8000", nil)
}
