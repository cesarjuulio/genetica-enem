<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/fav.jpg" type="image/x-icon">
    <title>Simulado Vestibular - Genética</title>
</head>
<body>
    <?php $pagina_atual = 'simulado'; include 'includes/header.php'; ?>

    <main>
        <h1>Simulado de Genética</h1>
        <p>Teste seus conhecimentos sobre genética com este simulado.</p>

        <form id="quizForm">
            <div id="quizContainer"></div>
            <button type="submit">Enviar Respostas</button>
        </form>

        <div id="resultado" style="margin-top:20px; font-weight:bold;"></div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="js/simulado.js" defer></script>
</body>
</html>