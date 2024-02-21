<?php
    $v=11;
    
    function factorial($v) {
        $f=1;
        for ($i=1;$i<=$v;$i++){
        
            $f = $f*$i;
        };
        return $f;
    };
    
    $resultado = factorial($v);
    echo "El factorial de $v es $resultado";