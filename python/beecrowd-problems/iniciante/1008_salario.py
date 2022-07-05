id_funcionario = int((input()))
horas_trabalhadas = int((input()))
valor_hora = float((input()))

salario = (horas_trabalhadas * valor_hora)

print('NUMBER = %i' % id_funcionario)
print('SALARY = U$ %.2f' % salario)
