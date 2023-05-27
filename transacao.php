<?php

require_once('config.php');
require_once('vendor/autoload.php');

echo CONF_SECRETO . "<hr>";

$boleto = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRIPPED);

if (isset($boleto['gerarBoleto'])) {

    unset($boleto['gerarBoleto']);

    echo $boleto['nome'] . "<hr>"; 
    echo $boleto['email'] . "<hr>";
    echo $boleto['fone'] . "<hr>";
    echo $boleto['cpf'] . "<hr>";
    echo $boleto['produto'] . "<hr>";
    echo $boleto['valor'] . "<hr>";
    echo $boleto['vencimento'] . "<hr>";

}

?>