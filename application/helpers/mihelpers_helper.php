<?php 
// Helper que ayuda a obtner la edad segun fecha
function CalculaEdad( $fecha ) {
    list($Y,$m,$d) = explode("-",$fecha);
    return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
}
function convierte_fecha($fecha_ingles){
    $nombredia = ucfirst(strftime("%a", $fecha_ingles));
    $dia = strftime("%d", $fecha_ingles);
    $mes = ucfirst(strftime("%b", $fecha_ingles));
    $year = strftime("%Y", $fecha_ingles);
    echo "$nombredia,  $dia de $mes de $year";
} 
?>