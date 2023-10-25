<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>CHINO 17100222</title>
</head>
<body class="bg-gray-300 flex items-center justify-center min-h-screen">

<div class="bg-white p-8 rounded shadow-lg text-center">
    <h1 class="text-2xl mb-4">Calificación Ingresada</h1>

    <!-- Mostrar el nombre del estudiante -->
    <div class="mb-4">
        <strong class="block text-sm font-medium text-gray-600">Nombre del Estudiante:</strong>
        <span><?php echo htmlspecialchars($_POST['nombreEstudiante']); ?></span>
    </div>

    <!-- Mostrar la calificación -->
    <div class="mb-4">
        <strong class="block text-sm font-medium text-gray-600">Calificación:</strong>
        <span><?php echo htmlspecialchars($_POST['calificacion']); ?></span>
    </div>

    <!-- Mostrar la materia -->
    <div class="mb-4">
        <strong class="block text-sm font-medium text-gray-600">Materia:</strong>
        <span><?php echo htmlspecialchars($_POST['materia']); ?></span>
    </div>

    <a href="frm_calif.html" class="text-blue-600 hover:underline">Volver al formulario</a>
</div>

</body>
</html>
