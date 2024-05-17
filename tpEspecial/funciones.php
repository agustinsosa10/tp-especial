<?php 
    function letra_random($desde, $hasta) {
        $letraRandom = rand(ord($desde), ord($hasta));
        $letra = chr($letraRandom);
        return $letra;
    }

    function letraEnArreglo($ar_letras, $caracter) {

        foreach($ar_letras as $letra) {
            if($letra === $caracter) {
                return true;
            }
        }
        return false;
    }

    function contador($ar_letras, $caracter) {
        $contador = 0;
        foreach($ar_letras as $letras){
            if($letras === $caracter) {
                $contador = $contador + 1;
            }
        }
        return $contador;
    }

    $letras_contadas = [];

    function contar_letras(&$ar_letras){

        global $letras_contadas;
        
        foreach($ar_letras as $letra){
            if(array_key_exists($letra, $letras_contadas)){
               $letras_contadas[$letra]['cantidad']++;
            }
            else{
                $letras_contadas[$letra] = ['cantidad' => 1, 'porcentaje' => 0];
            }
        }
        
    }
    
    function porcentaje_de_letras() {
        global $letras_contadas;
    
        $total_letras = array_sum(array_column($letras_contadas, 'cantidad'));
    
        foreach ($letras_contadas as &$letra_info) {
            $porcentaje = ($letra_info['cantidad'] / $total_letras) * 100;
            $letra_info['porcentaje'] = $porcentaje;
        }
    }

?>