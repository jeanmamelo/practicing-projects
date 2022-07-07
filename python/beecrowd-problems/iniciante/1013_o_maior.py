line = input().split(' ')

a, b, c = line

value_a = int(a)
value_b = int(b)
value_c = int(c)

greatest_ab = (value_a + value_b + abs(value_a - value_b)) / 2

greatest = (greatest_ab + value_c + abs(greatest_ab - value_c)) / 2

print(f'{int(greatest)} eh o maior')
