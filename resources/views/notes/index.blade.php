<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velvet List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://i.pinimg.com/736x/2d/2f/8c/2d2f8c65fe9888b416d2230688a3b7ec.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #fefae0;
            border-radius: 20px 20px 0 0;
        }

        h5 {
            font-family: 'Comic Sans MS', 'Georgia', serif;
            font-size: 2rem;
            color: #000;
            text-align: center;
        }

        .note-container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            font-family: 'Comic Sans MS', 'Georgia', serif;
            color: #000;
            margin-bottom: 15px;
        }

        .btn-custom {
            background-color: #d4a373;
            border-radius: 20px;
            font-family: 'Poppins', sans-serif;
            padding: 10px 20px;
            font-size: 16px;
            color: black;
        }

        .table-responsive {
            padding: 15px;
        }

        th,
        td {
            font-family: 'Poppins', sans-serif;
            padding: 15px;
            color: #333;
            text-align: center;
        }

        th {
            color: #666;
        }

        .btn-action {
            background-color: #f5f5dc;
            border-radius: 20px;
            font-family: 'Poppins', sans-serif;
            padding: 10px 20px;
            color: black;
        }

        .btn-delete {
            background-color: #f2cc8f;
            border-radius: 20px;
            font-family: 'Poppins', sans-serif;
            padding: 10px 20px;
            color: black;
        }

    </style>
</head>

<body>
    <div class="card shadow-lg border-5 rounded-5">
        <div class="card-header border-5">
            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="d-flex justify-content-center align-items-center mb-3 pb-1">
                        <i class="fas fa-cubes fa-2x me-1" style="color: #000000;"></i>
                        <span class="h1 fw-bold mb-0" style="color: #000000; font-family: 'Baloo', cursive;">Tus Notas</span>
                    </div>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="{{ url('notas/create') }}" class="btn btn-md btn-custom">Agregar</a>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            @foreach ($notes as $note)
            <div class="note-container">
                <h5>{{ $note->name }}</h5>
                <p>{{ $note->description }}</p>
                <div class="d-flex justify-content-between">
                    <a href="{{ url('notas/' . $note->id . '/edit') }}" class="btn btn-md btn-action">Editar</a>
                    <form action="{{ url('notas/' . $note->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-md btn-delete">Eliminar</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <link href="https://fonts.googleapis.com/css2?family=Baloo:wght@600&display=swap" rel="stylesheet">
</body>

</html>
