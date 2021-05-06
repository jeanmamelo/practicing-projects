<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="d-flex flex-column w-100 h-100 p-3 mx-auto text-center text-white bg-dark">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-center mb-0 text-warning">Exercício 6</h3>
        </div>
    </header>
    <main class="px-3">
        <div class="container mb-3">
            <p class="mb-3">Crie um algoritmo que receba 3 notas de avaliações de um aluno. Calcule a média aritmética simples e exiba uma mensagem que diga se o aluno foi ou não aprovado (considerar que nota igual ou maior que 6 o aluno é APROVADO). Exibir também a média calculada.</p>
            <form action="#" method="post">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <input type="number" min="0" max="10" step="0.1" oninput="validity.valid||(value='');" class="form-control" placeholder="Nota 1 (ex.: 5)" aria-describedby="button-addon2" name="nota1" required>
                        </div>

                        <div class="col-sm-6">
                            <input type="number" min="0" max="10" step="0.1" oninput="validity.valid||(value='');" class="form-control" placeholder="Nota 2 (ex.: 8.5)" aria-describedby="button-addon2" name="nota2" required>
                        </div>

                        <div class="col-sm-6">
                            <input type="number" min="0" max="10" step="0.1" oninput="validity.valid||(value='');" class="form-control" placeholder="Nota 3 (ex.: 10)" aria-describedby="button-addon2" name="nota3" required>
                        </div>

                        <div class="d-grid gap-2 col-1 mx-auto">
                            <button class="btn btn-warning" type="submit" id="button-addon2">Enviar</button>
                        </div>
                    </div>
                </form>

            <?php
                if (isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {
                    $nota1 = $_POST['nota1'];
                    $nota2 = $_POST['nota2'];
                    $nota3 = $_POST['nota3'];

                    $media = ($nota1 + $nota2 + $nota3) / 3;

                    $media_final_formatada = number_format($media, 1, '.', '');

                    if ($media >= 6) {
                        echo "<br> <strong>APROVADO!</strong>";
                    } else {
                        echo "<br> <strong>REPROVADO!</strong>";
                    }

                    echo "<br> Média final: <strong>{$media_final_formatada}</strong>";
                }
            ?>

        </div>
    </main>
</body>
</html>