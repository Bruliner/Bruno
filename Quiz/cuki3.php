<?php 

session_start();
$var3 = $_GET["questao3"];



$_SESSION["test3"]=$var3;


//echo "<h1>Resposta salva!!!<h1>";

?>
<html>
<head>
<meta charset="UTF-8"/>
<title>Questões</title>
<style>
body {
    background-color: #FF3E96;
}
</style>
</head>
<body>
<form method = "GET" action = "cuki4.php">
<h2>4)Considerando que Wesley safadão é 99% anjo, perfeito, quantos porcentos ele é vagabundo:<h2>
<p>
<label>
<input type="radio" name="questao4" value="a" /> A) 0.1%;</label>
<br />
<label>
<input type="radio" name="questao4" value="b" /> B) 100%;</label>
<br />
<label>
<input type="radio" name="questao4" value="c" /> C) Ele não é vagabundo;</label>
<br />
<label>
<input type="radio" name="questao4" value="d" /> D) 1%;</label>
<br />
<br />
<input type="submit" value="Enviar" />
</form>

</body>
</html>