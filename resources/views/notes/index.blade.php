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
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container-central {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px; /* Espacio entre el título y los contenedores */
        }

        .note-container {
            width: 200px;
            height: 200px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            font-family: 'Comic Sans MS', 'Georgia', serif;
            font-size: 1.5rem;
            color: #000;
        }

        h5 {
            font-family: 'Comic Sans MS', 'Georgia', serif;
            font-size: 2rem;
            color: #fefae0;
            text-align: center;
        }

    </style>
</head>

<body>

    <body>
        <div class="card shadow-lg border-5  rounded-5">
           
                <div class="card-header border-5 bg-light">
                    <div class="row align-items-center">
                        <div class="col text-center">
                            <div class="d-flex justify-content-center align-items-center mb-3 pb-1">
                                <i class="fas fa-cubes fa-2x me-1" style="color: #000000;"></i>
                                <span class="h1 fw-bold mb-0" style="color: #000000; font-family: 'Baloo', cursive;">Tus Notas</span>
                            </div>
                        </div>
                    
                    <div class="col d-flex justify-content-end">
                        <a href="{{ url('notas/create') }}" class="btn btn-md text-black" style="background-color: #d4a373; border-radius: 20px; font-family: 'Poppins', sans-serif; padding: 10px 20px; font-size: 16px;">Agregar</a>
                    </div>
                    

                </div>
            </div>
    
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead style="background-color: rgba(200, 200, 200, 0.1);">
                        <tr>
                            <th scope="col" style="font-family: 'Poppins', sans-serif; color: #666; padding: 15px;">Titulo </th>
                            <th scope="col" style="font-family: 'Poppins', sans-serif; color: #666; padding: 15px;">Descripción de la tarea</th>
                            <th scope="col" style="font-family: 'Poppins', sans-serif; color: #666; padding: 15px;">Opciones</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notes as $note)
                        <tr>
                            <td style="font-family: 'Poppins', sans-serif; color: #333; padding: 20px;">
                                {{ $note->name }}
                            </td>
                            <td style="font-family: 'Poppins', sans-serif; color: #555; padding: 20px;">
                                {{ $note->description }}
                            </td>


                            <td style="padding: 15px;">
                                <a href="{{ url('notas/' . $note->id . '/edit') }}" class="btn btn-md text-black" style="background-color: #f5f5dc; border-radius: 20px; font-family: 'Poppins', sans-serif; padding: 10px 20px;">Editar
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                                        <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
                                      </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                                      </svg>
                                </a>
                                <form action="{{ url('notas/' . $note->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-md text-black" style="background-color: #f2cc8f; border-radius: 20px; font-family: 'Poppins', sans-serif; padding: 10px 20px;">Eliminar
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                          </svg>    
                                    </button>
                                </form>
                            </td>
                            



                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
        <!-- Add this link to include the Baloo font -->
        <link href="https://fonts.googleapis.com/css2?family=Baloo:wght@600&display=swap" rel="stylesheet">
    </body>
    

</body>

</html>
