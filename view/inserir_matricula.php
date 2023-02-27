<h1>inserir nova matricula</h1>


<form method="post" action="processa_matricula.php">
<select name="escolha_aluno" id="">
    <option class="form-control" >Selecione um aluno</option>
        <?php
              while($linha = mysqli_fetch_array($consulta_alunos)){
                echo'<option value="'.$linha['ID_ALUNO'].'">'
                .$linha['NOME_ALUNO'].'</option>';
                
             }
        ?>
    </select>
    
    <select name="escolha_curso" id="">
    <option class="form-control">Selecione um curso</option>
        <?php
              while($linha = mysqli_fetch_array($consulta_cursos)){
                echo'<option value="'.$linha['ID_CURSO'].'">'
                .$linha['NOME_CURSO'].'</option>';
                
             }
        ?>
    </select>
    
    <input type="submit" class="btn btn-success" name="Matricular aluno" id="">
</form>

