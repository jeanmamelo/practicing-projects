package main

import "fmt"

func main() {
	//1
	array := [5]float64{1, 2, 3, 4, 5}
	fmt.Println(array[4])

	//2
	slice := make([]int, 3, 9)
	fmt.Println(len(slice))

	//3
	x := [6]string{"a", "b", "c", "d", "e", "f"}
	fmt.Println(x[2:5])

	//4
	lista := []int{
		48, 96, 86, 68,
		57, 82, 63, 70,
		37, 34, 83, 27,
		19, 97, 9, 17,
	}

	menorNumero := 99999
	for i := 0; i < len(lista); i++ {
		if lista[i] < menorNumero {
			menorNumero = lista[i]
		}
	}
	fmt.Println(menorNumero)
}
