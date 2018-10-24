<?php 

session_start();
$var2 = $_GET["questao2"];


$_SESSION["test2"]=$var2;

//echo "<h1>Resposta salva!!!<h1>";

?>
<html>
<head>
<meta charset="UTF-8"/>
<title>Questões</title>
<style>
body {
    background-color: #FFFF00 ;
}
</style>
</head>
<body>
<form method = "GET" action="cuki3.php" >
<h2>3)Qual das personagens abaixo come feito uma condenada:<h2>
<p>
<label>
<input type="radio" name="questao3" value="a" /> A) Magali;</label>
<br />
<label>
<input type="radio" name="questao3" value="b" /> B) Saori;</label>
<br />
<label>
<input type="radio" name="questao3" value="c" /> C) Aline;</label>
<br />
<label>
<input type="radio" name="questao3" value="d" /> D) Murta que geme;</label>
<br />
<br />
<input type="submit" value="Enviar" />
</form>

</body>
</html>

