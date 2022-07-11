<?php

class Exibir{

    public function __construct()
    {
        echo "instanciou a classe<br />";
    }

    public function exibirMensagem(array $parametros)
    {
        echo "entrou no método exibir mensagem<br />";
        var_dump($parametros);
    }
}