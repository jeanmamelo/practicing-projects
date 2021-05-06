<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="d-flex flex-column w-100 h-100 p-3 mx-auto text-center text-white bg-dark">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-center mb-0 text-warning">Exercício 9</h3>
        </div>
    </header>
    <main class="px-3">
        <div class="container mb-3">
            <p class="mb-3">Um posto está vendendo combustíveis com a seguinte tabela de descontos:</p>
            <p class="mb-3">Álcool: <br> 
            - Até 20 litros, desconto de 3% por litro. <br>
            - Acima de 20 litros, desconto de 5% por litro.</p>
            <p class="mb-3">Gasolina: <br> 
            - Até 20 litros, desconto de 4% por litro. <br>
            - Acima de 20 litros, desconto de 6% por litro.</p>
            <p class="mb-3">Escreva um algoritmo que receba o número de litros vendidos e o tipo decombustível (Álcool ou Gasolina), calcule e exiba o valor a ser pago pelo clientesabendo-se que o preço do litro da gasolina é R$ 3,30 e o preço do litro doálcool é R$ 2,90.</p>
            <form action="#" method="post">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <input type="number" min="0.5" step="0.01" oninput="validity.valid||(value='');" class="form-control" placeholder="Salário mensal atual (ex.: R$2000)" aria-describedby="button-addon2" name="salario" required>
                    </div>

                    <div class="col-sm-6">
                        <input type="number" min="1" step="0.1" oninput="validity.valid||(value='');" class="form-control" placeholder="Percentual de reajuste (ex.: 10%)" aria-describedby="button-addon2" name="ajuste" required>
                    </div>

                    <div class="d-grid gap-2 col-1 mx-auto">
                        <button class="btn btn-warning" type="submit" id="button-addon2">Enviar</button>
                    </div>
                </div>
            </form>

            <?php
                if (isset($_POST['salario']) || isset($_POST['ajuste'])) {
                    
                }
            ?>

        </div>
    </main>
</body>
</html>