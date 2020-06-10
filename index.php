<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login</title>

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    

</head>
<body style="margin-top: -130px;" class="container">

       <div class="row centralizar">

            <div class="col-10 ml-5 offset-2">

                <div class="card">
                    <div class="row card-body">

                       <div class="col-md-3 border-right">
                            <img style="margin-top: 60px;" src="controlefinanceiro.png" alt="Virtualização de Desktop" title="Virtualização de Desktop">
                       </div>

                       <div class="col-md-9">

                            <h3 class="text-center pb-2 border-bottom">Login</h3>

                            <div class="col-12 mt-5">

                                <form action="php/login.php" method="post" name="login" autocomplete="on">                                    
                                    <div class="row">
                                        <div class="col-6 offset-3 input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">@</div>
                                            </div>
                                            <input type="text" class="form-control" id="usuario" name="usuario" maxlength="30" placeholder="Usuário" required="required">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 offset-3 input-group mt-4">
                                            <input type="password" class="form-control" id="senha" name="senha" maxlength="30" placeholder="Senha" required="required">                                       
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 offset-3 mt-4">
                                            <input type="submit" class="btn btn-outline-primary col-12" value="Logar">
                                        </div>
                                    </div>                                
                                </form>

                                <div class="row">
                                    <div class="col-6 offset-3 mt-4">
                                        <p> Ainda não é cadastrado ? <a href="cadastro.php">Clique aqui</a></p>
                                    </div>
                                </div>

                                
                                    <?php                                 
            
                                        if(!empty($_GET['error'])){

                                            echo "<div class='row'>";
                                            echo     "<div class='col-6 offset-3 mt-4 '>";
                                            echo        "<p class='text-center alert alert-danger'>Usuario ou Senha incorreto !</p>";
                                            echo   "</div>";
                                            echo "</div>";                                           
                                        }
                                    
                                    ?>
                                
                                

                            </div>
                       </div>
                    </div>
                </div>
            </div>
       </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>   

</body>

</html>
