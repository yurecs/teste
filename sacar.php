<?php

require 'config.php';

/**
 * @author yurecs
 * @copyright 2014
 */

$valor = $_POST['saque'];

if(!empty($valor) && is_numeric($valor)){
    
    if(($valor > $saldo)){
        
        echo 'Esse valor excede o saldo dispon�vel!';
        
    }elseif($valor > ($saldo - $minimo)){
        
        echo '� preciso que seja deixada uma quatidade m�nima para que a conta n�o seja fechada!';
        
    }else{
        // Fun��o para retornar dinheiro sacado
    }
    
}else{
    
    echo 'Para sacar � preciso informar um valor num�rico maior que zero.';
    
}

?>