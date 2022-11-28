<?php

/* escribir la función validaContraseña($contraseña): true/false 
 * la contraseña tiene que tener:
 * - longitud mínima de 8
 * - Mayúsculas y Minúsculas
 * - números
 * - símbolos especiales
 */

// Funcion para saber si hay al menos una Mayusculas "holaJaime"
function tieneMayuscula($contraseña) {
    
// Recorro la contraseña
    for ($i = 0; $i < strlen($contraseña); $i++) {
        // Comporbamos la letra.
        $letra = $contraseña[$i];
        if (ctype_upper($letra)) {
            return true; // Ha encontrado una mayuscula.
        }
    }
    return false;
}

// Funcion para saber si hay al menos unaminusculas
function tieneMinuscula($contraseña) {
    
    for ($i = 0; $i < strlen($contraseña); $i++) {
        // Comporbamos la letra.
        $letra = $contraseña[$i];
        if (ctype_lower($letra)) {
            return true; // Ha encontrado una minuscula.
        }
    }
    return false;
}

// Funcion para saber si hay numeros.
function tieneNumero($contraseña) {
    
    for ($i = 0; $i < strlen($contraseña); $i++) {
        // Comporbamos la letra.
        $letra = $contraseña[$i];
        if (ctype_digit($letra)) {
            return true; // Ha encontrado un numero.
        }
    }
    return false;
}

// Funcion para saber si hay caracteres especiales.
function tieneEspecial($contraseña) {
    
    for ($i = 0; $i < strlen($contraseña); $i++) {
        // Comporbamos la letra.
        $letra = $contraseña[$i];
        if (!tieneMayuscula($letra) &
                !tieneMinuscula($letra) &
                !tieneNumero($letra)) {
            return true; // Ha encontrado un caracter especial.
        }
    }
    return false;
}

function validaContraseña($contraseña) {
// aquí iría el código
// Comprobamos la longitud
    return strlen($contraseña) >= 8 & //Validamos la longitud
            tieneMayuscula($contraseña) & //Tiene mayuscula
            tieneMinuscula($contraseña) & //Tiene minuscula
            tieneNumero($contraseña) & //Tiene numero
            tieneEspecial($contraseña); //Tiene caracter especial
}

$listaContraseñas = ['11111111111', 'Hola_comoEstas', "Mi#contraseña@2", "cocacolajaja", "Hola", "222", "4quw8tifhKASGJalkjfb"];

//Recorremos la $listaContraseñas y mostramos en pantalla si es buena o no

foreach ($listaContraseñas as $contraseña) {
    echo "la contraseña $contraseña es ";
    if (validaContraseña($contraseña)) {
        echo 'Buena';
    } else {
        echo 'Mala';
    }
    echo '<br>';
}