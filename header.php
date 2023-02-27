<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/45271f6a9b.js" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>DogCursos</title>
</head>
<body>
        <header style="height: auto;">
        
            <div class="container">
            <a href="?pagina=home"><img src="logo.png" alt="logo"></a>
            
            <div id="menu">
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=alunos">Alunos</a>
                <a href="?pagina=matriculas">Matriculas</a>
                <?php if(isset($_SESSION['login'])){ ?>
                     <a href="logout.php"><?php echo $_SESSION['usuario']?>Sair</a>
                <?php } ?>
                  
               
            </div>
          
           
            </div>
        </header>
        <div id="conteudo" class= container>
       