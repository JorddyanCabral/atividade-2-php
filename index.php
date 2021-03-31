<? include "media.php" ?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Codigos aula</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Questão 1</h1>
                <form action="result.php" method="get">
                    <div class="d-grid gap-3 mx-5 mt-5">

                        <div class="col-sm-9 ">
                            <input type="text" class="form-control" id="" name="nomeAluno" placeholder="Nome Aluno" aria-label="Nome Aluno" required>
                        </div>
                        <div class="col-sm-9 ">
                            <input type = "number" step = "any" min="0" max="10" class="form-control" id="" name="nota1" placeholder="Nota 01" aria-label="Nota 01" required >
                        </div>
                        <div class="col-sm-9 ">
                            <input type = "number" step = "any" min="0" max="10" class="form-control" id="" name="nota2" placeholder="Nota 02" aria-label="Nota 02" required>
                        </div>
                        <div class="col-sm-9 ">
                            <input type = "number" step = "any" min="0" max="10" class="form-control" id="" name="nota3" placeholder="Nota 03" aria-label="Nota 03" required>
                        </div>

                        <button class="btn col-9 btn-primary " type="submit">Calcular Média</button>
                    </div>

                </form>
            </div>

     
        </div>
    </div>


</body>

</html>