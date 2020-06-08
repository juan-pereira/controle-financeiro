<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cadastro</title>

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    

</head>
<body style="margin-top: -130px;" class="container">

       <div class="row centralizar">

            <div class="col-10 ml-5 offset-2">

                <div class="card">
                    <div class="row card-body">

                       <div class="col-md-3 border-right">
                            <a href="index.php" class="logo"><img style="margin-top: 30px;" src="controlefinanceiro.png" alt="Virtualização de Desktop" title="Virtualização de Desktop"></a>
                       </div>

                       <div class="col-md-9">

                            <h3 class="text-center pb-2 border-bottom">Cadastro</h3>

                            <div class="col-12 mt-5">

                                <form action="php/cadastraLogin.php" method="post" name="cadastro" autocomplete="on">                                    
                                    <div class="form-row">
                                        <div class="col">
                                            <input type="text" class="form-control" name="nome" placeholder="Nome" required="required">
                                        </div>
                                    </div>
                                    
                                    <div class="form-row mt-4">
                                        <div class="col">
                                          <select name="sexo" class="form-control">
                                            <option selected> Sexo </option>  
                                            <option value="M"> Masculino </option>
                                            <option value="F"> Feminino </option>
                                            <option value="O"> Outro </option>
                                          </select>
                                        </div>
                                        
                                        <div class="col">
                                            <input type="number" class="form-control" name="idade" placeholder="Idade" required="required">
                                        </div>
                                    </div>   
                                    <div class="form-row mt-4">                                 
                                        <div class="col-6 input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">@</div>
                                            </div>
                                            <input type="text" class="form-control" id="usuario" name="usuario" maxlength="30" placeholder="Usuário" required="required">
                                        </div>
                                        <div class="col-6">                                      
                                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="required">                              
                                        </div>  
                                    </div>
                                    <div class="row">
                                        <div class="col-6 offset-3 mt-4">
                                            <input type="submit" class="btn btn-outline-primary col-12" value="Cadastrar">
                                        </div>
                                    </div>                                
                                </form>                              
                            </div>
                       </div>
                    </div>
                </div>
            </div>
       </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>

</body>

</html>