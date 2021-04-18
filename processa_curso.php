<?php

include 'db.php';

$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$query = "INSERT INTO CURSOS (nome_curso, carga_horaria) VALUES ('".$nome_curso."',". $carga_horaria.")";

#echo "alert('".$query."')";
$insert = mysqli_query($conexao, $query);
#echo $insert
header('location:index3.php?pagina=cursos');

?>