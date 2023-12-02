<?php
require_once __DIR__ . '/../config/database.php';

class admin { 
    private $conn;

    // Constructor para asignar la conexión a la propiedad $conn
    public function __construct($conn) {
        $this->conn = $conn;
    }

    // CRUD
    public function usuarios(){
        // Ejecuta las sentencias SQL para obtener datos (reemplaza con tus propias consultas)
        $sqlTotalUsuarios = "SELECT COUNT(*) as total FROM usuario";
        $sqlPeluditosAdopcion = "SELECT COUNT(*) as total FROM adopcion WHERE estado = 'adoptado'";
        $sqlPeluditosReportados = "SELECT COUNT(*) as total FROM reporte ";

        $resultTotalUsuarios = $this->conn->query($sqlTotalUsuarios);
        $resultPeluditosAdopcion = $this->conn->query($sqlPeluditosAdopcion);
        $resultPeluditosReportados = $this->conn->query($sqlPeluditosReportados);

        // Maneja los resultados y cierra las conexiones
        $totalUsuarios = ($resultTotalUsuarios) ? $resultTotalUsuarios->fetch_assoc()['total'] : 0;
        $peluditosAdopcion = ($resultPeluditosAdopcion) ? $resultPeluditosAdopcion->fetch_assoc()['total'] : 0;
        $peluditosReportados = ($resultPeluditosReportados) ? $resultPeluditosReportados->fetch_assoc()['total'] : 0;

        // Cierra las conexiones
        $resultTotalUsuarios->close();
        $resultPeluditosAdopcion->close();
        $resultPeluditosReportados->close();

        // Por ejemplo, podrías devolver los resultados como un array asociativo
        return [
            'totalUsuarios' => $totalUsuarios,
            'peluditosAdopcion' => $peluditosAdopcion,
            'peluditosReportados' => $peluditosReportados,
        ];
    }
}
?>
