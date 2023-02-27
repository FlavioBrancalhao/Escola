<?php
include 'db.php';

$id_curso = $_POST['id_curso'];
$nome_curso =$_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$query = "UPDATE CURSOS SET NOME_CURSO = '$nome_curso', CARGA_HORARIA = $carga_horaria WHERE ID_CURSO = $id_curso";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cursos');