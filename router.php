<?php

require_once("Exibir.php");

$caminho = str_replace("/router/index.php/", "", $_SERVER["REQUEST_URI"]);

$vetor = explode("/", $caminho);
$classe = $vetor[0];
$vetor2 = explode("?", $vetor[1]);
$metodo = $vetor2[0];
$instancia = new $classe();

$instancia->$metodo($_REQUEST);
