package services

import "errors"

func Sum(a int, b int) int {
	return a + b
}

func Divide(a int, b int) (int, error) {
	if b == 0 {
		err := errors.New("invalid operation")
		return 0, err
	}

	return a / b, nil
}
