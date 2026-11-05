<?php

// Comprobamos si se ha encontrado o no el vehículo, para mostrar los datos
if ($vehiculo === null) {
    echo "<p>No se ha encontrado un vehículo con ese ID.</p>";
} else {
    // Si se encuentran, mostramos los datos con los getters
    echo "ID: " . $vehiculo->getId() . "<br>";
    echo "Marca: " . $vehiculo->getMarca() . "<br>";
    echo "Modelo: " . $vehiculo->getModelo() . "<br>";
    echo "Año: " . $vehiculo->getAnio() . "<br>";
    echo "Tipo: " . $vehiculo->getTipo() . "<br>";

    // Dependiendo del tipo de vehiculo
    if ($vehiculo->getTipo() === 'coche') {
        echo "Puertas: " . $vehiculo->getPuertas() . "<br>";  
    } else if ($vehiculo->getTipo() === 'moto'){
        echo "Sidecar: " . ($vehiculo->getSidecar() ? "Sí" : "No") . "<br>";
    }
}