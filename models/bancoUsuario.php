<?php

function inserirUsuario($conexao,$email,$senha,$pin){

    $option = ['cost' => 8];
    $senhacryto =  password_hash($senha, PASSWORD_BCRYPT,$option);
   

    $query="insert into tbusuarios(emailUsu, senhaUsu,pinUsu)values('{$email}','{$senhacryto}','{$pin}')";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudoUsuario($conexao){
    
    $query = "Select * From tbusuarios";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudoUsuarioCod($conexao,$codUsuario){
    $query = "Select * from tbusuarios where codUsu={$codUsuario}";
    $resultados = mysqli_query($conexao,$query);
    $resul= mysqli_fetch_array($resultados);
    return $resul;
}

function alterarUsuario($conexao,$codUsuario, $emailUsuario,$senhaUsuario,$pinUsuario){
    $option = ['cost' => 8];
    $senhacryto =  password_hash($senhaUsuario, PASSWORD_BCRYPT,$option);
    
    $query = "update tbusuarios set 
    emailUsu = '{$emailUsuario}', 
    senhaUsu = '{$senhacryto}',
    pinUsu = '{$pinUsuario}'
    where codUsu = '{$codUsuario}' ";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}

function deletarUsuario($conexao,$codUsuario){
    $query = "delete from tbUsuarios where codUsu = $codUsuario";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}










