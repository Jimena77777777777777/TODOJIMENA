<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velvet List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://i.pinimg.com/736x/41/df/cc/41dfcc8b97f6235195d271b64c451c07.jpg'); /* Reemplaza con la ruta de tu imagen de fondo */
            background-size: cover;
            background-position: center;
            height: 200vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .container-central {
            background-color: rgba(300, 300, 300, 0.2); /* Fondo semi-transparente para el contenedor */
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .button-row {
            display: flex;
            gap: 20px; /* Espacio entre los botones */
            justify-content: center;
            margin-top: 20px;
        }
        .button-row button {
            background-color: #780000; 
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            flex: 1; /* Hace que los botones tengan el mismo tamaño */
        }
        .button-row button:hover {
            background-color: #780000; /* Color más oscuro al pasar el cursor */
        }
        .image-container {
            width: 250px; /* Ancho del contenedor de imagen */
            height: 250px; /* Altura del contenedor de imagen */
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            border: 1px solid #ddd; /* Borde opcional */
            border-radius: 5px; /* Esquinas redondeadas del contenedor */
            overflow: hidden; /* Esconde partes de la imagen que sobresalgan */
        }
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Asegura que la imagen cubra todo el contenedor sin deformarse */
        }
    </style>
</head>

<body>

    
@include('includes.panel.menu')


@include('includes.panel.footer')

</body>



</html>
