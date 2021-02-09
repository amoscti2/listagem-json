<?php 
    
  require __DIR__.'/class/Json.class.php';
  $json = new Json();
  $arq  = $json->openJson('data.json');
  
?>

<table class="table table-striped table-dark mt-4">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Cargo</th>
      <th scope="col">Sexo</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        foreach($arq['list'] as $key => $value){
            echo '
            <tr>
                <td>'.$value['id'].'</td>
                <td>'.$value['name'].'</td>
                <td>'.$value['cargo'].'</td>
                <td>'.$value['sexo'].'</td>
                <td>
                  <a href="edit.php?id='.$value['id'].'">
                      <button class="btn btn-primary">Editar</button>
                  </a>
                </td>
            </tr>';
        }
    ?>
  </tbody>
</table>