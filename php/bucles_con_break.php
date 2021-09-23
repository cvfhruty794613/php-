<?php
/* Primero defino las variables */

$aNombres= ["Maria","Juana","Miguel","Andres"];

/* Segundo defino el bucle */
/* Declaro inicio-condicion-paso */

for($i = 0; $i < count($aNombres);$i++){
    if($aNombres[$i]=="Miguel") {
    continue;

}
echo "$aNombres[$i]<br>";
/* imprime todo pero el if al ser miguel == miguel continue saltea y no lo imprime */

}
?>