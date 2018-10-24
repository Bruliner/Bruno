<?php 

session_start();

$var1 = $_GET["questao1"];

$_SESSION["test1"] = $var1;


//echo "<h1>Resposta salva!!!<h1><br>";
?>
<html>
<head>
<meta charset="UTF-8"/>
<title>Questões</title>
<style>
body {
    background-color: #C0FF3E;
}
</style>
</head>
<body>
<form method = "GET" action="cuki2.php">
<h2>2)Quanto é mil meu com mil teu:<h2>
<p>
<label>
<input type="radio" name="questao2" value="a" /> A) 1002;</label>
<br />
<label>
<input type="radio" name="questao2" value="b" /> B) 2 mil;</label>
<br />
<label>
<input type="radio" name="questao2" value="c" /> C) 1/2;</label>
<br />
<label>
<input type="radio" name="questao2" value="d" /> D) bauru;</label>
<br />
<br />
<input type="submit" value="Enviar" />
</form>

</body>
</html>




