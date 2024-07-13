package main

import (
	"log"
	"time"
)

func doWork(id int) error {
	log.Printf("worker %d started", id)
	time.Sleep(1 * time.Second)
	log.Printf("worker %d finished", id)
	return nil
}

func main() {
	workers := 5

	errCh := make(chan error, workers)
	for i := range workers {
		go func() {
			errCh <- doWork(i)
		}()
	}

	for i := cap(errCh); i > 0; i-- {
		if err := <-errCh; err != nil {
			log.Printf("worker returned an error: %v", err)
		}
	}
	log.Printf("all %d workers completed!", workers)
}
