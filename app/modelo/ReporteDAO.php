<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modelo/Reporte.php';

class ReporteDAO {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function agregarReporte($reporte) {
        $nombre = $reporte->getNombre();
        $celular = $reporte->getCelular();
        $correo = $reporte->getCorreo();
        $animal = $reporte->getAnimal();
        $distrito = $reporte->getDistrito();
        $referencia = $reporte->getReferencia();
        $direccion = $reporte->getDireccion();
        $infoAdicional = $reporte->getInfoAdicional();
        $fotoAnimal = $reporte->getFotoAnimal();

        // Usar consultas preparadas para evitar inyección SQL
        $sql = "INSERT INTO reportes (nombre, celular, correo, animal, distrito, referencia, direccion, info_adicional, foto_animal) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);

        // Verificar si la consulta preparada se ejecutó correctamente
        if ($stmt) {
            // Asociar los parámetros y ejecutar la consulta
            $stmt->bind_param("sssssssss", $nombre, $celular, $correo, $animal, $distrito, $referencia, $direccion, $infoAdicional, $fotoAnimal);
            $stmt->execute();

            // Verificar si la inserción fue exitosa
            if ($stmt->affected_rows > 0) {
                return true; // Reporte agregado exitosamente
            } else {
                return false; // Error al agregar el reporte
            }

            // Cerrar la consulta preparada
            $stmt->close();
        } else {
            return false; // Error al preparar la consulta
        }
    }
}
