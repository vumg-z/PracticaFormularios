<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Información del Alumno</title>
</head>
<body class="bg-gray-300 flex items-center justify-center min-h-screen">

<div class="bg-white p-8 rounded shadow-lg">
    <h1 class="text-2xl mb-4 text-center">Información del Alumno</h1>

    <div class="flex -mx-2">
        <!-- Columna 1 -->
        <div class="w-1/2 px-2">
            <!-- Mostrar el Registro -->
            <div class="mb-4">
                <strong class="block text-sm font-medium text-gray-600">Registro:</strong>
                <span><?php echo htmlspecialchars($_POST['Registro']); ?></span>
            </div>

            <!-- Mostrar el Nombre y ApeP -->
            <div class="mb-4">
                <strong class="block text-sm font-medium text-gray-600">Nombre:</strong>
                <span><?php echo htmlspecialchars($_POST['Nombre']); ?></span>
            </div>
            <div class="mb-4">
                <strong class="block text-sm font-medium text-gray-600">Apellido Paterno:</strong>
                <span><?php echo htmlspecialchars($_POST['ApeP']); ?></span>
            </div>

            <!-- Mostrar el Celular -->
            <div class="mb-4">
                <strong class="block text-sm font-medium text-gray-600">Celular:</strong>
                <span><?php echo htmlspecialchars($_POST['Celular']); ?></span>
            </div>

            <!-- Mostrar el Domicilio -->
            <div class="mb-4">
                <strong class="block text-sm font-medium text-gray-600">Domicilio:</strong>
                <span><?php echo htmlspecialchars($_POST['Domicilio']); ?></span>
            </div>
        </div>

        <!-- Columna 2 -->
        <div class="w-1/2 px-2">
            <!-- Mostrar ApeM -->
            <div class="mb-4">
                <strong class="block text-sm font-medium text-gray-600">Apellido Materno:</strong>
                <span><?php echo htmlspecialchars($_POST['ApeM']); ?></span>
            </div>

            <!-- Mostrar el Sexo -->
            <div class="mb-4">
                <strong class="block text-sm font-medium text-gray-600">Sexo:</strong>
                <span><?php echo htmlspecialchars($_POST['Sexo']); ?></span>
            </div>

            <!-- Mostrar el Municipio y Carrera -->
            <div class="mb-4">
                <strong class="block text-sm font-medium text-gray-600">Municipio (Código):</strong>
                <span><?php echo htmlspecialchars($_POST['Municipio']); ?></span>
            </div>
            <div class="mb-4">
                <strong class="block text-sm font-medium text-gray-600">Carrera (Código):</strong>
                <span><?php echo htmlspecialchars($_POST['Carrera']); ?></span>
            </div>
        </div>
    </div>

    <a href="frm_alumno.html" class="text-blue-600 hover:underline block text-center mt-4">Volver al formulario</a>
</div>

</body>
</html>
