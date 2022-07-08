import math

linha_1 = input().split(' ')
linha_2 = input().split(' ')

x1, y1 = linha_1
x2, y2 = linha_2

x1 = float(x1)
y1 = float(y1)
x2 = float(x2)
y2 = float(y2)

distancia = math.sqrt(((x2 - x1) ** 2) + ((y2 - y1) ** 2))

print(f'{distancia:.4f}')
