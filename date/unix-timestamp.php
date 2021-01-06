
<?php
$fechaUno = "2020-11-14";
$fechaDos = "2020-12-15";

var_dump (list($anio1, $mes1, $dia1) = explode( '-', $fechaUno )) ;
list($anio2, $mes2, $dia2) = explode( '-', $fechaDos ) ;

var_dump ($fecha1 = mktime(0,0,0,$mes1,$dia1,$anio1));
var_dump ($fecha2 = mktime(0,0,0,$mes2,$dia2,$anio2));

$diff = round (($fecha2 - fecha1) / 86400);

echo $diff;


echo "-----------------------------<br>";

$dia1 = "2020-11-14 0:0:0";
        $dia1 = strtotime($dia1);
        $dia2 = "2020-11-15 0:0:0";
        $dia2 = strtotime($dia2);

      $dife = round(($dia2 - $dia1) / 86400);

      echo $dife;


?>
