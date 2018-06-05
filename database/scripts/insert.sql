use trophies;

# USERS
INSERT INTO users (nome, cpf, nasc, institution, sex, type, email, password) VALUES ('Gabriel Marques de Melo', true);

# ATIVIDADES
INSERT INTO atividades (nome, descricao) VALUES ('Criar repositório', 'Crie um repositório local usando a VCS git');
INSERT INTO atividades (nome, descricao) VALUES ('Crie um commit', 'Crie um commit de seu projeto');
INSERT INTO atividades (nome, descricao) VALUES ('Clone um repositório remoto', 'Clone um repositório disponibilizado na plataforma GitHub');
INSERT INTO atividades (nome, descricao) VALUES ('Faça um push', 'Envie os dados de seu repositório local para um remoto com o comando push');
INSERT INTO atividades (nome, descricao) VALUES ('Crie um arquivo README', 'Crie um arquivo de descrição de seu projeto, um arquivo README.md');


# DISCIPLINAS
INSERT INTO disciplinas (nome, id_professor, tipo_trofeu, tipo_atividade) VALUES ('Introdução ao Git/GitHub', '1', 'pontos', 'individual');
INSERT INTO disciplinas (nome, id_professor, tipo_trofeu, tipo_atividade) VALUES ('Git/GitHub avançado', '1', 'pontos', 'individual');

# ATIVIDADES_ALOCADAS
INSERT INTO atividades_alocadas (id_atividade, id_disciplina, data_entrega, status) VALUES ('1', '1', '22-02-19', 'andamento');

# ALUNOS
INSERT INTO alunos (id_disciplina, id_usuario) VALUES ('1', '2');
INSERT INTO alunos (id_disciplina, id_usuario) VALUES ('2', '2');