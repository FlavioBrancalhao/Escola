<?php
include 'db.php';

$id_aluno = $_POST['id_aluno'];
$nome_aluno =$_POST['nome_aluno'];
$data_nascimento = $_POST['data_nascimento'];

$query = "UPDATE ALUNOS SET NOME_ALUNO = '$nome_aluno', DATA_NACIMENTO = '$data_nascimento' WHERE ID_ALUNO= $id_aluno";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');