<?php 
        //Arquivo de conexao com a sua base de dados para se repetir apenas uma vez !
        $con = mysqli_connect("localhost", "root", "", "financeiro") or die("Sem conexão com o servidor.");