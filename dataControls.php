<?php 
    require __DIR__.'/class/Json.class.php';

    // Objeto da classe SetJson
    $json = new Json();

    // Recebe edição via POST e chama classe para alterar no arquivo JSON
    $json->setId($_POST['id']);
    $json->setName($_POST['name']);
    $json->setCargo($_POST['cargo']);
    $json->setSexo($_POST['sexo']);
    $json->atualizar();

    header("Location: index.php");
    die();

    



