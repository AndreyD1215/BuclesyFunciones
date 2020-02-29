<?php 
    
    echo("clase 4 arreglos, arreglos y funciones");
    //array indexado
    $arreglo=array("Juan","Maria","James","Sandra");
    echo("<br>");
    print_r($arreglo);
    echo("<br>........................");

    //array asociativo
    $arreglo=array('usuario1'=>"Juan",'usuario2'=>"Maria",'usuario3'=>"James",'usuario4'=>"Sandra");
    echo("<br>");
    print_r($arreglo);
    echo("<br>........................................................................");

    //tamaño dea arreglo
    $tamano=count($arreglo);
    echo("<br>");
    echo $tamano;
    echo("<br>");
    print("El tamaño de nuestro arreglo es: ".$tamano);
    echo("<br>........................................................................");

    //blucles for
    for($centinela=0;$centinela<=10;$centinela++)
    {
        echo("<br> El valor de centinela es: ".$centinela."<br>");
    }
    echo("<br>........................................................................");

    //blucle for para recorrer arreglos
    $arreglo=array("Juan","Maria","James","Sandra");
    for($centinela=0;$centinela<count($arreglo);$centinela++)
    {
        echo("<br>".$arreglo[$centinela]."<br>");
    }
    echo("<br>........................................................................");

    //bucle foreach para recorrer arreglos
    $arreglo=array('usuario1'=>"Juan",'usuario2'=>"Maria",'usuario3'=>"James",'usuario4'=>"Sandra");
    foreach($arreglo as $clave=>$valor)
    {
        echo "<br>"."La clave es: ".$clave."<br>";
        echo "<br>".($valor)."<br>";
        
    }
    echo("<br>........................................................................");

    //bucle foreach para arreglo indexado
    $arreglo=array("Juan","Maria","James","Sandra");
    foreach($arreglo as $clave=>$valor)
    {
        echo "<br>"."La clave del cajon es: ".$clave."<br>";
        echo "<br>"."El valor del cajon es: ".$valor."<br>";
    }
    echo("<br>........................................................................");

?>