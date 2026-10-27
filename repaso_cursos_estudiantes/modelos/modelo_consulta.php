<?php
require_once __DIR__ . "/conexion_repaso.php";

class ModeloConsulta
{
    private mysqli $conexion;

    public function __construct()
    {
        $this->conexion = abrirConexionRepaso();
    }

    public function obtenerCursos(): array
    {
        $sql = "SELECT curId, curNombre FROM cursos ORDER BY curId";
        $resultado = $this->conexion->query($sql);

        if (!$resultado) {
            die("Error al consultar cursos: " . $this->conexion->error);
        }

        $cursos = [];
        while ($fila = $resultado->fetch_assoc()) {
            $cursos[] = $fila;
        }

        return $cursos;
    }

    public function buscarEstudiantesPorCurso(int $curId): array
    {
        $sql = "SELECT e.cedula, e.nombre, e.apellido, c.curNombre, c.curDescripcion
                FROM cursos AS c
                INNER JOIN estudiantes AS e ON e.cedula = c.cedula
                WHERE c.curId = ?
                ORDER BY e.apellido, e.nombre";

        $stmt = $this->conexion->prepare($sql);

        if (!$stmt) {
            die("Error al preparar la consulta: " . $this->conexion->error);
        }

        $stmt->bind_param("i", $curId);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $estudiantes = [];

        while ($fila = $resultado->fetch_assoc()) {
            $estudiantes[] = $fila;
        }

        $stmt->close();
        return $estudiantes;
    }
}
?>
