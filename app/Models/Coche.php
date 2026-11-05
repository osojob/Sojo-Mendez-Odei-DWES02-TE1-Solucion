<?php

namespace App\Models; // Definimos el namespace del modelo

// Creamos la clase Coche
class Coche extends Vehiculo {
    // Atributos
    private int $puertas;

    // Constructor
    public function __construct(int $id, string $marca, string $modelo, int $anio, string $tipo, int $puertas) {
        parent::__construct($id, $marca, $modelo, $anio, $tipo);
        $this->puertas = $puertas;
    }

    // Metodos
        // Getters
        public function getPuertas(): int {
            return $this->puertas;
        }

        // Setters
        public function setPuertas(int $puertas): void {
            $this->puertas = $puertas;
        }
}