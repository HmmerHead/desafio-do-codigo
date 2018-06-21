<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pagina Principal</title>
</head>
<body class="text-center">
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="inicio">Questionários</a>
        <a class="navbar-brand" href="incluir">Adicionar</a>
        <a class="navbar-brand" href="/curso-php-2018/curso-php-2018/desafio/admin/fases/">Adicionar Fase</a>
    </nav>
</div>
<div class="container">
    <table class="table text-center text-justify">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Fase</th>
            <th scope="col">Nome da Fase</th>
            <th scope="col">Título da Pergunta</th>
            <th scope="col">Tipo</th>
            <th scope="col">Status</th>
            <th scope="col" colspan="2">Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($getAll as $item) {
            if(($item->ativa) == 1){
                $var = "Ativa";
            } else {
                $var = "Desativo";
            }
            echo "
            <tr>
                <th scope='row'>{$item->id}</th>
                <td>{$item->id_fase}</td>
                <td>{$item->titulo}</td>
                <td>{$item->tituloPergunta}</td>
                <td>{$item->tipo}</td>
                <td>{$var}</td>
                <td><a class='btn btn-primary' role='button' href='editar/$item->id'>Alterar</a></td>
                <td><a class='btn btn-primary' role='button' href='excluir/$item->id'>Excluir</a></td>
            </tr>
        ";
        }
        ?>
        </tbody>
    </table>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>