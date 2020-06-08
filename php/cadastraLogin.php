<?php

//Inclui a conexao com o banco de dados
require('conexao.php');

if(empty($_POST['nome']) || empty($_POST['sobrenome']) || empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: ../cadastro.html ');
    exit();
}else{

    session_start();

    //Variveis
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];


    $query = "insert into usuario values(null, '{$usuario}', '{$nome}', md5('{$senha}'))";

    if(mysqli_query($con, $query)){
        //Gravou então recupera usuario e id e loga no sistema

        $queryLogin = "select * from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

        $resultado = mysqli_query($con, $queryLogin);

        $row = mysqli_fetch_array($resultado);

        if(mysqli_num_rows($resultado) == 1){

            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['nome'] = $row['nome'];

            //Fecha a conexao com o banco
            mysqli_close($con);
            header('Location: ../site/site.php');            
            exit();
        }else{
            mysqli_close($con);
            header('Location: ../cadastro.html?error=error');
            exit();            
        }

    }else{
        //Não gravou 
        mysqli_close($con);
        header('Location: ../cadastro.html?error=error');
        exit();
    }

}