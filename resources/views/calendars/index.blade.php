<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velvet List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://i.pinimg.com/originals/2d/2f/8c/2d2f8c65fe9888b416d2230688a3b7ec.jpg'); /* Imagen de fondo */
            background-size: cover;
            background-position: center;
            height: 300vh; /* Aumenta la altura del fondo */
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            position: relative;
            flex-direction: column; /* Apila los contenedores en columna */
            gap: 20px; /* Espacio entre los contenedores */
        }

        .container-central {
            width: 60%; /* Ajusta el tamaño del contenedor según sea necesario */
            height: auto;
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semitransparente para resaltar la imagen */
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-central img {
            width: 100%;
            height: auto;
            object-fit: cover; /* Asegura que la imagen se ajuste correctamente dentro del contenedor */
            border-radius: 20px; /* Bordes redondeados */
        }

        .btn-siguiente {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #d4a373;
            color: #000;
            font-family: 'Poppins', sans-serif;
            padding: 10px 20px;
            border-radius: 20px;
            font-size: 16px;
            border: none;
        }

        .btn-siguiente:hover {
            background-color: #c08d57;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container-central">
        <img src="https://i.pinimg.com/736x/c2/c4/75/c2c475e847d877c4a0548a9d3dc11d59.jpg" alt="Imagen completa dentro del contenedor">
    </div>

    <div class="container-central">
        <img src="https://i.pinimg.com/736x/d7/f0/18/d7f018ea04ee96a3d44767bca8be1fba.jpg" alt="Otra imagen dentro del segundo contenedor">
    </div>
</body>

</html>
