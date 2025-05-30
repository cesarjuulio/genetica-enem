<?php
session_start();
include 'includes/perguntas.php';

$resultado = '';
$perguntasExibir = [];
$numPerguntas = intval($_POST['numPerguntas']);

// Resetar simulado
if (isset($_POST['refazer'])) {
    unset($_SESSION['perguntasExibir']);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sorteio das perguntas
    if (isset($_POST['numPerguntas']) && !isset($_POST['respostas'])) {
        if ($numPerguntas > 0 && $numPerguntas <= count($perguntas)) {
            shuffle($perguntas);
            $_SESSION['perguntasExibir'] = array_slice($perguntas, 0, $numPerguntas);
        }
    }
    // Recupera perguntas sorteadas
    if (isset($_SESSION['perguntasExibir'])) {
        $perguntasExibir = $_SESSION['perguntasExibir'];
    }
    // Correção das respostas
    if (isset($_POST['respostas'])) {
        $respostas = $_POST['respostas'];
        $acertos = 0;
        foreach ($perguntasExibir as $i => $q) {
            if (isset($respostas[$i]) && intval($respostas[$i]) === $q['correta']) {
                $acertos++;
            }
        }
        $resultado = "Você acertou $acertos de " . count($perguntasExibir) . ".";
        unset($_SESSION['perguntasExibir']);
    }
}
?>

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

        <?php if (empty($perguntasExibir) && empty($resultado)): ?>
            <form id="configSimulado" method="post">
                <div id="objetosConfig">
                    <label for="numPerguntas"><strong>Quantas perguntas você quer responder?</strong></label>
                    <input type="number" name="numPerguntas" id="numPerguntas" min="1" max="10" required>
                    <button type="submit" id="iniciarSimulado">Iniciar Simulado</button>
                </div>
            </form>
        <?php elseif (!empty($perguntasExibir)): ?>
            <form id="quizForm" method="post" style="display: flex;">
                <div id="quizContainer">
                    <?php foreach ($perguntasExibir as $index => $pergunta): ?>
                        <div class="pergunta">
                            <p><strong><?= $index + 1 ?>.</strong> <?= htmlspecialchars($pergunta['pergunta']) ?></p>
                            <?php foreach ($pergunta['alternativas'] as $i => $alternativa): ?>
                                <label>
                                    <input type="radio" name="respostas[<?= $index ?>]" value="<?= $i ?>"
                                        <?= (isset($_POST['respostas'][$index]) && $_POST['respostas'][$index] == $i) ? 'checked' : '' ?>
                                        <?= isset($_POST['respostas']) ? 'disabled' : '' ?>
                                    >
                                    <?= htmlspecialchars($alternativa) ?>
                                </label><br>
                            <?php endforeach; ?>
                            <?php if (isset($_POST['respostas'])): ?>
                                <div class="feedback
                                    <?php
                                        if (!isset($_POST['respostas'][$index])) {
                                            echo " feedback-alert";
                                        } elseif (intval($_POST['respostas'][$index]) === $pergunta['correta']) {
                                            echo " feedback-correta";
                                        } else {
                                            echo " feedback-errada";
                                        }
                                    ?>">
                                    <?php
                                        if (!isset($_POST['respostas'][$index])) {
                                            echo '⚠️ Não respondida!';
                                        } elseif (intval($_POST['respostas'][$index]) === $pergunta['correta']) {
                                            echo '✔️ Resposta correta!';
                                        } else {
                                            echo '❌ Resposta errada!';
                                        }
                                    ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php if (!isset($_POST['respostas'])): ?>
                    <button type="submit" id="submitButton">Enviar Respostas</button>
                <?php endif; ?>
            </form>
        <?php endif; ?>

        <?php if (!empty($resultado)): ?>
            <div class="resultado-container">
                <div id="resultado"><?= $resultado ?></div>
                <form method="post">
                    <button type="submit" name="refazer" id="refazerSimulado">Refazer Simulado</button>
                </form>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>