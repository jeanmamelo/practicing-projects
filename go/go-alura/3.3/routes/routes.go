package routes

import (
	"net/http"

	"github.com/jeanmamelo/practicing-projects/go/go-alura/3.3/controllers"
)

func CarregaRotas() {
	http.HandleFunc("/", controllers.Index)
	http.HandleFunc("/new", controllers.New)
	http.HandleFunc("/insert", controllers.Insert)
}
