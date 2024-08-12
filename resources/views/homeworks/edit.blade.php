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
            EditarTarea
          </h3>
        </div>
        
        <div class="col" style="text-align: right; padding-right: 0;">
            <a href="{{ url('tareas') }}" class="btn" style="background-color: black; color: white; border-radius: 25px; font-weight: bold; padding: 8px 20px; font-size: 0.9rem;">
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

      <form action="{{ url('/tareas/'.$homework->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name">Nombre de la tarea</label>
          <input type="text" name="name" class="form-control" value="{{ old('name',$homework->name) }}" required>
        </div>

        <div class="form-group">
          <label for="description">Descripción</label>
          <input type="text" name="description" class="form-control" value="{{ old('description', $homework->description) }}">
        </div>

        <div class="text-center">
          <label>   </label>
          
        </div>

        
        
        <div class="text-center">
            <button type="submit" class="btn" style="background-color: black; color: white; border-radius: 25px; font-weight: bold; padding: 8px 20px; font-size: 0.9rem; border: none;">
              Guardar 
            </button>
          </div>

        <div class="text-center">
          <label>   </label>
          
        </div>

        <div class="image-container" style="display: flex; justify-content: center;">
          <img src="https://i.pinimg.com/564x/66/46/d5/6646d542a47e9cb18fd11426d4b89b44.jpg" alt="Imagen Tareas" style="max-width: 100%; height: auto; display: block;">
        </div>
        
        
        
     

      
      </form>
    </div>
  </div>
</div>
