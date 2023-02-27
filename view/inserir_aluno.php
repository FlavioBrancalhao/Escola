<?php if(!isset($_GET['edita'])){
    ?>


<h1>Inserir novo Aluno</h1>
<form method="post" action="processa_aluno.php">
    <br>
    <label >Nome aluno</label>
    <br>
    <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do curso">
    <br>
    <br>
    <label for="">Data de nascimento</label>
    <br>
    <input class="form-control" type="text" name="data_nascimento" placeholder="Insira o nome carga horaria">                    
    <br>
    <br>
    <input type="submit" class="btn btn-success" value="Inserir Aluno">
</form>
<?php } else{?>
    <?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>

        <?php if($linha['ID_ALUNO'] == $_GET['edita']){?>

          
    <h1>Editar curso</h1>
<form method="post" action="edita_aluno.php">
    <br>
    <label for="">Nome curso</label>
    <input type="hidden" name="id_aluno" value="<?php echo $linha['ID_ALUNO']; ?> ">
    <br>
    <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do curso" value="<?php echo $linha['NOME_ALUNO']; ?>">
    <br>
    <br>
    <label for="">Carga horaria</label>
    <br>
    <input class="form-control" type="text" name="data_nascimento" placeholder="Insira o nome carga horaria" value="<?php echo $linha['DATA_NACIMENTO']; ?>">                    
    <br>
    <br>
    <input type="submit" class="btn btn-success" value="Editar aluno">
</form>
<?php } ?>
<?php } ?>
<?php } ?>