<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/fav.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/genetica-enem/css/simulado.css">
    <title>Simulado Vestibular - Genética</title>
</head>
<body>
    <?php $pagina_atual = 'simulado'; include 'includes/header.php'; ?>

    <main>
        <h1>Simulado de Genética</h1>
        <p>Teste seus conhecimentos sobre genética com este simulado.</p>

        <div id="configSimulado">
            <div id="objetosConfig">
                <label for="numPerguntas"><strong>Quantas perguntas você quer responder?</strong></label>
                <input type="number" id="numPerguntas" min="1" max="10" style="width:100px;">
                <button id="iniciarSimulado" type="button">Iniciar</button>
            </div>
        </div>
        <form id="quizForm" style="display:none;">
            <div id="quizContainer"></div>
            <button id="submitButton" type="submit">Enviar Respostas</button>
        </form>

        <div id="resultado" style="margin-top:20px; font-weight:bold;"></div>
    </main>

    <script src="js/simulado.js" defer></script>
</body>
</html>