<?php 

include 'db.php';

$nome_aluno = $_POST['nome_aluno'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];

$query = "INSERT INTO ALUNOS(nome_aluno, email, data_nascimento) VALUES('".$nome_aluno."','".$email."', '".$data_nascimento."')";

mysqli_query($conexao, $query);

header('location:index3.php?pagina=alunos');