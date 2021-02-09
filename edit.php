<?php 
    require __DIR__.'/header.html';
    require __DIR__.'/class/Json.class.php';

    $json = new Json();
    $json->setPerson($_GET['id']);
    
?>

<form action="dataControls.php" method="post">
    <input type="hidden" name="id" value="<?=$_GET['id'];?>" />

    <div class="row form-group mt-4">
        <div class="col-md-4">
            <label for="">Nome</label>
            <input name="name" type="text" class="form-control" value="<?=$json->getName();?>" required />
        </div>

        <div class="col-md-4">
            <label for="">Cargo</label>
            <input name="cargo" type="text" class="form-control" value="<?=$json->getCargo();?>" required />
        </div>

        <div class="col-md-4">
            <label for="">Sexo</label>
            <select name="sexo" id="" class="form-control">
                <option value="Masculino" <?= $json->getSexo() == 'Masculino' ? ' selected ' : ''; ?> >Masculino</option>
                <option value="Feminino" <?= $json->getSexo() == 'Feminino' ? ' selected ' : ''; ?> >Feminino</option>
            </select>
        </div>
    </div>

    <div class="row form-group mt-4">
        <div class="col-md-1">
            <a href="#" onclick="">
                <button type="submit" class="btn btn-primary w-100">Salvar</button>
            </a>        
        </div>

        <div class="col-md-1">
            <a href="index.php">
                <button type="button" class="btn btn-light w-100">Cancelar</button>
            </a>
        </div>
    </div>
</form>

<?php 
    require __DIR__.'/footer.html';
?>