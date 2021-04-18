<?php

# Conexão com o banco de dados MySQL ********************
$servidor = "localhost";
$usuario = "admin";
$senha = "admin";
$db = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


# consultas PHP ********************
$query = "SELECT * FROM CURSOS";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "SELECT * FROM ALUNOS";
$consulta_alunos = mysqli_query($conexao, $query);

$query = "SELECT alunos.nome_aluno, cursos.nome_curso
		FROM alunos, cursos, alunos_cursos
		WHERE alunos_cursos.id_alunos = alunos.id_alunos
		AND alunos_cursos.id_cursos = cursos.id_cursos";
		;
$consulta_matriculas = mysqli_query($conexao, $query);

?>