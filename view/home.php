


<h1 style="text-align: center;">Bem vindos a DogCursos</h1>

<form action="login.php" method="post">
    <label >Usuario</label>
    <input type="text" name="usuario" 
    placeholder="Usuario" class="form-control" id="">
    <br>
    <label >Senha</label>
    <input type="password" name="senha" 
    placeholder="Senha" class="form-control" id="">
    <br>
    <input type="submit" value="Logar" class="btn btn-success">


    
</form>
<br>

    <a href="?pagina=inserir_usuario" class="btn btn-success">Cadastrar</a>




<br>
<?php if(isset($_GET['erro'])){?>
    <div class="alert alert-danger" role="alert">
  Usuario ou senha invalida.
</div>
<?php } ?> 
