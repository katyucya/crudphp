<?php

include 'db.php';

$id_curso = $_POST['id_cursos'];
$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$query = "UPDATE CURSOS SET nome_curso='".$nome_curso."', carga_horaria=".$carga_horaria." WHERE id_cursos = ".$id_curso;

#echo "alert('".$query."')";
$insert = mysqli_query($conexao, $query);

header('location:index3.php?pagina=cursos');

?>