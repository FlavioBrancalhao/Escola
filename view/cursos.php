<a href="?pagina=inserir_curso" class="btn btn-success">inserir novo curso</a>

<table class="table table-hover table-striped" id="cursos">
   <thead>

   
     <tr>
        <th>Nome curso</th>
        <th>Carga horária</th>
        <th>Editar</th>
        <th>Deletar</th>

     </tr>
     </thead>
     <tbody>     <?php
     while($linha = mysqli_fetch_array($consulta_cursos)){
        echo'<tr><td>'.$linha['NOME_CURSO'].'</td>';
        echo'<td>'.$linha['CARGA_HORARIA'].'</td>';
     


     ?>
      <td><a href="?pagina=inserir_curso&edita=<?php echo $linha['ID_CURSO'] ?>"><i class="fa-solid fa-pen"></i></a></td>
      <td><a href="deleta_curso.php?ID_CURSO=<?php echo $linha['ID_CURSO'] ?>"><i class="fa-sharp fa-solid fa-delete-left"></i></a></td></tr>
     <?php

      }
     ?>
     </tbody>

</table>