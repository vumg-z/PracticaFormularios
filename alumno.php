<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Resultados del Formulario</title>
</head>
<body class="bg-gray-300 flex items-center justify-center min-h-screen">

<div class="bg-white p-8 rounded shadow-lg text-center">
    <h1 class="text-2xl mb-4">Información del Alumno</h1>

    <!-- Mostrar el nombre -->
    <div class="mb-4">
        <strong class="block text-sm font-medium text-gray-600">Nombre:</strong>
        <span><?php echo htmlspecialchars($_POST['nombre']); ?></span>
    </div>

    <!-- Mostrar el género -->
    <div class="mb-4">
        <strong class="block text-sm font-medium text-gray-600">Género:</strong>
        <span><?php echo htmlspecialchars($_POST['genero']); ?></span>
    </div>

    <!-- Mostrar la fecha de nacimiento -->
    <div class="mb-4">
        <strong class="block text-sm font-medium text-gray-600">Fecha de Nacimiento:</strong>
        <span><?php echo htmlspecialchars($_POST['fechaNacimiento']); ?></span>
    </div>

    <a href="frm_alumno.html" class="text-blue-600 hover:underline">Volver al formulario</a>
</div>

</body>
</html>
