package main

import (
	"context"
	"log"
	"net"

	"github.com/jeanmamelo/practicing-projects/go/go-gRPC/pb"

	"google.golang.org/grpc"
)

type server struct{}

func (*server) Hello(ctx context.Context, request *pb.HelloRequest) (*pb.HelloResponse, error) {
	result := "Hello " + request.GetName()

	response := &pb.HelloResponse{
		Msg: result,
	}

	return response, nil
}

func main() {
	lis, err := net.Listen("tcp", "0.0.0.0:50051")

	if err != nil {
		log.Fatalf("Failed to list %v", err)
	}

	grpcServer := grpc.NewServer()
	pb.RegisterHelloServiceServer(grpcServer, &server{})

	if err := grpcServer.Serve(lis); err != nil {
		log.Fatalf("Failed to serve: %v", err)
	}
}
