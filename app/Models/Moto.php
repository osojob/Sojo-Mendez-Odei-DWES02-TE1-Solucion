<?php
// Creamos la clase Moto
class Moto extends Vehiculo {
    // Atributos
    private bool $sidecar;

    // Constructor
    public function __construct(int $id, string $marca, string $modelo, int $anio, string $tipo, bool $sidecar) {
        parent::__construct($id, $marca, $modelo, $anio, $tipo);
        $this->sidecar = $sidecar;
    }

    // Metodos
        // Getters
        public function getSidecar(): bool {
            return $this->sidecar;
        }

        // Setters
        public function setSidecar(bool $sidecar): void {
            $this->sidecar = $sidecar;
        }
}