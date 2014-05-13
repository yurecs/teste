<?php

require 'config.php';

/**
 * @author yurecs
 * @copyright 2014
 */

$valor = $_POST['saque'];

if(!empty($valor)){
    
    if(($valor > $saldo)){
        
        echo 'Esse valor excede o saldo disponнvel!';
        
    }elseif($valor > ($saldo - $minimo)){
        
        echo 'Й preciso que seja deixada uma quatidade mнnima para que a conta nгo seja fechada!';
        
    }else{
        // Funзгo para retornar dinheiro sacado
    }
    
}else{
    
    echo 'Para sacar й preciso informar um valor maior que zero.';
    
}

?>