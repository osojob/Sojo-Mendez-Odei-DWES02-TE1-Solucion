<?php

namespace App\Models; // Definimos el namespace del modelo

// Creamos la clase Vehiculo, que las otras dos clases heredarán
class Vehiculo {
    // Atributos
    private int $id;
    private string $marca;
    private string $modelo;
    private int $anio;
    private string $tipo;

    // Constructor
    public function __construct(int $id, string $marca, string $modelo, int $anio, string $tipo) {
        $this->id = $id;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio;
        $this->tipo = $tipo;
    }

    // Metodos
        // Getters
        public function getId(): int {
            return $this->id;
        }

        public function getMarca(): string {
            return $this->marca;
        }

        public function getModelo(): string {
            return $this->modelo;
        }

        public function getAnio(): int {
            return $this->anio;
        }

        public function getTipo(): string {
            return $this->tipo;
        }

        // Setters
        public function setId(int $id): void {
            $this->id = $id;
        }

        public function setMarca(string $marca): void {
            $this->marca = $marca;
        }

        public function setModelo(string $modelo): void {
            $this->modelo = $modelo;
        }

        public function setAnio(int $anio): void {
            $this->anio = $anio;
        }

        public function setTipo(string $tipo): void {
            $this->tipo = $tipo;
        }
}