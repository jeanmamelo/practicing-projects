FROM golang:1.12.0-alpine3.9 as builder

WORKDIR /build

COPY go.mod .

RUN go mod download

COPY . .

RUN go build -o main .

FROM scratch

WORKDIR /build

COPY --from=builder /build .

CMD [ "./main" ]
