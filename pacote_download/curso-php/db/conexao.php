<?php

function novaConexao($banco = 'curso_php'){
    $servidor = '127.0.0.1:3306';
    $usuario = 'root';
    $senha = 'root';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if( $conexao->connect_erro){
        die('Erro: ' . $conexao->connect_erro);
    }

    return $conexao;
}