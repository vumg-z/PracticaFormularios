<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Información de Calificación</title>
</head>
<body class="bg-gray-300 flex items-center justify-center min-h-screen">

<div class="bg-white p-8 rounded shadow-lg">
    <h1 class="text-2xl mb-4 text-center">Información de Calificación</h1>

    <div class="flex -mx-2">
        <!-- Columna 1 -->
        <div class="w-1/2 px-2">
            <!-- Mostrar PK_Calificacion -->
            <div class="mb-4">
                <strong class="block text-sm font-medium text-gray-600">ID Calificación:</strong>
                <span><?php echo htmlspecialchars($_POST['PK_Calificacion']); ?></span>
            </div>

            <!-- Mostrar Calificación -->
            <div class="mb-4">
                <strong class="block text-sm font-medium text-gray-600">Calificación:</strong>
                <span><?php echo htmlspecialchars($_POST['Calificacion']); ?></span>
            </div>

            <!-- Mostrar Periodo -->
            <div class="mb-4">
                <strong class="block text-sm font-medium text-gray-600">Periodo:</strong>
                <span><?php echo htmlspecialchars($_POST['Periodo']); ?></span>
            </div>

            <!-- Mostrar Alumno -->
            <div class="mb-4">
                <strong class="block text-sm font-medium text-gray-600">ID Alumno:</strong>
                <span><?php echo htmlspecialchars($_POST['Alumno']); ?></span>
            </div>
        </div>

        <!-- Columna 2 -->
        <div class="w-1/2 px-2">
            <!-- Mostrar Profesor -->
            <div class="mb-4">
                <strong class="block text-sm font-medium text-gray-600">ID Profesor:</strong>
                <span><?php echo htmlspecialchars($_POST['Profesor']); ?></span>
            </div>

            <!-- Mostrar Asignatura -->
            <div class="mb-4">
                <strong class="block text-sm font-medium text-gray-600">Asignatura:</strong>
                <span><?php echo htmlspecialchars($_POST['Asignatura']); ?></span>
            </div>
        </div>
    </div>

    <a href="frm_calif.html" class="text-blue-600 hover:underline block text-center mt-4">Volver al formulario</a>
</div>

</body>
</html>
