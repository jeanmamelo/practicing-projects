nome = input()
salario_base = float(input())
total_vendas = float(input())

comissao = total_vendas * 0.15
salario_final = salario_base + comissao

print('TOTAL = R$ %.2f' % salario_final)
