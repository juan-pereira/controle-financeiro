<?php

//Inclui a conexao com o banco de dados
require('conexao.php');

    session_start();

    //Variveis
    $mes = $_GET['valorMes'];
    $salario = $_GET['valorSalario'];
    $fixo = $_GET['valorFixo'];
    $temporario = $_GET['valorTemporario'];
    $id = $_SESSION['id'];
    
    
    $sql = "select * from parcelas where idusu = {$id} and mes = '{$mes}'";

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);

    if(mysqli_num_rows($result) == 1){

        $queryGrava = "update parcelas set salario = {$salario}, gastoFixo = {$fixo}, gastoTemporario = {$temporario} where idusu = {$id} and mes = '{$mes}'";

        mysqli_query($con, $queryGrava);
    
        mysqli_close($con);        
        exit();

    }else{

        $queryGrava = "insert into parcelas values(null, '{$mes}', {$salario}, {$fixo}, {$temporario}, {$id})";

        mysqli_query($con, $queryGrava);
    
        mysqli_close($con);        
        exit();

    }


