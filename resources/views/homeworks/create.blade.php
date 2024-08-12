<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velvet List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://i.pinimg.com/736x/2d/2f/8c/2d2f8c65fe9888b416d2230688a3b7ec.jpg'); /* Reemplaza con la ruta de tu imagen de fondo */
            background-size: cover;
            background-position: center;
            height: 200vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .container-central {
            background-color: rgba(300, 300, 300, 0); /* Fondo semi-transparente para el contenedor */
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .button-row {
            display: flex;
            gap: 40px; /* Espacio entre los botones */
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
        

      
  
    


    </style>
</head>

<body>

<div class="d-flex justify-content-center align-items-center vh-100">
  <div class="card shadow" style="background-color: white.; border-radius: 50px; padding: 50px; max-width: 700px; width: 300%;">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col text-center">
          <h3 class="mb-0" style="font-size: 2.5rem; font-weight: bold; font-family: 'Baloo 2', cursive;">
            Nueva Tarea
          </h3>
        </div>
        
        <div class="col text-right">
          <a href="{{ url('tareas') }}" class="btn btn-lg" style="background-color: black; color: white; border-radius: 35px; font-weight: bold; padding: 10px 25px; margin-right: 0;">
            <i class="fas fa-chevron-left"></i>
            Regresar
          </a>
        </div>
        
      </div>
    </div>

    <div class="card-body">
      @if ($errors->any())
        @foreach ($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
            <strong>Por favor! </strong> {{ $error }}
          </div>
        @endforeach
      @endif

      <form action="{{ url('tareas') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="name">Nombre de la tarea</label>
          <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
          <label for="description">Descripción</label>
          <input type="text" name="description" class="form-control" value="{{ old('description') }}">
        </div>

        <div class="text-center">
          <label>   </label>
          
        </div>

        
        <div class="text-center">
          <button type="submit" class="btn btn-lg" style="background-color: black; color: white; border-radius: 35px; font-weight: bold; padding: 10px 25px; border: none;">
            Agregar
          </button>
        </div>

        <div class="text-center">
          <label>   </label>
          
        </div>

        <div class="image-container" style="display: flex; justify-content: center;">
          <img src="https://i.pinimg.com/564x/b3/36/53/b3365351efca9cc1d014de92bd73e170.jpg" alt="Imagen Tareas" style="max-width: 100%; height: auto; display: block;">
        </div>
        
        
        
     

      
      </form>
    </div>
  </div>
</div>
