<h3 class="mt-4 mb-4">Welcome, human!</h3>

<?php 

    $str = file_get_contents('data.json');

    $json = json_decode($str, true); // decode the JSON into an associative array

    // echo '<pre>' . print_r($json, true) . '</pre>';
?>

<table class="table table-striped table-dark">
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
        foreach($json['list'] as $key => $value){
            echo '
            <tr>
                <td>'.$value['id'].'</td>
                <td>'.$value['name'].'</td>
                <td>'.$value['cargo'].'</td>
                <td>'.$value['sexo'].'</td>
                <td><button class="btn btn-primary" >Editar</button></td>
            </tr>';
        }
    ?>
  </tbody>
</table>