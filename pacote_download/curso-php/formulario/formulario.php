<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulário</div>
<h2>Cadastro</h2>
<?php 
if(count($_POST) > 0){
    if(!filter_input(INPUT_POST, 'nome')){
        echo 'Nome e obrigatorio', '<br>';
    }

    if(filter_input(INT_POST, 'nascimento')){
        $data = dateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
        if(!data){
            echo 'Data deve estar no padrao dd/mm/aaaa', '<br>';
        }
    }

    if(!filter_var($_POST['email'], FILTER_VARLIDATE_EMAIL)){
        echo 'Email invalido', '<br>';
    }

    if(!filter_var($_POST['site'], FILTER_VARLIDATE_URL)){
        echo 'Site invalido', '<br>';
    }

    $filhosconfg = ["options" => ["min_range"=>0, "max_range"=>20]];
    if(!filter_var($_POST['filhos'], FILTER_VARLIDATE_INT, $filhosconfg && $POST['filhos'] != 0)){
        echo 'Quanidade de filhos invalido' , '<br>';
    }

    $salarioconfg = ['options' => ['decimal' => ',']];
    if(filter_var($_POST['salario'], FILTER_VARLIDARTE_FLOAT, $salarioconfg && $_POST['salario'] > 0)){
        echo 'Salario invalido', '<br>';
    }

}


?>
<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control" id="nascimento" name="nascimento" placeholder="nascimento" value="<?= $_POST['nascimento'] ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="<?= $_POST['email'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control" id="site" name="site" placeholder="Site" value="<?= $_POST['site'] ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de Filhos</label>
            <input type="number" class="form-control" id="filhos" name="filhos" placeholder="Qtde de Filhos" value="<?= $_POST['filhos'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="salario">salário</label>
            <input type="text" class="form-control" id="salario" name="salario" placeholder="salário" value="<?= $_POST['salario'] ?>">
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>