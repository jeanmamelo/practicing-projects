import random

print("Jokenpô dos cria")

jogadas_possiveis = ["pedra", "papel", "tesoura"]

acao_jogador_1 = ""

VITORIA = "Parabéns! Você venceu."
DERROTA = "O PC venceu! Você perdeu seu ruim."

while acao_jogador_1 != "pedra" and acao_jogador_1 != "papel" and acao_jogador_1 != "tesoura":
# while True:

    acao_jogador_1 = input("Escolha a sua jogada (pedra, papel ou tesoura): ")
    print("Sua escolha:", acao_jogador_1)

    acao_jogador_pc = random.choice(jogadas_possiveis)
    print("Escolha do PC:", acao_jogador_pc)

    if acao_jogador_1 == acao_jogador_pc:
        print("Empatou! KKKKKKKKKKKK")
    elif acao_jogador_1 == "pedra" and acao_jogador_pc == "papel":
        print(DERROTA)
    elif acao_jogador_1 == "pedra" and acao_jogador_pc == "tesoura":
        print(VITORIA)
    elif acao_jogador_1 == "papel" and acao_jogador_pc == "pedra":
        print(VITORIA)
    elif acao_jogador_1 == "papel" and acao_jogador_pc == "tesoura":
        print(DERROTA)
    elif acao_jogador_1 == "tesoura" and acao_jogador_pc == "pedra":
        print(DERROTA)
    elif acao_jogador_1 == "tesoura" and acao_jogador_pc == "papel":
        print(VITORIA)
    else:
        print("Digite apenas pedra, papel ou tesoura!\n")
    # jogar_novamente = input("Você deseja jogar novamente? (sim/nao): ")
    # if jogar_novamente != "sim":
    #     break
