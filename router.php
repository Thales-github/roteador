<?php

require_once("Exibir.php");
//var_dump($_REQUEST);
//var_dump($_SERVER["REQUEST_METHOD"]);
//var_dump($_SERVER["REQUEST_URI"],"\n");
//echo "<br />";
$caminho = str_replace("/router/index.php/", "", $_SERVER["REQUEST_URI"]);

//var_dump($caminho);
//echo "<br />";
$vetor = explode("/", $caminho);
$classe = $vetor[0];
$vetor2 = explode("?",$vetor[1]);
$metodo = $vetor2[0];
//echo $metodo;
$instancia = new $classe();

//var_dump($instancia);
$instancia->$metodo($_REQUEST);

//var_dump($_GET);