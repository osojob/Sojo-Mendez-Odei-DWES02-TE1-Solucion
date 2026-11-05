<?php

// Comprobamos si se ha encontrado o no los vehiculos, para mostrar los datos
if ((!isset($vehiculos) || empty($vehiculos))) {
    echo "<p>No hay vehículos.</p>";
} else {
    // Creamos una tabla para mostrar los datos de los vehiculos
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Marca</th>";
    echo "<th>Modelo</th>";
    echo "<th>Año</th>";
    echo "<th>Tipo</th>";
    echo "<th>Puertas</th>";
    echo "<th>Sidecar</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Dependiendo del tipo del vehiculo, mostramos los datos correspondientes
    foreach ($vehiculos as $v) {
        echo "<tr>";
        echo "<td>" . $v->getId() . "</td>";
        echo "<td>" . $v->getMarca() . "</td>";
        echo "<td>" . $v->getModelo() . "</td>";
        echo "<td>" . $v->getAnio() . "</td>";
        echo "<td>" . $v->getTipo() . "</td>";
        
        if ($v->getTipo() === 'coche') {
            echo "<td>" . $v->getPuertas() . "</td>";
            echo "<td>--</td>"; // Sin sidecar para el coche
        } else if ($v->getTipo() === 'moto') {
            echo "<td>--</td>"; // Sin puertas para la moto
            echo "<td>" . ($v->getSidecar() ? "Sí" : "No") . "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}