<?php

session_start();
$var1=$_SESSION["test1"];
$var2=$_SESSION["test2"];
$var3=$_SESSION["test3"];
$var4=$_SESSION["test4"];

$acertou=0;

switch ($var1){

case "a":
$acertou++;

break;
}

switch ($var2){

case "b":
$acertou++;

break;
}

switch ($var3){

case "c":
$acertou++;

break;
}

switch ($var4){

case "d":
$acertou++;

break;

}

echo "SUAS RESPOSTAS:<br>";
echo "<h>Questão1:".$var1."<br>";
echo "<h>Questão2:".$var2."<br>";
echo "<h>Questão3:".$var3."<br>";
echo "<h>Questão4:".$var4."<br>";

echo "<br>*******GABARITO*******<br>";
echo "Questão 1 = a<br>";
echo "Questão 2 = b<br>";
echo "Questão 3 = c<br>";
echo "Questão 4 = d<br>";



echo"<h2><br>Você marcou ".$acertou." : pontos<h2>";
?>
<img src="pqq.gif" width="250" height="250" align="center"><br>
<br><a href=quest1.html><button><h4>Reiniciar questionário<h4></button></a>

<style>
body {
    background-color: #7FFFD4;
}
</style>




