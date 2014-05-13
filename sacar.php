<?php

require 'config.php';

/**
 * @author yurecs
 * @copyright 2014
 */

$valor = $_POST['saque'];

if(!empty($valor)){
    
    if(($valor > $saldo)){
        echo 'Esse valor excede o saldo disponível!';
    }elseif($valor > ($saldo - $minimo)){
        echo 'É preciso que seja deixada uma quatidade mínima para que a conta não seja fechada!';
    }else{
        // Código de saque
    }
    
}else{
    
    echo 'Para sacar é preciso informar um valor maior que zero.';
    
}

?>