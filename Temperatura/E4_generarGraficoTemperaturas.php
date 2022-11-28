<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p><b>Graficos Temperaturas Mensuales</b></<p>
        <?php
        // <editor-fold defaultstate="collapsed" desc="Apartado A">
        // Creamos el array de 12 elementos con los nombres de los
        // meses, como clave y la temperatura media máxima de cada mes, como valor

        $temperaturas = array("Enero" => '12', "Febrero" => '13', "Marzo" => '17', "Abril" => '19',
            "Mayo" => '25', "Junio" => '31', "Julio" => '34', "Agosto" => '34', "Septiembre" => '28',
            "Octubre" => '23', "Noviembre" => '16', "Diciembre" => '13');
        
        //var_dump($temperaturas);
// </editor-fold>
        // <editor-fold defaultstate="collapsed" desc="Apartado B">
        // Generar un gráfico como se muestra a continuación, para el cuadrito se usa la imagen barraTemp.png
        echo "<br>";
        echo "<div style='font-family: monospace; font-size: 20px'>";
        // Generamos un foreach para mostrar el array en forma de lista.
        foreach ($temperaturas as $mes=>$temp){
            // Aqui empieza la linea.
            echo "$mes --------> ";
            // Creamos un bucle for para que vaya generando unos rectangulos y vayan formando la grafica.
            for($imagen=0;$imagen<=($temp);$imagen++){
                echo "<img src = 'barraTemp.png' style='border: 1px solid black'/>";
            }
            // Aqui termina la linea.
            echo " $temp.ºC<br>";
        }    
// </editor-fold>
        ?>
    </body>
</html>
