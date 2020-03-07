<?php 
    
    include('funciones.php');

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

    //arreglo muntidimensional (arreglo de arreglos)
    $usuarios=array(
        'usuario1'=>array('nombre'=>"Juan",'edad'=>30,'sexo'=>"M"),
        'usuario2'=>array('nombre'=>"Maria",'edad'=>25,'sexo'=>"F"),
        'usuario3'=>array('nombre'=>"James",'edad'=>28,'sexo'=>"M"),
        'usuario4'=>array('nombre'=>"Sandra",'edad'=>32,'sexo'=>"F")
    );

    echo("<br>");
    print_r($usuarios);

    echo("<br>........................................................................");

    //ciclo foreach para acceder a los elementos del arreglo multidimensional
    echo("<br>");
    foreach($usuarios as $clavesArreglosUnidimensionales=>$arreglosUnidimensionales)
    {
       echo($clavesArreglosUnidimensionales);
       echo("<br>");
       print_r($arreglosUnidimensionales);
       echo("<br>");

            foreach($arreglosUnidimensionales as $claves=>$valores)
            {
                echo($claves). ": ";
                echo($valores);
                echo("<br>");
            };

    };
    echo("<br>........................................................................");

    //calcula la edad de dos personas
    echo("<br>");
    calcularEdad(1995);
    echo("<br>........................................................................");

    echo("<br>");
    calcularEdad2(1995,2020);
    echo("<br>........................................................................");

    echo("<br>");
    $edad3=calcularEdad3(1990,2020);
    echo("La edad de la persona es: ".$edad3);
    echo("<br>........................................................................");

    //arreglo que se llena con una funcion 
    echo("<br>");
    $edades=array('edad1'=>calcularEdad3(1990,2020),'edad2'=>calcularEdad3(1991,2020));
    print_r($edades);
    echo("<br>........................................................................");

?>