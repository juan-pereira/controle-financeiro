<?php 

    //inclui sua conexao em php !
    require("conexao.php");

//Validação para testar se esta tentando acessar via url...
if(empty($_POST['usuario']) || empty($_POST['senha'])){

    header('Location: ../index.html');

    exit();

}else{

    session_start();

    //pega as variaveis da tela !
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


    $sql = "select * from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);

    if(mysqli_num_rows($result) == 1){

        $_SESSION['usuario'] = $usuario;
        $_SESSION['id'] = $row['id'];
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['sobrenome'] = $row['sobrenome'];
        //link da sua pagina

        mysqli_close($con);
        header('Location: ../site/site.php');
        exit();

    }else{
        session_destroy();
        header('Location: ../index.php?error=500');
        exit();
    }

}

?>