<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-center mb-0 text-warning">Exercício 3</h3>
            </div>
        </header>
        <div class="container mb-3">
            <main class="px-3">
                <p class="mb-3">Crie um algoritmo para cálculo do IMC de uma pessoa. <br>
                                Obs.: utilize uma função para processar os dados recebidos.</p>
                <form action="#" method="post">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <input type="number" min="0.5" step="0.01" oninput="validity.valid||(value='');" class="form-control" placeholder="Altura em metros (ex.: 1,80)" aria-describedby="button-addon2" name="altura" required>
                        </div>

                        <div class="col-sm-6">
                            <input type="number" min="1" step="0.1" oninput="validity.valid||(value='');" class="form-control" placeholder="Peso em kg (ex.: 72,3)" aria-describedby="button-addon2" name="peso" required>
                        </div>

                        <div class="d-grid gap-2 col-1 mx-auto">
                            <button class="btn btn-warning" type="submit" id="button-addon2">Enviar</button>
                        </div>
                    </div>
                </form>

                <?php
                    function calcula_imc($altura, $peso): float
                    {
                        $altura = $altura;
                        return round(($peso / ($altura * $altura)), 2);
                    }
                    if (isset($_POST['altura']) and isset($_POST['peso']))
                    {
                        $altura = $_POST['altura'];
                        $peso   = $_POST['peso'];

                        $massa = calcula_imc($altura, $peso);

                        if ($massa <= 17)
                        {
                            $mensagem = "Muito abaixo do peso";
                        }
                        elseif (($massa > 17) and ($massa <= 18.49))
                        {
                            $mensagem = "Abaixo do peso";
                        }
                        elseif (($massa > 18.49) and ($massa <= 24.99))
                        {
                            $mensagem = "Peso Normal";
                        }
                        elseif (($massa > 24.99) and ($massa <= 29.99))
                        {
                            $mensagem = "Acima do Peso";
                        }
                        elseif (($massa > 29.99) and ($massa <= 34.99))
                        {
                            $mensagem = "Obesidade I";
                        }
                        elseif (($massa > 34.99) and ($massa <= 39.99))
                        {
                            $mensagem = "Obesidade II (severa)";
                        }
                        else
                        {
                            $mensagem = "Obesidade III (mórbida)";
                        }

                        echo "<br> Seu Índice de Massa Corporal é: <strong>$massa</strong> <br>";
                        echo "Estado atual: <strong>$mensagem</strong>";
                    }
                ?>

            </main>
        </div>
    </div>
</body>
</html>