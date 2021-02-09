<?php 
    require __DIR__.'/header.html';
    require __DIR__.'/class/Json.class.php';

    $json = new ReadJson();
    $json->setPerson($_GET['id']);
    
?>

<div class="row form-group mt-4">
    <div class="col-md-4">
        <label for="">Nome</label>
        <input type="text" class="form-control" value="<?=$json->getName();?>" />
    </div>

    <div class="col-md-4">
        <label for="">Cargo</label>
        <input type="text" class="form-control" value="<?=$json->getCargo();?>" />
    </div>

    <div class="col-md-4">
        <label for="">Sexo</label>
        <select name="" id="" class="form-control">
            <option value="Masculino" <?= $json->getSexo() == 'Masculino' ? ' selected ' : ''; ?> >Masculino</option>
            <option value="Feminino" <?= $json->getSexo() == 'Feminino' ? ' selected ' : ''; ?> >Feminino</option>
        </select>
    </div>
</div>

<div class="row form-group mt-4">
    <div class="col-md-1">
        <button type="button" class="btn btn-primary w-100">Salvar</button>
    </div>

    <div class="col-md-1">
        <a href="index.php">
            <button type="button" class="btn btn-light w-100">Cancelar</button>
        </a>
    </div>

</div>


<?php 
    require __DIR__.'/footer.html';
?>