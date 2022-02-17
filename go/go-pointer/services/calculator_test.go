package services

import (
	"testing"

	"github.com/stretchr/testify/require"
)

// using testing
func TestSum(t *testing.T) {
	if Sum(2, 2) != 4 {
		t.Error("2 + 2 must be 4")
	}
}

// using testify
func TestDivide(t *testing.T) {
	a := 2
	b := 2

	division, err := Divide(a, b)

	require.Equal(t, division, 1)
	require.NoError(t, err)
	require.NotNil(t, a)
	require.NotNil(t, b)
}
