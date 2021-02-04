<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-center mb-0 text-warning">Exercício 4</h3>
            </div>
        </header>
        <div class="container mb-3">
            <main class="px-3">
                <p class="mb-3">O custo de um carro novo ao consumidor é a soma do custo de fábrica com a
                                porcentagem do distribuidor e dos impostos (aplicados ao custo de fábrica).
                                Supondo que o percentual do distribuidor seja de 28% e os impostos de 45%,
                                escreva um algoritmo para receber de um formulário o custo de fábrica de um
                                carro, calcular e exibir o custo final do consumidor.</p>
                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="number" min="1" step="any" oninput="validity.valid||(value='');" class="form-control" placeholder="Preço em reais (ex.: R$ 54500)" aria-describedby="button-addon2" name="price" required>
                        <button class="btn btn-warning" type="submit" id="button-addon2">Enviar</button>
                    </div>
                </form>

                <?php
                    
                ?>

            </main>
        </div>
    </div>
</body>
</html>