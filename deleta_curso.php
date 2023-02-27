<?php
include 'db.php';

$ID_CURSO = $_GET['ID_CURSO'];

$query = "DELETE FROM CURSOS WHERE ID_CURSO = $ID_CURSO";


mysqli_query($conexao, $query);

header('location:index.php?pagina=cursos');
