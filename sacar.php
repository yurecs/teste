<?php

require 'config.php';

/**
 * @author yurecs
 * @copyright 2014
 */

$valor = $_POST['saque'];

if(!empty($valor)){
    
    if(($valor > $saldo)){
        echo 'Esse valor excede o saldo dispon�vel!';
    }elseif($valor > ($saldo - $minimo)){
        echo '� preciso que seja deixada uma quatidade m�nima para que a conta n�o seja fechada!';
    }else{
        // C�digo de saque
    }
    
}else{
    
    echo 'Para sacar � preciso informar um valor maior que zero.';
    
}

?>