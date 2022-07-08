<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>CredEasy</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php if (isset($_SESSION['logado'])): ?>
            <nav class="navbar navbar-dark bg-dark mb-2">
                <a class="navbar-brand" href="/listar-cursos">Home</a>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/logout">Sair</a>
                    </li>
                </ul>
            </nav>
        <?php endif; ?>

        <div class="container">
            <div class="jumbotron">
                <h1><?= $titulo; ?></h1>
            </div>

            <?php if (isset($_SESSION['mensagem'])): ?>
                <div class="alert alert-<?= $_SESSION['tipo_mensagem']; ?>">
                    <?= $_SESSION['mensagem']; ?>
                </div>
                
                <?php
                    unset($_SESSION['mensagem']);
                    unset($_SESSION['tipo_mensagem']);
                ?>
            <?php endif; ?>
