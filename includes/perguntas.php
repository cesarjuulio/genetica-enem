<?php
header('Content-Type: application/json');

$perguntas = [
  [
    "pergunta" => "(ENEM 2024)O desenvolvimento da biotecnologia e da clonagem gênica em procariotos fez com que a produção de proteínas se tornasse mais intensa, rápida e econômica. Para a produção de hormônios, enzimas e proteínas de resistência a drogas, uma variação da técnica de reação em cadeia pela polimerase (PCR, na sigla em inglês) utiliza a enzima transcriptase reversa (RT-PCR), que sintetiza moléculas de DNA complementares a partir de fitas de RNA. Nesse contexto, essa técnica é importante para detectar genes",
    "alternativas" => ["Expressos", "Plasmidais", "Bacterianos", "Dominantes", "Autossômicos"],
    "correta" => 1
  ],
  [
    "pergunta" => "(ENEM 2021) Em um grupo de roedores, a presença de um gene dominante (A) determina indivíduos com pelagem na cor amarela. Entretanto, em homozigose é letal, ou seja, provoca a morte dos indivíduos no útero. Já o alelo recessivo (a) não é letal e determina a presença de pelos pretos. Com base nessas informações, considere o heredograma:
      Qual é a probabilidade de, na próxima ninhada do casal de roedores que está representado na figura pelos números 7 e 8, nascer uma fêmea de pelagem amarela (representada pelo número 11)?",
    "alternativas" => ["1/4 (25%)", "1/3 (33%)", "1/2 (50%)", "2/3 (66%)", "3/4 (75%)"],
    "correta" => 2
  ],
  [
    "pergunta" => "(ENEM 2019) Com base nos experimentos de plantas de Mendel, foram estabelecidos três princípios básicos, que são conhecidos como leis da uniformidade, segregação e distribuição independente. A lei da distribuição independente refere-se ao fato de que os membros de pares diferentes de genes segregam-se independentemente, uns dos outros, para a prole.
    TURNPENNY, P. D. Genética médica. Rio de Janeiro: Elsevier, 2009 (adaptado).
    Hoje, sabe-se que isso nem sempre é verdade. Por quê?",
    "alternativas" => ["A distribuição depende do caráter de dominância ou recessividade do gene.", "Os organismos nem sempre herdam cada um dos genes de cada um dos genitores.", "As alterações cromossômicas podem levar a falhas na segregação durante a meiose.", "
    Os genes localizados fisicamente próximos no mesmo cromossomo tendem a ser herdados juntos.", "O cromossomo que contém dois determinados genes pode não sofrer a disjunção na primeira fase da meiose."],
    "correta" => 4
  ],
  [
    "pergunta" => "Quem pintou a Mona Lisa?",
    "alternativas" => ["Van Gogh", "Michelangelo", "Leonardo da Vinci", "Picasso"],
    "correta" => 2
  ],
  [
    "pergunta" => "Quanto é 9 x 6?",
    "alternativas" => ["54", "56", "58", "60"],
    "correta" => 0
  ]
];

shuffle($perguntas);
echo json_encode(array_slice($perguntas, 0, 3));
?>