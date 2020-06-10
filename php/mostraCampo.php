<?php

require("session.php");
require("conexao.php");

$valorMes = $_GET['valorMes'];

$sql = "select p.salario as salario, p.gastoFixo as fixo, p.gastoTemporario as temporario from parcelas p, usuario u where p.idusu = u.id and u.id = {$_SESSION['id']} and p.mes = {$valorMes}";

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);

    if(mysqli_num_rows($result) == 1){

        echo json_encode(array("salario" => $row['salario'], "gastoFixo" => $row['fixo'],
         "gastoTemporario" => $row['temporario']));
                
        mysqli_close($con);
        exit();
    }else{

        echo json_encode(array("salario" => "", "gastoFixo" => "", "gastoTemporario" => ""));

        mysqli_close($con);
        exit();
    }