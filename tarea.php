<?php

# Declaracion de 5 variables

$nombre = "Juan";
$edad = 25;
$altura = 1.75;
$ciudad = "Quito";
$casado = false;
$datos = array($nombre, $edad, $altura, $ciudad, $casado);

# Operaciones con las variables

$edad = $edad + 5;
echo "Edad: $edad <br>";

$altura = $altura * 2;
echo "Altura: $altura <br>";

# Manipulacion de cadenas

$profesion = "Ingeniero";

echo "El nombre del usuario es " . $nombre . " y su profesion es " . $profesion . "<br>";

echo "La longitud de la cadena es: " . strlen($profesion) . "<br>";

# Uso de condicionales

if ($casado) {
    echo "El usuario esta casado <br>";
} else {
    echo "El usuario no esta casado <br>";
}

# Creacion de un array

$datos = array($nombre, $edad, $altura, $ciudad, $casado);

echo "La ciudad donde reside el usuario es: " . $datos[3] . "<br>";



