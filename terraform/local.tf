resource "local_file" "example" {
    filename = "example.txt"
    content = var.content
}

variable "content" {
    type = string
}
