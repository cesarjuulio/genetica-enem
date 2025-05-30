# Projeto Genética ENEM

Este é um site educativo focado em Genética, desenvolvido para auxiliar estudantes que estão se preparando para o ENEM e vestibulares. O projeto oferece resumos dos principais assuntos, vídeos explicativos e um simulado interativo com questões reais de provas anteriores.

## Equipe de desenvolvimento

- **Charley Rodrigues**
- **Júlio César**
- **Ravena Nóbrega**

## Funcionalidades

- **Página inicial** com carrossel de assuntos principais.
- **Resumos temáticos** sobre:
  - DNA e RNA
  - Leis de Mendel
  - Heredogramas
  - Doenças Genéticas
  - Mutações e Diversidade Genética
  - Biotecnologia e Engenharia Genética
- **Simulado interativo** com perguntas de múltipla escolha, correção automática e feedback imediato.
- **Página de vídeos** com animações e explicações dos principais temas.
- **Layout responsivo** e visual moderno, com navegação intuitiva.

## Estrutura de Pastas

```
index.php
simulado.php
videos.php
css/
    assuntos.css
    simulado.css
    style.css
images/
    fav.jpg
includes/
    footer.php
    header.php
    perguntas.php
pages/
    biotecnologia-engenharia.php
    dna-rna.php
    doencas-geneticas.php
    heredogramas.php
    leis-de-mendel.php
    mutacao-diversidade.php
```

- **index.php**: Página inicial do site.
- **simulado.php**: Página do simulado interativo.
- **videos.php**: Página com vídeos e animações.
- **css/**: Arquivos de estilos para cada seção.
- **images/**: Imagens utilizadas no site.
- **includes/**: Componentes reutilizáveis (header, footer, perguntas).
- **pages/**: Páginas de conteúdo dos assuntos.

## Como Funciona o Simulado

- O usuário escolhe o número de perguntas (até 20).
- As perguntas são sorteadas aleatoriamente a partir do banco de questões em [`includes/perguntas.php`](includes/perguntas.php).
- Após responder, o sistema mostra o número de acertos e permite refazer o simulado.

---

Desenvolvido para fins didáticos e de apoio ao estudo de Genética para o ENEM.
