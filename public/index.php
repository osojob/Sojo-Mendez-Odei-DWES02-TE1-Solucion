<?php
declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php'; // Cargamos el autoload
use App\Controllers\VehicleController; // Importamos el controlador

function request(): void {
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

    $controlador = new VehicleController();
    
    // Creamos if/else para llamar a un método u otro
    if ($method === 'GET') {
        // Recogemos el id
        $id = $_GET['id'] ?? null;

        // Llamamos al método
        $resultado = $controlador->getById($id);
    } else if ($method === 'POST') {
        // Recogemos el JSON del formulario
        $json = $_POST['jsonPost'] ?? null;

        // Decodificamos
        $datos = json_decode($json, true);

        // Llamamos al método
        $resultado = $controlador->store($datos);
    }
}

request();