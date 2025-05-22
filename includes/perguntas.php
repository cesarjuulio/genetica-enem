<?php
header('Content-Type: application/json');

$perguntas = [
  [
    "pergunta" => "(ENEM 2024)O desenvolvimento da biotecnologia e da clonagem gênica em procariotos fez com que a produção de proteínas se tornasse mais intensa, rápida e econômica. Para a produção de hormônios, enzimas e proteínas de resistência a drogas, uma variação da técnica de reação em cadeia pela polimerase (PCR, na sigla em inglês) utiliza a enzima transcriptase reversa (RT-PCR), que sintetiza moléculas de DNA complementares a partir de fitas de RNA. Nesse contexto, essa técnica é importante para detectar genes",
    "alternativas" => ["Expressos", "Plasmidais", "Bacterianos", "Dominantes", "Autossômicos"],
    "correta" => 1
  ],
  [
    "pergunta" => "(ENEM 2021) Em um grupo de roedores, a presença de um gene dominante (A) determina indivíduos com pelagem na cor amarela. Entretanto, em homozigose é letal, ou seja, provoca a morte dos indivíduos no útero. Já o alelo recessivo (a) não é letal e determina a presença de pelos pretos. Com base nessas informações, considere o heredograma: (IMAGEM)
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
    "pergunta" => "(ENEM 2018)Gregor Mendel, no século XIX, investigou os mecanismos da herança genética observando algumas características de plantas de ervilha, como a produção de sementes lisas (dominante) ou rugosas (recessiva), característica determinada por um par de alelos com dominância completa. Ele acreditava que a herança era transmitida por fatores que, mesmo não percebidos nas características visíveis (fenótipo) de plantas híbridas (resultantes de cruzamentos de linhagens puras), estariam presentes e se manifestariam em gerações futuras.
    A autofecundação que fornece dados para corroborar a ideia da transmissão dos fatores idealizada por Mendel ocorre entre plantas",
    "alternativas" => ["híbridas, de fenótipo dominante, que produzem apenas sementes lisas.", "híbridas, de fenótipo dominante, que produzem sementes lisas e rugosas.", "de linhagem pura, de fenótipo dominante, que produzem apenas sementes lisas.", "de linhagem pura, de fenótipo recessivo, que produzem sementes lisas e rugosas", "de linhagem pura, de fenótipo recessivo, que produzem apenas sementes rugosas."],
    "correta" => 2
  ],
  [
    "pergunta" => "(ENEM 2017) O heredograma mostra a incidência de uma anomalia genética em um grupo familiar.(IMAGEM) O indivíduo representado pelo número 10, preocupado em transmitir o alelo para a anomalia genética a seus filhos, calcula que a probabilidade de ele ser portador desse alelo é de",
    "alternativas" => ["0%", "25%", "50%", "67%", "75%"],
    "correta" => 4
  ],
  [
    "pergunta" => "(ENEM 2015) A fenilcetonúria é uma doença hereditária autossômica recessiva, associada à mutação do gene PAH, que limita a metabolização do aminoácido fenilalanina. Por isso, é obrigatório, por lei, que as embalagens de alimentos, como refrigerantes dietéticos, informem a presença de fenilalanina em sua composição. Uma mulher portadora de mutação para o gene PAH tem tês filhos normais, com um homem normal, cujo pai sofria de fenilcetonúria, devido à mesma mutação no gene PAH encontrada em um dos alelos da mulher.
    Qual a probabilidade de a quarta criança gerada por esses pais apresentar fenilcetonúria?",
    "alternativas" => ["0%", "12,5%", "25%", "50%", "75%"],
    "correta" => 3
  ],
  [
    "pergunta" => "(ENEM 2012)Após a redescoberta do trabalho de Gregor Mendel, vários experimentos buscaram testar a universalidade de suas leis. Suponha um desses experimentos, realizado em um mesmo ambiente, em que uma planta de linhagem pura com baixa estatura (0,6 m) foi cruzada com uma planta de linhagem pura de alta estatura (1,0 m). Na prole (F1) todas as plantas apresentaram estatura de 0,8 m. Porém, na F2 (F1 x F1) os pesquisadores encontraram os dados a seguir.(IMAGEM)Os pesquisadores chegaram à conclusão, a partir da observação da prole, que a altura nessa planta é uma característica que",
    "alternativas" => ["não segue as leis de Mendel.", "não é herdada e, sim, ambiental.", "apresenta herança mitocondrial.", "é definida por mais de um gene.", "é definida por um gene com vários alelos."],
    "correta" => 4
  ],
  [
    "pergunta" => "(ENEM 2019) Ao final do experimento, os dois grupos de plantas apresentaram",
    "alternativas" => ["os genótipos e os fenótipos idênticos.", "os genótipos idênticos e os fenótipos diferentes.", "diferenças nos genótipos e fenótipos.", "o mesmo fenótipo e apenas dois genótipos diferentes.", "o mesmo fenótipo e grande variedade de genótipos."],
    "correta" => 2
  ]
];

shuffle($perguntas);
echo json_encode(array_slice($perguntas, 0, 3));
?>