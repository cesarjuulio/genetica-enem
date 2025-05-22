<?php
    // Defina o nome da página ativa antes de incluir este header em cada página
    if (!isset($pagina_atual)) $pagina_atual = '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/fav.jpg" type="image/x-icon">
    <title>Genética - Assuntos ENEM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="/genetica-enem/index.php">
                <img src="/genetica-enem/images/fav.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-top">
                Genética ENEM
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php if($pagina_atual == 'home') echo 'active'; ?>">
                        <a class="nav-link" href="/genetica-enem/index.php">
                            Home <?php if($pagina_atual == 'home') echo '<span class="sr-only">(página atual)</span>'; ?>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Assuntos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/genetica-enem/pages/leis-de-mendel.php">
                                Leis de Mendel <?php if($pagina_atual == 'leis') echo '<span class="sr-only">(página atual)</span>'; ?>
                            </a>
                            <a class="dropdown-item" href="/genetica-enem/pages/dna-rna.php">
                                DNA e RNA <?php if($pagina_atual == 'dna') echo '<span class="sr-only">(página atual)</span>'; ?>
                            </a>
                            <a class="dropdown-item" href="/genetica-enem/pages/mutacao-diversidade.php">
                                Mutação e Diversidade <?php if($pagina_atual == 'mutacao') echo '<span class="sr-only">(página atual)</span>'; ?>
                            </a>
                            <a class="dropdown-item" href="/genetica-enem/pages/biotecnologia-engenharia.php">
                                Biotecnologia <?php if($pagina_atual == 'biotec') echo '<span class="sr-only">(página atual)</span>'; ?>
                            </a>
                            <a class="dropdown-item" href="/genetica-enem/pages/heredogramas.php">
                                Heredogramas <?php if($pagina_atual == 'heredogramas') echo '<span class="sr-only">(página atual)</span>'; ?>
                            </a>
                            <a class="dropdown-item" href="/genetica-enem/pages/doencas-geneticas.php">
                                Doenças Genéticas <?php if($pagina_atual == 'doencas') echo '<span class="sr-only">(página atual)</span>'; ?>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item <?php if($pagina_atual == 'simulado') echo 'active'; ?>">
                        <a class="nav-link" href="/genetica-enem/simulado.php">
                            Simulado <?php if($pagina_atual == 'simulado') echo '<span class="sr-only">(página atual)</span>'; ?>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>