# DISCIPLINAS DE UM PROFESSOR
SELECT d.nome
FROM disciplinas AS d, users AS p
WHERE p.id = d.id_professor and p.name = "Giulya Carvalho de Almeida";

# DISCIPLINAS DE UM ALUNO
SELECT d.nome
FROM disciplinas AS d, users AS u, alunos AS a
WHERE d.id = a.id_disciplina and u.id = a.id_usuario and u.name = "Gabriel Marques de Melo";

# ATIVIDADES DE UMA DISCIPLINA
SELECT a.nome
FROM disciplinas AS d, atividades_alocadas AS aa, atividades AS a
WHERE a.id = aa.id_atividade and d.id = aa.id_disciplina and d.nome = "Introdução ao Git/GitHub";
