<html>
    <head>
        <link href="estiloJornada.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
        <?php
// Generamos el array con los 20 equipos.
        $equipos = ["Real Madrid", "Real Betis", "Real Sociedad", "Villarreal", "FC Barcelona", "Sevilla",
            "Getafe", "Valencia", "Cádiz", "Granada", "Osasuna", "Atlético de Madrid", "Celta de Vigo",
            "Eibar", "Huesca", "Elche", "Alavés", "Levante", "Athletic Club", "Real Valladolid"];
// <editor-fold defaultstate="collapsed" desc="Apartado A">
// Generar dos arrays al azar de 10 elementos cada uno, $locales y $visitantes,
// con los nombres de los equipos para hacer los emparejamientos de una jornada.
// El código:
// Barajamos el array $equipos.
        shuffle($equipos);
// 
        $locales = array_slice($equipos, 0, 10);
//
        $visitantes = array_slice($equipos, 10);

        echo '--------------APARTADO A) -------------';
        echo "<h5> LOCALES </h5> ";
        var_dump($locales);
        echo "<h5> VISITANTES </h5> ";
        var_dump($visitantes);
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Apartado B">
// Generar dos arrays al azar de 10 elementos cada uno, $golesLocales y
// $golesVisitantes, de 0 a 6 goles.
// El código:
// Generamos los goles de forma aleatoria para todos los equipos.
        for ($goles = 0; $goles <= 10; $goles++) {
            $golesLocales[] = rand(0, 6);
            $golesVisitantes[] = rand(0, 6);
        }

        echo '<br><br>--------------APARTADO B) -------------';
        echo "<h5> GOLES LOCALES </h5> ";
        var_dump($golesLocales);
        echo "<h5> GOLES VISITANTES </h5> ";
        var_dump($golesVisitantes);
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Apartado C">
// Mostrar en pantalla los resultados de la jornada generada
// Podéis hacerlo como queráis, pero debe quedar algo como:
        echo "<br>";
        echo "<br>";
        // Creamos la tabla
        $tabla = "<table><caption>RESULTADOS DE LA JORNADA</caption>";
        $tabla .= "<tr>";
        $tabla .= "<th>LOCALES</th><th class='resultado1'></th><th>VISITANTE</th>";
        $tabla .= "</tr>";
        $tabla .= "<tr>";
        // Generamos cada uno de los partidos de la jornada.
        for ($partido = 0; $partido < 10; $partido++) {
            $tabla .= "<tr><td class=local>$locales[$partido]</td>"
                    . "<td class=resultado2>$golesLocales[$partido]-$golesVisitantes[$partido]</td>"
                    . "<td class=visitante>$visitantes[$partido]</td></tr>";
        }
        $tabla .= "</table>";
        // Mostramos el resultado.
        echo $tabla;
// </editor-fold>
        ?>
    </body>
</html>