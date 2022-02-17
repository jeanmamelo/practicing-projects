# useful testing commands

## unit testing (native)

run every *_test.go file
```go
go test ./...
```

run tests and shows the coverage %
```go
go test -cover ./...
```

create a file with some confusing testing inputs
```go
go test -coverprofile=coverage.out ./...
```

open an html page showing what is been covered in <span style="color:green">green</span> and what still needs to be covered in <span style="color:red">red</span> (also can see the % covered in each *_test.go file)
```go
go tool cover -html=coverage.out
```

## unit testing (testify)

[testify](https://github.com/stretchr/testify)
