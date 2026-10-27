<?php
require_once __DIR__ . "/../modelos/modelo_consulta.php";

class ControladorConsulta
{
    public function iniciar(): void
    {
        $modelo = new ModeloConsulta();
        $cursos = $modelo->obtenerCursos();
        $curId = filter_input(INPUT_GET, "curId", FILTER_VALIDATE_INT);

        if ($curId === false || $curId === null) {
            $curId = 0;
        }

        $estudiantes = [];
        if ($curId > 0) {
            $estudiantes = $modelo->buscarEstudiantesPorCurso($curId);
        }

        require __DIR__ . "/../vistas/vista_consulta.php";
    }
}
?>
