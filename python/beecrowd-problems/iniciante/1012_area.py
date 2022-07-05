linha_1 = input().split(' ')

a, b, c = linha_1

valor_a = float(a)
valor_b = float(b)
valor_c = float(c)

PI = 3.14159

area_triangulo_retangulo = (valor_a * valor_c) / 2
area_circulo = PI * (valor_c ** 2)
area_trapezio = ((valor_a + valor_b) * valor_c) / 2
area_quadrado = valor_b ** 2
area_retangulo = valor_a * valor_b

print(f'TRIANGULO: {area_triangulo_retangulo:.3f}')
print(f'CIRCULO: {area_circulo:.3f}')
print(f'TRAPEZIO: {area_trapezio:.3f}')
print(f'QUADRADO: {area_quadrado:.3f}')
print(f'RETANGULO: {area_retangulo:.3f}')
