<?php 
session_start();
$var4= $_GET["questao4"];


$_SESSION["test4"]=$var4;


echo "<h2>Questionário finalizado.<h2><br>";

?>
<br><a href = "Exibir3.php"><h5>Ver Respostas<h5></a>
<style>
body {
    background-color: #7FFFD4;
}
</style>