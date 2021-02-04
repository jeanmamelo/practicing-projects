<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-center mb-0 text-warning">Exercício 1</h3>
            </div>
        </header>
        <div class="container mb-3">
            <main class="px-3">
                <p class="mb-3">Crie um algoritmo em PHP que receba um valor numérico de um formulário
                                (POST) e exiba na tela se o valor é POSITIVO, NEGATIVO ou IGUAL A ZERO.</p>
                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Valor númerico" aria-describedby="button-addon2" name="value">
                        <button class="btn btn-warning" type="submit" id="button-addon2">Enviar</button>
                    </div>
                </form>

                <?php
                    if(isset($_POST['value'])) {
                        $valor = $_POST['value'];

                        if ($valor > 0) {
                            echo 'POSITIVO';
                        } else if ($valor < 0) {
                            echo 'NEGATIVO';
                        } else {
                            echo 'IGUAL A ZERO';
                        }
                    }
                ?>

            </main>
        </div>
    </div>
</body>
</html>