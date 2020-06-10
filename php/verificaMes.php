<?php

require("session.php");
require("conexao.php");

$valorMes = $_GET['valorMes'];

$sql = "select * from parcelas p, usuario u where p.idusu = u.id and u.id = {$_SESSION['id']} and p.mes = {$valorMes}";

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);

    if(mysqli_num_rows($result) == 1){
        echo true;
        mysqli_close($con);
        exit();
    }else{
        echo false;
        exit();
    }