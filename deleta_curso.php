<?php 

include 'db.php';

$id_curso = $_GET['id_cursos'];

$query = "DELETE FROM CURSOS WHERE ID_CURSOS =". $id_curso;

$delete = mysqli_query($conexao, $query);
#echo $delete;
header('location:index3.php?pagina=cursos');
