<?php
session_start();
#base de dados
include 'db.php';
include 'header.php';






if(isset($_SESSION['login'])){
    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    }
    else{
        $pagina = 'cursos';
    }
}
else{
    $pagina = 'home';
}



switch ($pagina) {
    case 'cursos': include 'view/cursos.php'; break;
    case 'alunos': include 'view/alunos.php'; break;
    case 'matriculas': include 'view/matricula.php'; break;
    case 'inserir_curso': include 'view/inserir_curso.php'; break;
    case 'inserir_aluno': include 'view/inserir_aluno.php'; break;
    case 'inserir_matricula': include 'view/inserir_matricula.php'; break;
    case 'inserir_usuario': include 'view/inserir_usuario.php'; break;
   
    
    default:
    include 'view/home.php';
        break;
}

/*
@$pagina = $_GET['pagina'];
if($pagina == 'cursos'){
    include 'view/cursos.php';
}
elseif($pagina == 'alunos'){
    include 'view/alunos.php';
}
elseif($pagina == 'matriculas'){
    include 'view/matricula.php';
}
elseif($pagina == 'inserir_matricula'){
    include 'view/inserir_matricula.php';
}
elseif($pagina == 'inserir_curso'){
    include 'view/inserir_curso.php';
}
elseif($pagina == 'inserir_aluno'){
    include 'view/inserir_aluno.php';
}
else{
    include 'view/home.php';
}
*/
include 'footer.php';







