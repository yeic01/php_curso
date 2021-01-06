<?php 
    include_once('Operacion.php');
    include_once 'OperacionesBasicas.php';

    class Calcular implements Operacion, Operacion_basica{
        public function raizCuadrada(float $num):float{
            $total = sqrt($num);
            return $total;
        }

        public function potencia(int $num, int $potencia):int{
            $total = pow($num, $potencia);
            return $total;
        }

        public function op_basica(float $num1, float $num2, String $operacion){
            if($operacion == "+"){
                $result = $num1 + $num2;
            }else if($operacion == "-"){
                $result = $num1 - $num2;
            }else if($operacion == "*"){
                $result = $num1 * $num2;
            }else if($operacion == "/"){
                $result = $num1 / $num2;
            }else{
                $result = "operacion no valida";
            }

            return $result;

        }

    }

?>