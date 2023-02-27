<a href="?pagina=inserir_aluno" class="btn btn-success">inserir novo aluno</a>

<table class="table table-hover table-striped" id="alunos">
   <thead>
     <tr>
        <th>Nome aluno</th>
        <th>data de nascimento</th>
        <th>Editar</th>
        <th>Deletar</th>
     </tr>
     </thead>
     <tbody>
     <?php
     while($linha = mysqli_fetch_array($consulta_alunos)){
        echo'<tr><td>'.$linha['NOME_ALUNO'].'</td>';
        echo'<td>'.$linha['DATA_NACIMENTO'].'</td>';
     
     ?>
    <td><a href="?pagina=inserir_aluno&edita=<?php echo $linha['ID_ALUNO'] ?>"><i class="fa-solid fa-pen"></i></a></td>
    <td><a href="deleta_aluno.php?ID_ALUNO=<?php echo $linha['ID_ALUNO'] ?>"><i class="fa-sharp fa-solid fa-delete-left"></i></a></td></tr>
     <?php
      }
     ?>
     </tbody>
</table>
