document.addEventListener("DOMContentLoaded", async () => {
  const response = await fetch("perguntas.php");
  const perguntas = await response.json();

  const container = document.getElementById("quizContainer");

  perguntas.forEach((q, index) => {
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

  document.getElementById("quizForm").addEventListener("submit", (e) => {
    e.preventDefault();
    let acertos = 0;

    perguntas.forEach((q, index) => {
      const resposta = document.querySelector(`input[name="q${index}"]:checked`);
      if (resposta && parseInt(resposta.value) === q.correta) {
        acertos++;
      }
    });

    document.getElementById("resultado").innerText = `Você acertou ${acertos} de ${perguntas.length}.`;
  });
});
