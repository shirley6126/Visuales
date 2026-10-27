<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta de estudiantes por curso</title>
</head>
<body>
    <h1>Consulta de estudiantes por curso</h1>

    <form action="repaso_inicio.php" method="get">
        <label for="curId">Seleccione un curso:</label>
        <select id="curId" name="curId" required>
            <option value="">Seleccione...</option>
            <?php foreach ($cursos as $curso): ?>
                <option value="<?= htmlspecialchars((string) $curso["curId"], ENT_QUOTES, "UTF-8") ?>"
                    <?= (int) $curso["curId"] === (int) $curId ? "selected" : "" ?>>
                    <?= htmlspecialchars($curso["curNombre"], ENT_QUOTES, "UTF-8") ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Buscar</button>
    </form>

    <?php if ($curId > 0): ?>
        <h2>Estudiantes del curso seleccionado</h2>

        <?php if (count($estudiantes) > 0): ?>
            <table border="1">
                <tr>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Curso</th>
                    <th>Descripción</th>
                </tr>
                <?php foreach ($estudiantes as $estudiante): ?>
                    <tr>
                        <td><?= htmlspecialchars($estudiante["cedula"], ENT_QUOTES, "UTF-8") ?></td>
                        <td><?= htmlspecialchars($estudiante["nombre"], ENT_QUOTES, "UTF-8") ?></td>
                        <td><?= htmlspecialchars($estudiante["apellido"], ENT_QUOTES, "UTF-8") ?></td>
                        <td><?= htmlspecialchars($estudiante["curNombre"], ENT_QUOTES, "UTF-8") ?></td>
                        <td><?= htmlspecialchars($estudiante["curDescripcion"], ENT_QUOTES, "UTF-8") ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>No hay estudiantes registrados en ese curso.</p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
