<?php

function numb_random(){

    return rand(0, 100);
}



function compraNumero($numServidor, $numUser){
    if ($numUser <$numServidor){

        return array('cod'=>-1, 'msg'=>'o numero adivinhado é inferior');

    }elseif ($numUser>$numServidor){

        return array('cod'=>1, 'msg'=>'o numero adivinhado é superior');

    }else{

        return array('cod'=>0, 'msg'=>'Parabens!!! Sevidor =>'.$numServidor);
    }


}



?>