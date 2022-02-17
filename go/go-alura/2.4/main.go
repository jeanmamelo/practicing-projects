package main

import (
	"fmt"

	"github.com/jeanmamelo/practicing-projects/go/go-alura/2.4/contas"
)

func main() {
	contaExemplo := contas.ContaCorrente{}
	contaExemplo.Depositar(100)

	fmt.Println(contaExemplo.ObterSaldo())
}
