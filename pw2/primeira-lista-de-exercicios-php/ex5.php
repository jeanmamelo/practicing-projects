<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="d-flex flex-column w-100 h-100 p-3 mx-auto text-center text-white bg-dark">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-center mb-0 text-warning">Exercício 5</h3>
        </div>
    </header>
    <main class="px-3">
        <div class="container mb-3">
            <p class="mb-3">Escreva um algoritmo para receber de um formulário o salário mensal atual de um funcionário e o percentual de reajuste. Calcule e exiba o valor do novosalário.</p>
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
                if (isset($_POST['salario']) && isset($_POST['ajuste'])) {
                    $salario = $_POST['salario'];
                    $ajuste = $_POST['ajuste'];

                    $reajuste = $salario * ($ajuste / 100);
                    $salario_final = $salario * (1 + ($ajuste / 100));
                    
                    $reajuste_formatado = number_format($reajuste, 2, ',', '');
                    $salario_final_formatado = number_format($salario_final, 2, ',', '');

                    echo "<br> Reajuste de: <strong>R&#36;{$reajuste_formatado}</strong>";
                    echo "<br> Salário final: <strong>R&#36;{$salario_final_formatado}</strong>";
                }
            ?>

        </div>
    </main>
</body>
</html>