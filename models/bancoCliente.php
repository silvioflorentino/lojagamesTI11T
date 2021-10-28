<?php

function inserirCliente($conexao,$codigoUsuFk,$nomeCliente,$cpfCliente,$foneCliente,$dataNascCliente){
    $query="insert into tbclientes(codUsuFk,nomeCli,cpfCli,foneCli,datanasCli)values('{$codigoUsuFk}','{$nomeCliente}','{$cpfCliente}','{$foneCliente}','{$dataNascCliente}')";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudoClientes($conexao){
    
    $query = "Select * From tbclientes";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudoClienteCod($conexao,$codJogo){
    $query = "Select * from tbjogos where codJog={$codJogo}";
    $resultados = mysqli_query($conexao,$query);
    $resul= mysqli_fetch_array($resultados);
    return $resul;
}

function alterarJogos($conexao,$codJog, $nomeJog,$tamanhoJog,$precoJog,$requisitosJog,$consoleJog,$classificacaoJog,$avaliacaoJog){
var_dump($classificacaoJog);
    $query = "update tbjogos set 
    nomeJog = '{$nomeJog}', 
    tamanhoJog = '{$tamanhoJog}',
    precoJog = '{$precoJog}', 
    requisitosJog = '{$requisitosJog}', 
    consoleJog = '{$consoleJog}',
    classificacaoJog = '{$classificacaoJog}', 
    avaliacaoJog = '{$avaliacaoJog}' where codJog = '{$codJog}' ";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}

function deletarJogos($conexao,$codJog){
    $query = "delete from tbjogos where codJog = $codJog";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudoClienteNome($conexao, $nomeCliente){
    $query = "select * from tbclientes where nomeCli like '%{$nomeCliente}%'";
    $resultados = mysqli_query($conexao,$query);
  
    return $resultados; 
}










