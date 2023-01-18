package main

import "fmt"

func main() {
	//1
	var variavel1 string = "var1"
	fmt.Println(variavel1)
	variavel2 := "var2"
	fmt.Println(variavel2)

	//2
	x := 5
	x += 1
	println("valor de x:", x)

	//4
	var variavel string = "a"
	variavel = "eu vareio"
	fmt.Println(variavel)
	const constante string = "eu não vareio"
	fmt.Println(constante)

	//5
	fmt.Println("Enter a temperature in Fahrenheit:")
	var input float64
	fmt.Scanf("%f", &input)

	output := ((input - 32) * 5 / 9)
	fmt.Println("Temperature in Celsius:", output)

	//6
	pes := 5.0
	metros := pes * 0.3048
	fmt.Printf("%0.2f pés para metros: %0.3f\n", pes, metros)

}
