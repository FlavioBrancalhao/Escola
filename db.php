<?php

$servidor = "localhost";
$acesso ="root";
$senha = "";
$db = "aula_php";

$conexao = mysqli_connect($servidor,$acesso, $senha,$db);




$query = "SELECT * FROM cursos";
$consulta_cursos = mysqli_query($conexao, $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );

$query = "SELECT * FROM alunos";
$consulta_alunos = mysqli_query($conexao, $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );

$query = "SELECT alunos_cursos.ID_ALUNO_CURSO, alunos.NOME_ALUNO, cursos.NOME_CURSO
        FROM alunos, cursos, alunos_cursos
        WHERE alunos_cursos.ID_ALUNO = alunos.ID_ALUNO
        AND alunos_cursos.ID_CURSO = cursos.ID_CURSO";


$consulta_matriculas = mysqli_query($conexao, $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );

$query = "SELECT * FROM usuarios";
$consulta_usuarios = mysqli_query($conexao, $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );


