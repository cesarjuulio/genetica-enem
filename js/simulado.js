document.addEventListener("DOMContentLoaded", async () => {
  const response = await fetch("/genetica-enem/includes/perguntas.php");
  let perguntas = await response.json();

  // Embaralha as perguntas e pega apenas as 10 primeiras
  perguntas = perguntas.sort(() => Math.random() - 0.5);

  const container = document.getElementById("quizContainer");
  const configSimulado = document.getElementById("configSimulado");
  const quizForm = document.getElementById("quizForm");
  const iniciarBtn = document.getElementById("iniciarSimulado");
  const numPerguntasInput = document.getElementById("numPerguntas");

  iniciarBtn.addEventListener("click", () => {
    // Limpa o container
    container.innerHTML = "";

    // Pega a quantidade escolhida pelo usuário
    let qtd = parseInt(numPerguntasInput.value, 10);
    if (isNaN(qtd) || qtd < 1) qtd = 1;
    if (qtd > perguntas.length) qtd = perguntas.length;

    // Seleciona as perguntas
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

    // Esconde a seleção e mostra o quiz
    configSimulado.style.display = "none";
    quizForm.style.display = "flex";

    // Adiciona o submit para o quizForm
    quizForm.onsubmit = (e) => {
      e.preventDefault();
      let acertos = 0;

      // Remove feedbacks antigos
      document.querySelectorAll('.feedback-resposta').forEach(el => el.remove());

      perguntasSelecionadas.forEach((q, index) => {
        const resposta = document.querySelector(`input[name="q${index}"]:checked`);
        const divQuestao = container.children[index];
        let feedback = document.createElement('div');
        feedback.className = 'feedback-resposta';
        feedback.style.marginTop = '8px';
        feedback.style.fontWeight = 'bold';

        if (resposta && parseInt(resposta.value) === q.correta) {
          acertos++;
          feedback.textContent = '✔️ Resposta correta!';
          feedback.style.color = '#388e3c';
        } else {
          feedback.textContent = '❌ Resposta incorreta.';
          feedback.style.color = '#d32f2f';
        }
        divQuestao.appendChild(feedback);
      });

      document.getElementById("resultado").innerText = `Você acertou ${acertos} de ${perguntasSelecionadas.length}.`;
    };
  });
});
