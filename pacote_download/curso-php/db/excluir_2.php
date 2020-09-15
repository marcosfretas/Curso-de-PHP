<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Excluir 002</div>

<?php
require_once "conexao.php";

$registros = [];
$conexao = novaConexao();
// excluir
if($_GET['excluir']){
    $excluirsql = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirsql);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();

}

$sql = "SELECT id, nome, nascimento, email FROM cadastro";
$resultado = $conexao->query($sql);
if($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif($conexao->error) {
    echo "Erro: " . $conexao->error;   
}

$conexao->close;
?>
<table class="table table-hover table-striped">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro) : ?>   
            <tr>
                <td> <?= $registro['id'] ?> </td>
                <td> <?= $registro['nome'] ?> </td>
                <td> <?= $registro['email'] ?> </td>
                <td> <?= date('d/m/Y', strtotime($registro['nascimento'])) ?> </td>
                <td>
                    <a href="http://localhost:81/exercicio.php?dir=db&file=excluir_2&excluir=<?= $registro['id']?>" class="btn-danger">Excluir</a>
                </td>
            </tr>

        <?php endforeach ?>        
    </tbody>
</table>
<style>
    table > * {
        font-size: 1.2rem;
    }
</style>