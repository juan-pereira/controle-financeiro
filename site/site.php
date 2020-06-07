<?php
    require("../php/session.php");
?>

<h1>Está logando.</h1>
<h3><?=$_SESSION['nome']?></h3>

<a href="../php/deslogar.php">Deslogar</a>