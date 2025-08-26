package main

import (
	"math/rand/v2"
	"sync"
	"testing"
	"time"

	"go.uber.org/goleak"
)

func main() {
	Before1_25()
	After1_25()
}

func Before1_25() {
	r := rand.IntN(10)
	wg := sync.WaitGroup{}
	wg.Add(1)                       // Wait for 1 more goroutine to process
	go doSomethingTheOldWay(&wg, r) // Doing something async
	wg.Wait()                       // Wait until all goroutines finishes
}

func doSomethingTheOldWay(wg *sync.WaitGroup, sleep int) {
	defer wg.Done() // Tell the waitgroup you're done. It the same as wg.Add(-1)

	time.Sleep(time.Duration(sleep) * time.Second)
}

func TestCases(t *testing.T) {
	t.Run("Before1_25", func(t *testing.T) {
		defer goleak.VerifyNone(t)

		Before1_25()
	})
}

func After1_25() {
	r := rand.IntN(10)
	wg := sync.WaitGroup{}
	wg.Go(func() { doSomethingTheNewWay(r) })
	wg.Wait()
}

func doSomethingTheNewWay(sleep int) {
	time.Sleep(time.Duration(sleep) * time.Second)
}
