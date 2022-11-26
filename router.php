<?php

$pasta = $_SERVER["DOCUMENT_ROOT"] . "/boletimDeNoticias/";
require_once($pasta . "php/model/Banco_class.php");

$caminho = $_SERVER["REQUEST_URI"];

$vetor = explode("/", $caminho);
$classe = $vetor[0];
$vetor2 = explode("?", $vetor[1]);
$metodo = $vetor[2];

$instancia = new Banco();

var_dump($instancia->$metodo());