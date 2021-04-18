<?php 

include 'db.php';

$id_aluno = $_GET['id_alunos'];

$query = "DELETE FROM ALUNOS WHERE ID_ALUNOS =". $id_aluno;

$delete = mysqli_query($conexao, $query);
#echo $delete;
header('location:index3.php?pagina=alunos');
