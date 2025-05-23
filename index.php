<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/fav.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Genética Educacional</title>
</head>
<body>
    <?php $pagina_atual = 'home'; include 'includes/header.php'; ?>
    <div class="container">
        <h1>Estudo de Genética do ENEM</h1>
        <p>Aqui você poderá acessar informações de:</p>
        <div class="carrossel-assuntos">
            <a class="carrossel-card" href="pages/dna-rna.php">
                <strong>DNA e RNA</strong>
                <div style="font-size:0.98em; color:#333; margin-top:8px;">
                    Estrutura, funções e diferenças entre DNA e RNA.
                </div>
            </a>
            <a class="carrossel-card" href="pages/leis-de-mendel.php">
                <strong>Leis de Mendel</strong>
                <div style="font-size:0.98em; color:#333; margin-top:8px;">
                    Princípios da hereditariedade e exemplos clássicos.
                </div>
            </a>
            <a class="carrossel-card" href="pages/heredogramas.php">
                <strong>Heredogramas</strong>
                <div style="font-size:0.98em; color:#333; margin-top:8px;">
                    Interpretação de árvores genealógicas genéticas.
                </div>
            </a>
            <a class="carrossel-card" href="pages/doencas-geneticas.php">
                <strong>Doenças Genéticas</strong>
                <div style="font-size:0.98em; color:#333; margin-top:8px;">
                    Exemplos e causas de doenças hereditárias.
                </div>
            </a>
            <a class="carrossel-card" href="pages/mutacao-diversidade.php">
                <strong>Mutações e Diversidade Genética</strong>
                <div style="font-size:0.98em; color:#333; margin-top:8px;">
                    Como as mutações contribuem para a variabilidade.
                </div>
            </a>
            <a class="carrossel-card" href="pages/biotecnologia-engenharia.php">
                <strong>Biotecnologia e Engenharia Genética</strong>
                <div style="font-size:0.98em; color:#333; margin-top:8px;">
                    Aplicações e avanços da genética na sociedade.
                </div>
            </a>
        </div>
        <p style="text-align:center; margin-top:32px;">
            <a href="simulado.php" style="background:#1976d2;color:#fff;padding:12px 32px;border-radius:8px;text-decoration:none;font-weight:bold;box-shadow:0 2px 8px rgba(25,118,210,0.08);transition:background 0.2s;">Ir para o Simulado</a>
        </p>
    </div>
</body>
</html>