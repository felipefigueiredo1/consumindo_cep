<?php
    include_once('viacep.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Consumindo API de CEP</title>
</head>
<body>

<div class="container">
    <h1 align="center">VIACEP</h1>
    <form action="." method="post">
        <div class="form-group">
            <label for="CEP">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o CEP" maxlength="9" value="<?= $dados['cep'] ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="btn-primary" style="margin: 10px; padding: 5px;">
        </div>
        <div class="form-group">
            <label for="rua">Rua</label>
            <input type="text" class="form-control" id="rua" name="rua" value="<?= $dados['logradouro'] ?>">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" value="<?= $dados['bairro'] ?>">
        </div>
        <div class="form-group">
            <label for="localidade">Cidade</label>
            <input type="text" class="form-control" id="localidade" name="localidade" value="<?= $dados['localidade'] ?>">
        </div>
        <div class="form-group">
            <label for="uf">UF</label>
            <input type="text" class="form-control" id="uf" name="uf" value="<?= $dados['uf'] ?>">
        </div>
    </form>
</div>

</body>
</html>