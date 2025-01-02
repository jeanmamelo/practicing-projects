class Pessoa:

    def __init__(self, nome, idade, peso, altura):
        self.nome = nome
        self.idade = idade
        self.peso = peso
        self.altura = altura

    def envelhecer(self):
        self.idade += 1

    def engordar(self):
        self.peso += 1

    def emagrecer(self):
        self.peso -= 1

    def crescer(self):
        if self.idade < 21:
            self.altura += 0.005

pessoa = Pessoa("João", 20, 58, 1.70)
print("ANTES")
print(pessoa.nome)
print(pessoa.idade)
print(pessoa.peso)
print(pessoa.altura)
pessoa.crescer()
print("DEPOIS")
print(pessoa.nome)
print(pessoa.idade)
print(pessoa.peso)
print(pessoa.altura)
