<?php
namespace App\Controllers; // Definimos el namespace del controlador

use App\Models\Vehiculo; // Importamos el modelo Vehiculo
use App\Models\Coche; // Importamos el modelo Coche
use App\Models\Moto; // Importamos el modelo Moto

class VehicleController {
    
    public function store($vehiculoData): ?Vehiculo {
        $vehiculos = $this->leerVehiculos(); // Cargamos vehiculos

        // Creamos el nuevo objeton según el tipo
        if ($vehiculoData['tipo'] === 'coche') {
            $nuevo = new Coche(
                $vehiculoData['id'],
                $vehiculoData['marca'],
                $vehiculoData['modelo'],
                $vehiculoData['anio'],
                $vehiculoData['tipo'],
                $vehiculoData['puertas']
            );
        } else if ($vehiculoData['tipo'] === 'moto') {
            $nuevo = new Moto(
                $vehiculoData['id'],
                $vehiculoData['marca'],
                $vehiculoData['modelo'],
                $vehiculoData['anio'],
                $vehiculoData['tipo'],
                $vehiculoData['sidecar']
            );
        } else {
            return null; // Si el tipo no es válido, devuelve null
        }

        $vehiculos[] = $nuevo; // Añadimos el nuevo vehículo al array  
        
        include __DIR__ . '/../Views/vehiculo_post.php'; // Incluimos la vista para mostrar el resultado

        return $nuevo; // Devolvemos el nuevo vehículo
    }

    public function getById($id): ?Vehiculo {
        $vehiculos = $this->leerVehiculos(); // Cargamos vehiculos

        // Recorremos el array de vehículos
        foreach($vehiculos as $vehiculo) {

            // Comprobamos si el id del vehículo es igual al id recibido
            if ($vehiculo->getId() === $id) {
                return $vehiculo;
            }
        }

        return null;
    }
    
    private function leerVehiculos() {
        require_once __DIR__ . '/../../config/vehiculos_bbdd.php'; // Cargamos la base de datos

        $datos = VEHICULOS; // Guardamos el array en una variable
        $vehiculos = []; // Creamos un array vacio para guardar los objetos

        // Recorremos el array
        foreach ($datos as $datoV) {
            // Distinguimos entre coche y moto
            if ($datoV['tipo'] === 'coche') {
                $vehiculos[] = new Coche(
                    $datoV['id'], 
                    $datoV['marca'], 
                    $datoV['modelo'], 
                    $datoV['anio'], 
                    $datoV['tipo'], 
                    $datoV['puertas']
                );
            } else if ($datoV['tipo'] === 'moto') {
                $vehiculos[] = new Moto(
                    $datoV['id'], 
                    $datoV['marca'], 
                    $datoV['modelo'], 
                    $datoV['anio'], 
                    $datoV['tipo'], 
                    $datoV['sidecar']
                );
            }
        }
        return $vehiculos;
    }
}