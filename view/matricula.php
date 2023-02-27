<a href="?pagina=inserir_matricula" class="btn btn-success">inserir nova matricula</a>

<table class="table table-hover table-striped" id="matriculas">
   <thead>
     <tr>
        <th>Nome aluno</th>
        <th>Curso</th>
        <th>Deletar</th>

     </tr>
     </thead>
     <tbody>
     <?php
     while($linha = mysqli_fetch_array($consulta_matriculas)){
        echo'<tr><td>'.$linha['NOME_ALUNO'].'</td>';
        echo'<td>'.$linha['NOME_CURSO'].'</td>';
        
     
     ?>

      
      <td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['ID_ALUNO_CURSO'] ?>"><i class="fa-sharp fa-solid fa-delete-left"></i></a></td></tr>
     <?php
      }
     ?>
     </tbody>
</table>