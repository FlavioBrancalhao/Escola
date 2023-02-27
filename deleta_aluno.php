<?php
include 'db.php';

$ID_ALUNO = $_GET['ID_ALUNO'];

$query = "DELETE FROM ALUNOS WHERE ID_ALUNO = $ID_ALUNO";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');
