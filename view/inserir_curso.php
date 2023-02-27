<?php if(!isset($_GET['edita'])){
    ?>


<h1>Inserir novo curso</h1>
<form method="post" action="processa_curso.php">
    <br>
    <label for="">Nome curso</label>
    <br>
    <input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso">
    <br>
    <br>
    <label >Carga horaria</label>
    <br>
    <input class="form-control" type="text" name="carga_horaria" placeholder="Insira o nome carga horaria">                    
    <br>
    <br>
    <input type="submit" class="btn btn-success" value="Inserir curso">
</form>
<?php } else{?>
    <?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>

        <?php if($linha['ID_CURSO'] == $_GET['edita']){?>

          
    <h1>Editar curso</h1>
<form method="post" action="edita_curso.php">
    <br>
    <label for="">Nome curso</label>
    <input class="form-control" type="hidden" name="id_curso" value="<?php echo $linha['ID_CURSO']; ?> ">
    <br>
    <input  class="form-control"type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['NOME_CURSO']; ?>">
    <br>
    <br>
    <label for="">Carga horaria</label>
    <br>
    <input class="form-control" type="text" name="carga_horaria" placeholder="Insira o nome carga horaria" value="<?php echo $linha['CARGA_HORARIA']; ?>">                    
    <br>
    <br>
    <input type="submit" class="btn btn-success" value="Editar curso">
</form>
<?php } ?>
<?php } ?>
<?php } ?>