package main

import (
	"context"
	"log"

	"github.com/jeanmamelo/practicing-projects/go/go-gRPC/pb"
	"google.golang.org/grpc"
)

func main() {
	connection, err := grpc.Dial("localhost:50051", grpc.WithInsecure())

	if err != nil {
		log.Fatalf("Could not connect: %v", err)
	}

	defer connection.Close()

	client := pb.NewHelloServiceClient(connection)

	Hello(client)
}

func Hello(client pb.HelloServiceClient) {
	request := &pb.HelloRequest{
		Name: "Jean",
	}

	res, err := client.Hello(context.Background(), request)

	if err != nil {
		log.Fatalf("Error during the execution: %v", err)
	}

	log.Println(res.Msg)
}
