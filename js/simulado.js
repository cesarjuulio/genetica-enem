document.addEventListener("DOMContentLoaded", async () => {
  const response = await fetch("/genetica-enem/includes/perguntas.php");
  let perguntas = await response.json();

  // Embaralha as perguntas
  perguntas = perguntas.sort(() => Math.random() - 0.5);

  const container = document.getElementById("quizContainer");
  const quizForm = document.getElementById("quizForm");
  const configSimulado = document.getElementById("configSimulado");
  const iniciarBtn = document.getElementById("iniciarSimulado");
  const numPerguntasInput = document.getElementById("numPerguntas");

  iniciarBtn.addEventListener("click", () => {
    let qtd = parseInt(numPerguntasInput.value, 10);
    if (isNaN(qtd) || qtd < 1) qtd = 1;
    if (qtd > perguntas.length) qtd = perguntas.length;

    // Limpa o container e exibe só a quantidade escolhida
    container.innerHTML = "";
    const perguntasSelecionadas = perguntas.slice(0, qtd);

    perguntasSelecionadas.forEach((q, index) => {
      const div = document.createElement("div");
      div.innerHTML = `<p><strong>${index + 1}.</strong> ${q.pergunta}</p>`;
      q.alternativas.forEach((alt, i) => {
        div.innerHTML += `
          <label>
            <input type="radio" name="q${index}" value="${i}"> ${alt}
          </label><br>`;
      });
      container.appendChild(div);
    });

    configSimulado.style.display = "none";
    quizForm.style.display = "block";

    quizForm.onsubmit = (e) => {
      e.preventDefault();
      let acertos = 0;
      perguntasSelecionadas.forEach((q, index) => {
        const resposta = document.querySelector(`input[name="q${index}"]:checked`);
        if (resposta && parseInt(resposta.value) === q.correta) {
          acertos++;
        }
      });
      document.getElementById("resultado").innerText = `Você acertou ${acertos} de ${perguntasSelecionadas.length}.`;
    };
  });
});
